<?php
    require_once('../../data/UserRepository.php');
    $id = $_POST['id'];
    $userRepo = new UserRepository();
    $data = $userRepo->getById($id);
    $row = mysqli_fetch_array($data);
    echo json_encode($row);
?>