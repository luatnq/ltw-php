<?php
    // session_start();
    // if($_SESSION["userId"] > 0) header("Location: ./home.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title>Login</title>
</head>

<body>
  <section class=" gradient-custom bg-light">
    <div class="container py-4 h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <form action="../../service/AccountService.php" method="POST">
                  <h2 class="fw-bold mb-2 text-uppercase">Đăng nhập</h2>
                  <p class="text-white-50 mb-5">Vui lòng nhập tài khoản, mật khẩu.</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="typeUsername" class="form-control form-control-lg" placeholder="Tài khoản" name="username"/>
                    <label class="form-label" for="typeUsername"></label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Mật khẩu" name="password"/>
                    <label class="form-label" for="typePasswordX"></label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Quên mật khẩu?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Đăng nhập</button>

                </form>
              </div>

              <div>
                <p class="mb-0">Nếu bạn chưa có tài khoản? <a href="#!" class="text-white-50 fw-bold">Đăng ký</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>