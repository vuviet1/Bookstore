<?php
function information(){
    $id = $_SESSION['id_customer'];
    include_once 'connect/openConnect.php';
    $sql = "SELECT * FROM customer WHERE id_customer = '$id'";
    $users = mysqli_query($connect, $sql);
    $cart = array();
    $total = 0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $amount) {
            //                Lấy tên sp và giá theo product_id
            $sql = "SELECT * FROM product WHERE id_product = '$product_id'";
            $products = mysqli_query($connect, $sql);
            foreach ($products as $product) {
                $cart[$product_id]['image'] = $product['image'];
                $cart[$product_id]['product_name'] = $product['product_name'];
                $cart[$product_id]['price'] = $product['price'];
                $cart[$product_id]['amount'] = $amount;
                $total += $product['price'] * $amount;
            }
        }
    }
    $sqlship = "SELECT * FROM shipping";
    $shipping = mysqli_query($connect, $sqlship);
    $sqlpay = "SELECT * FROM payment";
    $payment = mysqli_query($connect, $sqlpay);
    include_once 'connect/closeConnect.php';
    $check_out = array();
    $check_out['users'] = $users;
    $check_out['cart'] = $cart;
    $check_out['total'] = $total;
    $check_out['shipping'] = $shipping;
    $check_out['payment'] = $payment;
    return $check_out;
}
switch ($action) {
    case '':
        $KH = information();
        break;
}