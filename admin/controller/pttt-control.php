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
        include_once 'model/pttt-model.php';
        include_once 'view/pttt/pttt-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/pttt/pttt-add.php';
        break;
    case 'edit':
        include_once 'model/pttt-model.php';
        include_once 'view/pttt/pttt-edit.php';
        break;
    case 'update':
        include_once 'model/pttt-model.php';
        header('Location:index.php?controller=pttt');
        break;
    case 'create':
        include_once 'model/pttt-model.php';
        break;
    case 'destroy':
        include_once 'model/pttt-model.php';
        header('location: index.php?controller=pttt');
        break;
    case 'store':
        include_once 'model/pttt-model.php';
        header('location: index.php?controller=pttt');
        break;
}