<?php
    require_once('../../data/OrderRepository.php');
    $order = new OrderRepository();
    $id = $_POST['id'];
    $customer_id = $_POST['eCustomer'];
    $product_id = $_POST['eProduct'];
    $quantity = $_POST['quantity'];

    $query = $order->getPriceProduct($product_id);
    $row = mysqli_fetch_row($query);
    $price = $row[0] * $quantity;

    echo $order->updateOrder($id, $customer_id, $product_id, $quantity, $price);
?>