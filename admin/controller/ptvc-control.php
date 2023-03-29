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
        include_once 'model/ptvc-model.php';
        include_once 'view/ptvc/ptvc-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/ptvc/ptvc-add.php';
        break;
    case 'edit':
        include_once 'model/ptvc-model.php';
        include_once 'view/ptvc/ptvc-edit.php';
        break;
    case 'update':
        include_once 'model/ptvc-model.php';
        header('Location:index.php?controller=ptvc');
        break;
    case 'create':
        include_once 'model/ptvc-model.php';
        break;
    case 'destroy':
        include_once 'model/ptvc-model.php';
        header('location: index.php?controller=ptvc');
        break;
    case 'store':
        include_once 'model/ptvc-model.php';
        header('location: index.php?controller=ptvc');
        break;
}