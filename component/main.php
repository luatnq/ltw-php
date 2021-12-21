<div class="clear">
</div>
<div class="main">
    <?php
            if(isset($_GET['action'])){
                $tam = $_GET['action'];
            }else{
                $tam = '';
            }
            if($tam=='quanlydonhang'){
                include("modules/lietke.php");
            }else if($tam =='quanlynhanvien'){
                include("modules/UserManager.php");
            }else{
                include("modules/dashboard.php");
            }
    ?>
</div>