<?php
//function lấy dữ liệu từ db
function index(){
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM category";
    $array = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $array;
}
function edit(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM category WHERE ID_category = '$id'";
    $TL = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $TL;
}
function update(){
    $id = $_POST['id'];
    $name = $_POST['tl'];
    include_once 'connect/openConnect.php';
    $sql = "UPDATE category SET name_category = '$name' WHERE ID_category = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
//function lưu dữ liệu lên db
function store(){
    $name = $_POST['tl'];
    include_once 'connect/openConnect.php';
    $sql = "INSERT INTO category(name_category) VALUES ('$name')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
function destroy(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "DELETE FROM category WHERE ID_category = '$id'";
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
        $TL = edit();
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