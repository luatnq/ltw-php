<?php
    require_once('../../data/OrderRepository.php');
    $order = new OrderRepository();
    $data = $order->getProducts();
    $result = array();
    while($row = mysqli_fetch_array($data)){
        $result[] = array(
            'id' => $row["id"],
            'name' => $row["name"],
            'image' => $row["url_image"],
            'price' => $row["price"]
        );
    }
    echo json_encode($result);
?>