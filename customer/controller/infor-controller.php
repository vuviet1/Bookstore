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
//        include_once 'model/check-out-model.php';
        include_once 'view/information/acc.php';
        break;
    case 'set':
//        include_once 'model/check-out-model.php';
        include_once 'view/information/acc-set.php';
        break;
}