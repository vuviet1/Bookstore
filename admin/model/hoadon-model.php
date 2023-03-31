<?php
//function lấy dữ liệu từ db
function index(){
    $search = '';
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    include_once 'connect/openConnect.php';
    $sqlCount = "SELECT COUNT(*) AS count_record FROM bill WHERE status LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 3;
    $sql = "SELECT bill.*, employee.name_employee, customer.name_customer, customer.address, customer.phone_number, payment.name_payment, shipping.name_shipping FROM bill INNER JOIN employee ON bill.id_employee = employee.id_employee INNER JOIN customer ON bill.id_customer = customer.id_customer INNER JOIN payment ON bill.id_payment = payment.id_payment INNER JOIN shipping ON bill.id_shipping = shipping.id_shipping WHERE status LIKE '%$search%' LIMIT $start, $end";
    $bill = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $bill;
    $array['page'] = $countPage;
    return $array;
}
function addBill_detail(){
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM product";
    $product = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $product;
}
function addBill()
{
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM customer";
    $customer = mysqli_query($connect, $sql);
    $sqlemployee = "SELECT * FROM employee";
    $employee = mysqli_query($connect, $sqlemployee);
    $sqlpayment = "SELECT * FROM payment";
    $payment = mysqli_query($connect, $sqlpayment);
    $sqlshipping = "SELECT * FROM shipping";
    $shipping = mysqli_query($connect, $sqlshipping);
    include_once 'connect/closeConnect.php';
    $arr = array();
    $arr['customer'] = $customer;
    $arr['employee'] = $employee;
    $arr['payment'] = $payment;
    $arr['shipping'] = $shipping;
    return $arr;
}

//function lưu dữ liệu lên db
function store(){

}

//Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])){
    $action= $_GET['action'];
}

switch ($action){
    case '':
        //lấy dữ liệu từ db
        $array = index();
        break;
    case 'addbill':
        $arr = addBill();
        break;
    case 'edit':
        break;
    case 'store':
        //lưu dữ liệu lên db
        break;
}