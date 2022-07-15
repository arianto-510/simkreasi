<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION['arianto'])) {
    header("location: admin/index.php");
}

if (isset($_POST['login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $result = mysqli_query($conn, "SELECT * FROM user");
    $u = mysqli_fetch_assoc($result);
    if ($user == $u['user']) {
        if (password_verify($pass, $u['password'])) {
            $_SESSION['arianto'] = true;
            echo "
            <script>
            alert('Login Berhasil');
            document.location.href = 'admin/index.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('Login Gagal');
        header('login.php');
        </script>
        ";
        }
    }
}





?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100">
        <!--style="background-color: green;"-->
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="login-page.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example17" name="user" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">User</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27" name="pass" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" name="login" type="submit">Login</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum punya akun? <a href="daftar.php" style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">privacy Policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>