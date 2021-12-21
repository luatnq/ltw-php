<?php 
    require_once('../../data/UserRepository.php');
    require_once('../../model/Customer.php');
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $customer = new Customer("", $name, $phone, $address);
    $userRepo = new UserRepository();
    echo $userRepo->createCustomer($customer);
?>