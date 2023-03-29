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
        include_once 'model/nxb-model.php';
        include_once 'view/nxb/nxb-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/nxb/nxb-add.php';
        break;
    case 'edit':
        include_once 'model/nxb-model.php';
        include_once 'view/nxb/nxb-edit.php';
        break;
    case 'update':
        include_once 'model/nxb-model.php';
        header('Location:index.php?controller=nxb');
        break;
    case 'create':
        include_once 'model/nxb-model.php';
        break;
    case 'destroy':
        include_once 'model/nxb-model.php';
        header('location: index.php?controller=nxb');
        break;
    case 'store':
        include_once 'model/nxb-model.php';
        header('location: index.php?controller=nxb');
        break;
}