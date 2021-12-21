<?php
     require_once('../../data/OrderRepository.php');
     $id = $_POST['id'];
     $orderRepo = new OrderRepository();
     $data = $orderRepo->getOrderDetail($id);     
     $rows = mysqli_fetch_assoc($data);
     echo json_encode($rows);
?>