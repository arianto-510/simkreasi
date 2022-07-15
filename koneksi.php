<?php

$conn = mysqli_connect("localhost", "root", "", "simkermas");

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal " . mysqli_connect_error();
}
?>

