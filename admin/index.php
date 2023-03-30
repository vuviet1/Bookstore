<?php
include_once "view/header.php";
include_once "view/navbar.php";
include_once "view/search.php";

//lấy controller đang làm việc
$controller = '';
if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
}

//Kiểm tra đó là controller nào
switch ($controller){
    case '':
        include_once "view/index.html";
        break;
    case 'tk':
        include_once "view/acc-set.php";
        break;
    case 'tacgia':
        include_once "controller/tg-control.php";
        break;
    case 'theloai':
        include_once "controller/tl-control.php";
        break;
    case 'nv':
        include_once "controller/nv-control.php";
        break;
    case 'kh':
        include_once "controller/kh-control.php";
        break;
    case 'hoadon':
        include_once "controller/hoadon-control.php";
        break;
    case 'nxb':
        include_once "controller/nxb-control.php";
        break;
    case 'pttt':
        include_once "controller/pttt-control.php";
        break;
    case 'ptvc':
        include_once "controller/ptvc-control.php";
        break;
    case 'sp':
        include_once "controller/sp-control.php";
        break;
    default:
        include_once "view/hoadon/hoadon-show.php";
        break;
}

include_once "view/footer.php";