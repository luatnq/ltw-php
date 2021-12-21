<?php
require_once("../../data/dbconn.php");
$mysqli = new mysqli(DbConfig::$host, DbConfig::$username, DbConfig::$passwork, DbConfig::$db);

$sql_lietkedonhang = "SELECT * FROM tbl_donhang LEFT JOIN tbl_user on tbl_donhang.user_id = tbl_user.id ORDER BY created_date DESC";
$sql_lietkedoanhthu = "SELECT tbl_donhang.price FROM tbl_donhang WHERE tbl_donhang.status = 3 ";

$sql_countOrder = "SELECT * FROM tbl_donhang LEFT JOIN tbl_user on tbl_donhang.user_id = tbl_user.id WHERE tbl_donhang.status = '";
$sql_orderBy = "' ORDER BY created_date DESC";
?>
<div class="container-fluid px-4 overflow-hidden">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="m-3 p-3  d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white dashboard-type" style="padding: 10px !important;border-radius: 15px !important;">
                <div class="row">
                    <div class="col-12">
                        <p class="fs-6">Đơn chờ phê duyệt </p>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;">
                        <?php
                        $sql_countOrderPending = $sql_countOrder . 0 . $sql_orderBy;
                        $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                        $data = mysqli_num_rows($query_countPending);
                        ?>
                        <h1 style="padding-top: 10px;"><?php echo $data; ?></h1>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;"> <i class="fas fa-gift fs-1 text-white p-3"></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 ">

            <div class="m-3 p-3  d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white dashboard-type" style="background-color: #ffa000 !important;padding: 10px !important;border-radius: 15px !important;">
                <div class="row">
                    <div class="col-12">
                        <p class="fs-6">Đơn hàng đã thành công</p>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;">
                        <?php
                        $sql_countOrderPending = $sql_countOrder . 3 . $sql_orderBy;
                        $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                        $data = mysqli_num_rows($query_countPending);
                        ?>
                        <h1 style="padding-top: 10px;"><?php echo $data; ?></h1>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;"> <i class="fas fa-hand-holding-usd fs-1 text-white p-3"></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 ">

            <div class="m-3 p-3  d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white dashboard-type" style="background-color: #4caf50 !important;padding: 10px !important;border-radius: 15px !important;">
                <div class="row">
                    <div class="col-12">
                        <p class="fs-6">Đơn đang vận chuyển</p>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;">
                        <?php
                        $sql_countOrderPending = $sql_countOrder . 1 . $sql_orderBy;
                        $query_countPending = mysqli_query($mysqli, $sql_countOrderPending);
                        $data = mysqli_num_rows($query_countPending);
                        ?>
                        <h1 style="padding-top: 10px;"><?php echo $data; ?></h1>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;"> <i class="far fa-shipping-timed fs-1 text-white p-3"></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-3 ">

            <div class="m-3 p-3  d-flex justify-content-around align-items-center rounded bg-silver shadow-custom text-white dashboard-type" style="background-color: #dd2c00 !important;padding: 10px !important;border-radius: 15px !important;">
                <div class="row">
                    <div class="col-12">
                        <p class="fs-6  ">Doanh thu</p>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;">
                        <?php
                        $query_lietkedoanhthu = mysqli_query($mysqli, $sql_lietkedoanhthu);
                        $sum = 0;
                        while ($row = mysqli_fetch_array($query_lietkedoanhthu)) {
                            $sum += $row['price'];
                        }
                        ?>
                        <h1 class="text-center" style="padding-top: 10px;"><?php echo number_format($sum) ?></h1>
                    </div>
                    <div class="col-6" style="text-align: center;align-self: center;"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-5 justify-content-center ">
        <canvas id="myChart" style="width:100%;max-width:800px;"></canvas>
    </div>
</div>