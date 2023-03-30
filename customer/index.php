<?php

include_once "view/layout/header.php";

//lấy controller đang làm việc
$controller = '';
if (isset($_GET['controller'])){
    $controller = $_GET['controller'];
}

//Kiểm tra đó là controller nào
switch ($controller){
    case '':
        include_once "view/main.html";
        break;
    case 'contact':
        include_once "view/contact/contact.php";
        break;
    case 'shop-grid':
        include_once "view/shop_grid/shop-grid.html";
        break;
    case 'check-out':
        include_once "view/check_out/checkout.html";
        break;
    case 'shop-cart':
        include_once "view/shopping_cart/shoping-cart.html";
        break;
    case 'shop-details':
        include_once "view/shop_details/shop-details.html";
        break;
    default:
        include_once "view/main.html";
        break;
}

include_once "view/layout/footer.php";

