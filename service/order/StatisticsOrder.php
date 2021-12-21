<?php
    require_once('../../data/OrderRepository.php');  
    $orderRepo = new OrderRepository();
    
    $result = array();
    $i = 0;
    while($i <=12 ){
        $data = $orderRepo->getNumberOrderByMonth($i);
        $sum = mysqli_num_rows($data);
        $result[$i] = $sum; 
        $i = $i + 1;
    }
     
    echo json_encode($result);
?>