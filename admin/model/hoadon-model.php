<?php
//function lấy dữ liệu từ db
function index()
{
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
function addBill_detail()
{
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
function details()
{
    $id_bill = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sqlproduct = "SELECT bill_detail.*, bill.*, product.*, author.* FROM bill_detail 
    INNER JOIN bill ON bill_detail.id_bill = bill.id_bill 
    INNER JOIN product ON bill_detail.id_product = product.id_product 
    INNER JOIN author ON product.id_author = author.id_author WHERE bill.id_bill = '$id_bill' LIMIT 0, 25";
    $products = mysqli_query($connect, $sqlproduct);
    $sqlcustomer = "SELECT bill.*, payment.*, shipping.*, customer.* FROM bill
    INNER JOIN payment ON bill.id_payment = payment.id_payment 
    INNER JOIN shipping ON bill.id_shipping = shipping.id_shipping 
    INNER JOIN customer ON bill.id_customer = customer.id_customer
    WHERE bill.id_bill = '$id_bill'";
    $customer = mysqli_query($connect, $sqlcustomer);
    $sqlemployee = "SELECT  bill.*, employee.* FROM bill
    INNER JOIN employee ON bill.id_employee = employee.id_employee
    WHERE bill.id_bill = '$id_bill'";
    $employee = mysqli_query($connect, $sqlemployee);
    include_once 'connect/closeConnect.php';
    $bill = array();
    $bill['product'] = $products;
    $bill['customer'] = $customer;
    $bill['employee'] = $employee;
    return $bill;
}
function update()
{
    $status = $_POST['status'];
    $id_bill = $_POST['id_bill'];
    include_once 'connect/openConnect.php';
    $sqls = "SELECT * FROM bill WHERE id_bill = '$id_bill'";
    $checks = mysqli_query($connect, $sqls);
    foreach ($checks as $check) {
        if ($check['status'] == 4) {
            $message = "Đơn hàng đã hủy!";
            echo "<script>alert('$message');</script>";
            return 1;
        } elseif ($check['status'] == 3) {
            $message = "Đơn hàng đã hoàn thành!";
            echo "<script>alert('$message');</script>";
            return 1;
        } elseif ($status < $check['status']) {
            $message = "Đơn hàng không thể chuyển hổi trạng thái này!";
            echo "<script>alert('$message');</script>";
            return 1;
        } elseif ($status > $check['status']) {
            $sql = "UPDATE `bill` SET `status`='$status' WHERE id_bill = '$id_bill'";
            mysqli_query($connect, $sql);
            $message = "Đơn hàng cập nhật thành công!";
            echo "<script>alert('$message');</script>";
            return 0;
        }
    }
    include_once 'connect/closeConnect.php';
}
//function lưu dữ liệu lên db
function store()
{
}

//Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case '':
        //lấy dữ liệu từ db
        $array = index();
        break;
    case 'addbill':
        $arr = addBill();
        break;
    case 'edit':
        $bill = details();
        break;
    case 'update':
        $check = update();
        break;
    case 'store':
        //lưu dữ liệu lên db
        break;
    case 'details':
        $bill = details();
        break;
}
