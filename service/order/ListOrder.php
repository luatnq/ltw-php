<?php
     require_once('../../data/OrderRepository.php');
     require_once('../../model/ResponseSearch.php');
     require_once('../../model/SearchOrder.php');
  
     $orderRepo = new OrderRepository();
     $data = $orderRepo->getAll();
     $rows = array();
     while ($row = mysqli_fetch_array($data->result)) {
         $rows[] = array(
             'username'  =>    $row['username'],
             'madh' =>    $row['ma_don_hang'],
             'createdDate' =>    $row['created_date'],
             'status' => $row['status'],
             'price' => $row['price'],
         );
     }
     
     $output = array(
        'data'  =>    $rows,
     );
     echo json_encode($output);
?>