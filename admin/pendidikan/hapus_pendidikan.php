<?php
include '../../koneksi.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM pendidikan WHERE id = $id");

if (mysqli_affected_rows($conn) > 0) {
    echo "
    <script>
    alert('Hapus Berhasil');
    document.location.href = '../pendidikan.php';
    </script>
    ";
}
