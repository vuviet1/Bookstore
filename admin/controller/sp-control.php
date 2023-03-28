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
        include_once 'view/sp/sp-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/sp/sp-add.php';
        break;
    case 'edit':
        //Hiển thị danh sách các
        include_once 'view/sp/sp-edit.php';
        break;
    case 'create':
        include_once 'model/sp-model.php';
        break;
    case 'store':
//        include_once 'model/admin/tl-model.php';
        break;
}