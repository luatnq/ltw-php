<?php 
    require_once('../../data/UserRepository.php');
    require_once('../../model/User.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $maNv = $_POST['ma_nv'];
    $user = new User($id,$name, $email, $phone, $role, 0, $maNv,"", "");
    $userRepo = new UserRepository();
    echo $userRepo->updateUser($user);
?>