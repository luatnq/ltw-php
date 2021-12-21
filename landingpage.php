<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assest/css/landingpage_style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Quản lý đơn hàng</title>
</head>

<body>

    <section class="main">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold fst-italic" href="#">STACK UNDER FLOW</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link act fw-bold text-white" aria-current="page" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white" href="#services">Dịch vụ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white" href="#category">Mặt hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold text-white" href="#contact">Liên hệ</a>
                            </li>
                        </ul>
                        <a class="btn btn-secondary rounded-pill fw-bold" href="./component/modules/login.php">Đăng nhập</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-10 m-auto text-center mt-5">
                    <h1 class="fw-bold display-3 mt-5 fst-italic ">
                        <span class="theme-corlor">Welcome to</span>
                        <br />
                        <span class="theme-corlor">Stack Upder Flow</span>
                    </h1>
                    <hr class="mx-auto w-50 mt-3 text-white">
                    <p class="fs-5 text-white">Linh kiện laptop && computer </p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Dịch vụ</h2>
                <h3 class="section-subheading text-muted mt-3">Uy tín - Chất lượng - Nhanh chóng</h3>
            </div>

            <div class="row text-center mt-5">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Tư vấn</h4>
                    <p class="text-muted">Luôn lắng nghe và sẵn sàng hỗ trợ, tư vấn bất kể lúc nào khách hàng cần.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shipping-fast fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Giao hàng</h4>
                    <p class="text-muted">Giao hàng nhanh chóng, tiết kiệm bất kể nơi đâu</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-tools fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Sửa chữa, bảo hành tại nhà</h4>
                    <p class="text-muted">Đội ngũ nhân viên luôn sẵn sàng hỗ trọ sửa chữa, bảo hành tại gia cho các
                        khách hàng.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="category">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Mặt hàng</h2>
                <h3 class="section-subheading text-muted">Đa dạng - Chất lượng - giá thành tốt</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a>
                            <img class="img-fluid" src="./assest/images/laptop.jpg" alt="..." />
                        </a>
                        <div>
                            <div class="text-center mt-5">Laptop</div>
                            <p class="text-muted text-center">Cung cấp những mẫu laptop cấu hình cao, thiết kế thời
                                thượng, giá cả phải chăng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a>
                            <img class="img-fluid" src="./assest/images/pc.jpg" alt="..." />
                        </a>
                        <div class=>
                            <div class="text-center mt-5">PC</div>
                            <p class="text-muted text-center">Cung cấp những bộ PC nhiều loại cấu hình trong các phân
                                khúc khác nhau. Giá cả, chất lượng tốt nhất thị trường.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a>
                            <img class="img-fluid" src="./assest/images/linhkien5.jpg" alt="..." />
                        </a>
                        <div>
                            <div class=" text-center mt-4">Linh kiện PC</div>
                            <p class="text-muted text-center">Cung cấp những linh kiện tốt nhất thị trường,luôn đảm bảo
                                uy tín, chất lượng cao.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase text-white">Liên hệ</h2>
                <h3 class="section-subheading text-muted text-white">Liên hệ với chúng tôi để được tư vấn kịp thời.</h3>
            </div>

            <form id="contactForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Tên của bạn..*" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Email của bạn.." />
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Số điện thoại của bạn.." />

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Ý kiến của bạn... *"></textarea>
                        </div>
                    </div>
                </div>

                <div class="text-center"><button class="btn btn-secondary rounded-pill fw-bold" id="submitButton"
                        type="submit">Gửi thông tin</button></div>
            </form>
            <div class="row g-3 my-2 container-fluid px-4">

                <div id="map" style="width:200px;height:100px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1395.3501677839274!2d105.78937655481295!3d20.98711376571821!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1636756076987!5m2!1svi!2s"
                        width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div>
                    <span class="text-white">Hotline: 0967272621</span>
                </div>
                    <span class="text-white">Email: luatnq@gmail.com</span>
                </div>
            </div>

        </div>

    </section>
    <footer class="footer py-3">
        <div class="container">
            <div class="text-center"><span>Copyright &copy; lnq 2021 - Ptit</span></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>