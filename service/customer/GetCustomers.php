<?php
require_once('../../data/OrderRepository.php');
    $order = new OrderRepository();
    $data = $order->getCustomers();
    $result = array();
    while($row = mysqli_fetch_array($data)){
        $result[] = array(
            'id' => $row["id"],
            'fullName' => $row["full_name"],
            'address' => $row["address"],
            'phone' => $row["phone"],
        );
    }
    echo json_encode($result);
?>