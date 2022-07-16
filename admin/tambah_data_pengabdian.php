<?php include '../koneksi.php';

// tangkap dari form input
if (isset($_POST['tambah'])) {
    $unsur_kegiatan = $_POST['unsur-kegiatan'];
    $jenis_kegiatan = $_POST['jenis-kegiatan'];
    $bukti_penugasan = $_POST['bukti-penugasan'];
    $masa_penugasan = $_POST['masa-penugasan'];
    $bukti_dokumen = $_POST['bukti-dokumen'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($conn, "INSERT INTO pengabdian VALUES(null,'$unsur_kegiatan','$jenis_kegiatan','$bukti_penugasan','$masa_penugasan','$bukti_dokumen','$keterangan')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'pengabdian.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambah');
        document.location.href = 'tambah_data_pengabdian.php';
        </script>
        ";
    }
}

// 



?>




<?php include 'header.php'; ?>
<section class="content-header">
    <h1>
        Pendidikan
        <small>Control panel</small>
    </h1>


    <div class="container-fluid">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tambah Unsur Pelaksanaan Pengabdian</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <form action="" method="post">
                        <table class="table table-bordered tabehover">
                            <tr>
                                <th scope="row">Unsur Kegiatan</th>
                                <td>
                                    <select name="unsur-kegiatan" id="" class="form-control select2 select2-hidden-accessible" id="uns" name="uns" tabindex="-1" aria-hidden="true">
                                        <option value="" selected="">--Pilih Unsur Kegiatan--</option>
                                        <option value="">Menghasilkan karya ilmiah sesuai bidangnya Buku Referensi</option>
                                        <option value="">Menghasilkan karya ilmiah sesuai bisangnya Monograf</option>
                                        <option value=""></option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width:877px;">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kegiatan</th>
                                <td><input type="text" name="jenis-kegiatan" class="form-control" placeholder="Judul Penelitian" required></td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Penugasan</th>
                                <td><input type="text" name="bukti-penugasan" class="form-control" placeholder="Bukti Penugasan" required></td>
                            </tr>
                            <tr>
                                <th scope="row">Masa Penugasan</th>
                                <td>
                                    <input type="text" name="masa-penugasan" class="form-control" placeholder="Masa Penugasan" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Dokumen</th>
                                <td>
                                    <input type="text" name="bukti-dokumen" class="form-control" placeholder="Bukti Dokumen" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Keterangan</th>
                                <td>
                                    <select name="kategori" name="keterangan" class="form-control">
                                        <option value="">--Pilih Keterangan--</option>
                                        <option value="">Selesai/Lanjut</option>
                                        <option value="">Gagal</option>
                                        <option value="">Beban Lebih</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <div class="box-footer">
                    <input type="submit" class="btn btn-success" name="tambah" value="Simpan Data">
                    <a href="penelitian.php" class="btn btn-info pull-right">Kembali</a>
                </div>
</form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>