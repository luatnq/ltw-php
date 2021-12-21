<?php 
    require_once('../../data/OrderRepository.php');
    require_once('../../model/Order.php');
    session_start();
    $customerId = $_POST['slCustomer'];
    $productId = $_POST['slProduct'];
    $userId = $_SESSION['userId'];
    $quantity = $_POST['quantity'];
    
    $order = new OrderRepository();
    $query = $order->getPriceProduct($productId);

    $row = mysqli_fetch_row($query);
    $total = $row[0] * $quantity;
    $createOrder = new Order($customerId, $productId, $userId, $total, $quantity);
    $data = $order->createOrder($createOrder);
    echo $data;
?>