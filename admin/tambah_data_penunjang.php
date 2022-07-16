
<?php include '../koneksi.php';

// tangkap dari form input
if (isset($_POST['tambah'])) {
    $unsur_kegiatan = $_POST['unsur-kegiatan'];
    $jenis_kegiatan = $_POST['jenis-kegiatan'];
    $bukti_penugasan = $_POST['bukti-penugasan'];
    $masa_penugasan = $_POST['masa-penugasan'];
    $bukti_dokumen = $_POST['bukti-dokumen'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($conn, "INSERT INTO penunjang VALUES(null,'$unsur_kegiatan','$jenis_kegiatan','$bukti_penugasan','$masa_penugasan','$bukti_dokumen','$keterangan')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'penunjang.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambah');
        document.location.href = 'tambah_data_penunjang.php';
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
                                    <select name="" id="" class="form-control select2 select2-hidden-accessible" id="uns" name="unsur-kegiatan" tabindex="-1" aria-hidden="true">
                                        <option >-- Pilih Unsur Kegiatan --</option>
                                        <option >Menjadi anggota organisasi profesi tingkat Nasional</option>
                                        <option >Menjadi pengurus organisasi profesi tingkat Nasional</option>
                                        <option >Menjadi panitia tingkat Universitas sebagai Ketua</option>
                                        <option >Menjadi panitia tingkat Universitas sebagai Wakil Ketua</option>
                                        <option >Menjadi panitia tingkat Universitas sebagai Sekretaris</option>
                                        <option >Menjadi panitia tingkat Universitas sebagai anggota</option>
                                        <option >Menjadi panitia tingkat Fakultas sebagai Ketua</option>
                                        <option >Menjadi panitia tingkat Fakultas sebagai Wakil Ketua</option>
                                        <option >Menjadi panitia tingkat Fakultas sebagai Sekretaris</option>
                                        <option >Menjadi panitia tingkat Fakultas sebagai anggota</option>
                                        <option >Menjadi anggota panitia/badan pada lembaga pemerintah Panitia Pusat sebagai Ketua/Wakil Ketua</option>
                                        <option >Menjadi anggota panitia/badan pada lembaga pemerintah Panitia Pusat sebagai Anggota</option>
                                        <option >Menjadi anggota panitia/badan pada lembaga pemerintah Panitia Daerah sebagai Ketua/Wakil Ketua</option>
                                        <option >Menjadi anggota panitia/badan pada lembaga pemerintah Panitia Daerah sebagai Anggota</option>
                                        <option >Berperan serta aktif dalam pertemuan ilmiah tingkat Internasional/ Nasional/ Regional sebagai Ketua</option>
                                        <option >Berperan serta aktif dalam pertemuan ilmiah tingkat Internasional/ Nasional/ Regional sebagai Anggota/ Peserta</option>
                                        <option >Berperan serta aktif dalam pertemuan ilmiah di lingkungan Perguruan Tinggi sebagai Ketua</option>
                                        <option >Berperan serta aktif dalam pertemuan ilmiah di lingkungan Perguruan Tinggi sebagai Anggota/ Peserta</option>
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
                                    <select name="keterangan" class="form-control">
                                        <option value="">--Pilih Keterangan--</option>
                                        <option value="">Selesai/Lanjut</option>
                                        <option value="">Gagal</option>
                                        <option value="">Beban Lebih</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
                <div class="box-footer">
                    
                    <input type="submit" name="tambah" class="btn btn-success" value="Simpan Data">
                    <a href="penunjang" class="btn btn-info pull-right">Kembali</a>
</form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>