<?php 
    require_once('../../data/OrderRepository.php');
    $order = new OrderRepository();
    if(isset($_POST['accept'])){
        echo $order->handleOrder($_POST['id'], 1);
    }else if(isset($_POST['delete'])){
        echo $order->handleOrder($_POST['id'], 2);
    }
    else if(isset($_POST['cancel'])){
        echo $order->handleOrder($_POST['id'], 3);
    }
?>