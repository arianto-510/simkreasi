<?php
require 'koneksi.php';

if (isset($_POST['daftar'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $user = htmlspecialchars($_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    if (empty($nama) || empty($user) || empty($pass)) {
        echo "
        <script>
        alert('Isian Tidak Boleh Kosong');
        document.location.href = 'daftar.php';
        </script>
        ";
    }

    $result  = mysqli_query($conn, "SELECT * FROM user");
    $u = mysqli_fetch_assoc($result);

    if ($u['user'] == $user) {
        echo "
        <script>
        alert('Username Sudah Tersedia');
        document.location.href = 'daftar.php';
        </script>
        ";
    }

    if (strlen($pass) <= 6) {
        echo "
        <script>
        alert('Password Kurang dari 8 Kararkter');
        document.location.href = 'daftar.php';
        </script>
        ";
    }
    $password = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES(null, '$nama', '$user', '$password')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('User Berhasil Dibuat');
        document.location.href = 'index.php';
        </script>
        ";
    }
}


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form action="" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" class="form-control" name="nama" />
                                        <label class="form-label" for="form3Example1">Full Name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="form-control" name="user" />
                                <label class="form-label" for="form3Example3">Username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="pass" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Checkbox -->
                            <!-- <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                <label class="form-check-label" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div> -->

                            <!-- Submit button -->
                            <button type="submit" name="daftar" class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>