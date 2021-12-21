<?php 
    require_once("../data/AccountRepository.php");
    $accountRepo = new AccountRepository();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if($username == "" || $password == ""){
        header("Location: ../component/modules/login.php?error=Địa chỉ email hoặc mật khẩu là bắt buộc. ");
        exit();
    }
    $result = $accountRepo->login($username, $password);
    if(mysqli_num_rows($result) == 0 ){
        header("Location: ../component/modules/login.php?error=Sai địa chỉ email hoặc mật khẩu.");
        exit();
    }
    else{
        $data = mysqli_fetch_array($result);
        session_start();
        $_SESSION["userId"] = $data['id'];
        $_SESSION["username"] = $data['username'];
        header("Location: ../component/modules/home.php");
    }
?>