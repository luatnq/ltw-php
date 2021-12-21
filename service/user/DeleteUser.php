<?php
    require_once('../../data/UserRepository.php');
    $id = $_POST['id'];
    $userRepo = new UserRepository();
    $data = $userRepo->deleteUser($id);
    echo "Xóa thành công!";
?>