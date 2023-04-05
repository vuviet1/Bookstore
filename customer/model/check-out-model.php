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
    $sqlemp = "SELECT * FROM employee";
    $employee = mysqli_query($connect, $sqlemp);

    include_once 'connect/closeConnect.php';
    $check_out = array();
    $check_out['users'] = $users;
    $check_out['cart'] = $cart;
    $check_out['total'] = $total;
    $check_out['shipping'] = $shipping;
    $check_out['payment'] = $payment;
    $check_out['employee'] = $employee;
    return $check_out;
}
function add_order_to_db(){
    $customer_id = $_SESSION['id_customer'];
    $date_buy = date('Y-m-d');
    $admin_id = $_POST['id_employee'];
    $status = 0;
    include_once 'connect/openConnect.php';
    $sqlOrder = "INSERT INTO orders(date_buy, customer_id, admin_id, status) VALUES ('$date_buy', '$customer_id', '$admin_id', '$status')";
    mysqli_query($connect, $sqlOrder);
    $sqlOrderID = "SELECT MAX(id) as order_id FROM orders WHERE customer_id = '$customer_id'";
    $orderIDs = mysqli_query($connect, $sqlOrderID);
    foreach ($orderIDs as $value){
        $orderID = $value['order_id'];
    }
    foreach ($_SESSION['cart'] as $product_id => $amount){
        $sqlPriceProduct = "SELECT price FROM product WHERE id = '$product_id'";
        $priceProduct = mysqli_query($connect, $sqlPriceProduct);
        foreach ($priceProduct as $each){
            $price = $each['price'];
        }
        $sql = "INSERT INTO order_detail VALUES ('$orderID', '$product_id', '$price', '$amount')";
        mysqli_query($connect, $sql);
    }
    include_once 'connect/closeConnect.php';
    unset($_SESSION['cart']);
}
switch ($action) {
    case '':
        $KH = information();
        break;
}