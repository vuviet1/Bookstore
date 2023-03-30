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
    $sqlCount = "SELECT COUNT(*) AS count_record FROM category WHERE name_category LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 5;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 5;
    $sql = "SELECT * FROM category WHERE name_category LIKE '%$search%' LIMIT $start, $end";
    $category = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['infor'] = $category;
    $array['page'] = $countPage;
    return $array;
}
function edit(){
    $id = $_GET['id'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM category WHERE id_category = '$id'";
    $TL = mysqli_query($connect, $sql);
    include_once 'connect/closeConnect.php';
    return $TL;
}
function update(){
    $id = $_POST['id'];
    $name = $_POST['tl'];
    include_once 'connect/openConnect.php';
    $sql = "UPDATE category SET name_category = '$name' WHERE id_category = '$id'";
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
    $sql = "DELETE FROM category WHERE id_category = '$id'";
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