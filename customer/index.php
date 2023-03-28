<?php

include_once "view/customer/layout/header.php";

//lấy controller đang làm việc
$controller = '';
if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
}

//Kiểm tra đó là controller nào
switch ($controller){
    case '':
        include_once "view/customer/main.html";
        break;
    case 'contact':
        include_once "view/customer/contact/contact.php";
        break;
    case 'shop-grid':
        include_once "view/customer/shop_grid/shop-grid.html";
        break;
    case 'check-out':
        include_once "view/customer/check_out/checkout.html";
        break;
    case 'shop-cart':
        include_once "view/customer/shopping_cart/shoping-cart.html";
        break;
    case 'shop-details':
        include_once "view/customer/shop_details/shop-details.html";
        break;
//    case 'admin':
//        include_once "admin.php";
//        break;
    default:
//        include_once "view/customer/main.html";
        break;
}

include_once "view/customer/layout/footer.php";

