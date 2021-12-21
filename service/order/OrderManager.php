<?php
     require_once('../../data/OrderRepository.php');
     require_once('../../model/ResponseSearch.php');
     require_once('../../model/SearchOrder.php');

     $orderRepo = new OrderRepository();
     $name = $_POST["name"];
     $data = $orderRepo->getOrderManger($name);
     $rows = array();
     while ($row = mysqli_fetch_array($data->result)) {
         $rows[] = array(
             'username'  =>    $row['full_name'],
             'madh' =>    $row['ma_don_hang'],
             'createdDate' =>    $row['created_date'],
             'status' => $row['status'],
             'price' => number_format($row['price']),
             'id' => $row['id'],
         );
     }
     
     $output = array(
         'data'                =>    $rows,
     );
     echo json_encode($output);
?>