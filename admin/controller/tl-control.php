<?php

//Lấy hành động đang thực hiện
$action = '';
if (isset($_GET['action'])){
    $action= $_GET['action'];
}

//Kiểm tra hành động đang thực hiện
switch ($action){
    case '':
        //Hiển thị danh sách các
        include_once 'view/theloai/tl-show.php';
        break;
    case 'add':
        //Hiển thị danh sách các
        include_once 'view/theloai/tl-add.php';
        break;
    case 'edit':
        //Hiển thị danh sách các
        include_once 'view/theloai/tl-edit.php';
        break;
    case 'model':
        include_once 'model/tl-model.php';
        break;
    case 'store':
//        include_once 'model/admin/tl-model.php';
        break;
}