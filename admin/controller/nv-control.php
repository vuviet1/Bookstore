<?php


//Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

//Kiểm tra hành động đang thực hiện
switch ($action) {
    case '':
        //Hiển thị danh sách các
        include_once 'view/nv/nv-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/nv/nv-add.php';
        break;
    case 'edit':
        //Hiển thị danh sách các
        include_once 'view/nv/nv-edit.php';
        break;
    case 'create':
        include_once 'model/nv-model.php';
        break;
    case 'store':
//        include_once 'model/admin/tl-model.php';
        break;
}