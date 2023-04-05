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
        include_once 'model/check-out-model.php';
        include_once 'view/check_out/checkout.php';
        break;
    case 'add-to-db':
        include_once 'model/check-out-model.php';
        break;
}