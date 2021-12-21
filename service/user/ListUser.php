<?php
    require_once('../../data/UserRepository.php');
    require_once('../../model/ResponseSearch.php');
    // $query = json_decode($_POST['query']);
    // $name = $query->name;
    // $phone = $query->phone;
    // $email = $query->email;
    // $limit = 10;
    // $page = 1;
    // if ($_POST["page"] > 1) {
    //     $start = (($_POST["page"] - 1) * $limit);

    //     $page = $_POST["page"];
    // } else {
    //     $start = 0;
    // }
    //get data
    $userRepo = new UserRepository();
    $data = $userRepo->getUsers();
    $rows = array();
    while ($row = mysqli_fetch_array($data->result)) {
        $rows[] = array(
            'id'    =>    $row["id"],
            'username'  =>    $row['username'],
            'email' =>    $row['email'],
            'phone' =>    $row['phone'],
            'fullName'  =>    $row['ho_ten'],
            'role' => $row['role'],
            'ma_nv' => $row['ma_nv'],
        );
    }
    //divide data
    $output = array(
        'data'                =>    $rows,
        // 'pagination'        =>    $pagination_html,
        // 'total_data'        =>    $total_data
    );
    echo json_encode($output);

?>