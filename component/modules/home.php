<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../assest/css/home-admin.css">
    <!-- <link rel="stylesheet" href="./assets/componentstyle.css"> -->
    <link rel="stylesheet" href="../../assest/css/toastr.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.10/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <title>Quản lý đơn hàng</title>
</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <div class="row logo_header" style="height: 50px;">
                <div class="col" style="display: contents;">
                    <img src="../../assest/images/Joker-Wallpaper-4K-8.jpg" alt="" style="width: 50px;border-radius: 26px;" class="d-inline-block align-text-top">
                    <span> <?php session_start();
                            echo $_SESSION["username"]; ?> </span>
                </div>
            </div>
            <div class="row logo_header1" style="height: 50px;">
                <div class="col" style="display: contents;">
                    <img src="../../assest/images/Joker-Wallpaper-4K-8.jpg" alt="" style="width: 50px;border-radius: 26px;" class="d-inline-block align-text-top">
                </div>
            </div>

        </div>
        <ul class="nav-links">
            <li> <a href="home.php?action=''"> <i class="fas fa-chart-line"></i> <span class="link_name">Dashboard</span> </a></li>
            <li> <a href="home.php?action=quanlydonhang"> <i class="fas fa-shipping-fast"></i> <span class="link_name">Quản lý đơn hàng</span></a>
            </li>
            <li> <a href="home.php?action=quanlynhanvien"> <i class="fas fa-users-cog"></i><span class="link_name">Quản lý nhân viên</span> </a> </li>
            <li> <a href="#"> <i class="far fa-cogs"></i> <span class="link_name">Cài đặt</span></a></li>
        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <div class="row header-custom" style="width: 100%;">
                <div class="col" style="display: flex;">
                    <i class='bx bx-menu'></i>
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" id="nameSearch" placeholder="Nhập từ tìm kiếm ..." aria-label="Search">
                        <button class="btn btn-outline-primary" onclick= "managerOrders(1);" type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>


        </div>

        <?php
        include("../main.php");
        ?>
    </section>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: #cfd8dc;">
            © 2021 Copyright:
            <a class="text-dark" href="#">luatnq</a>
        </div>
    </footer>
    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement;
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>
    <script src="../../js/jquery.3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.10/sweetalert2.min.js"></script>
    <script src="../../js/toastr.js"></script>
    <script src="../../js/main.js"></script>

</body>


</html>