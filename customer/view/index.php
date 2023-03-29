<?php
include_once("layout/header.php");

//lấy controller đang làm việc
$controller = '';
if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
}

//Kiểm tra đó là controller nào
switch ($controller){
    case '':
        include_once "main.html";
        break;
    case 'tk':
        include_once "view/admin/acc-set.php";
        break;
    case 'theloai':
        include_once "controller/admin/tl-control.php";
        break;
    case 'nv':
        include_once "controller/admin/nv-control.php";
        break;
    case 'kh':
        include_once "controller/admin/kh-control.php";
        break;
    case 'hoadon':
        include_once "controller/admin/hoadon-control.php";
        break;
    case 'nxb':
        include_once "controller/admin/nxb-control.php";
        break;
    case 'pttt':
        include_once "controller/admin/pttt-control.php";
        break;
    case 'ptvc':
        include_once "controller/admin/ptvc-control.php";
        break;
    case 'sp':
        include_once "controller/admin/sp-control.php";
        break;
    default:
        echo "Chưa chọn controller nào";
        break;
}



include_once("layout/footer.php");