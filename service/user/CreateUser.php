<?php 
    require_once('../../data/UserRepository.php');
    require_once('../../model/User.php');
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = '1234';
    $user = new User("", $name, $email, $phone, $role, 0, "", $password, $username);
    $userRepo = new UserRepository();
    echo $userRepo->createUser($user);
?>