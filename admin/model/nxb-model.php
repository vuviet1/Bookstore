<?php
//function lấy dữ liệu từ db
function index(){
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM publishing_company";
    $array = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $array;
}
function edit(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM publishing_company WHERE id_publishing_company = '$id'";
    $PTVC = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $PTVC;
}
function update(){
    $id = $_POST['id'];
    $name = $_POST['nxb'];
    include_once 'connect/openConnect.php';
    $sql = "UPDATE publishing_company SET publishing_company_name = '$name' WHERE id_publishing_company = '$id'";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
//function lưu dữ liệu lên db
function store(){
    $name = $_POST['nxb'];
    include_once 'connect/openConnect.php';
    $sql = "INSERT INTO publishing_company(publishing_company_name) VALUES ('$name')";
    mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
}
function destroy(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "DELETE FROM publishing_company WHERE id_publishing_company = '$id'";
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
        $NXB = edit();
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