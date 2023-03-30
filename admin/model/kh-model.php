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
    $sqlCount = "SELECT COUNT(*) AS count_record FROM customer WHERE name_customer LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 5;
    $sql = "SELECT * FROM customer WHERE name_customer LIKE '%$search%' LIMIT $start, $end";
    $customer = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $customer;
    $array['page'] = $countPage;
    return $array;
}
function edit(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM customer WHERE id_customer = '$id'";
    $KH = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $KH;
}
function update(){
    $id = $_POST['id'];
    $name = $_POST['name_kh'];
    $username = $_POST['user_kh'];
    $password = $_POST['pass_kh'];
    $email = $_POST['email_kh'];
    $phone = $_POST['phone_kh'];
    $address = $_POST['address'];
    include_once 'connect/openConnect.php';
    $sql = "UPDATE customer SET name_customer = '$name',username = '$username',password = '$password',email = '$email',phone_number = '$phone',address = '$address' WHERE id_customer = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
//function lưu dữ liệu lên db
function store(){
    $name = $_POST['name_kh'];
    $username = $_POST['user_kh'];
    $password = $_POST['pass_kh'];
    $email = $_POST['email_kh'];
    $phone = $_POST['phone_kh'];
    $address = $_POST['address'];
    include_once 'connect/openConnect.php';
    $sql = "INSERT INTO customer(name_customer,username,password,email,phone_number,address) VALUES ('$name','$username','$password','$email','$phone','$address')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
function destroy(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "DELETE FROM customer WHERE id_customer = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
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
    case 'store':
        //lưu dữ liệu lên db
        store();
        break;
    case 'edit':
        //Lấy dữ liệu từ DB về dựa trên id
        $KH = edit();
        break;
    case 'update':
        //chỉnh sửa dữ liệu lên db
        update();
        break;
    case 'destroy':
        //xóa dữ liệu trên db
        destroy();
        break;
}