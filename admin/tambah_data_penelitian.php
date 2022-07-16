<?php include '../koneksi.php';

// tangkap dari form input
if (isset($_POST['tambah'])) {
    $unsur_kegiatan = $_POST['unsur_kegiatan'];
    $judul_penelitian = $_POST['judul-penelitian'];
    $bukti_penugasan = $_POST['bukti-penugasan'];
    $masa_penugasan = $_POST['masa-penugasan'];
    $bukti_dokumen = $_POST['bukti-dokumen'];
    $penulis_ke = $_POST['penulis-ke'];
    $jumlah_penulis = $_POST['jumlah-penulis'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($conn, "INSERT INTO penelitian VALUES(null,'$unsur_kegiatan','$judul_penelitian','$bukti_penugasan','$masa_penugasan','$bukti_dokumen','$penulis_ke','$jumlah_penulis','$keterangan')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'penelitian.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Ditambah');
        document.location.href = 'tambah_data_penelitian.php';
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
                    <h3 class="box-title">Tambah Unsur Pelaksanaan Penelitian</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <form action="" method="post">
                            <table class="table table-bordered tabehover">
                                <tr>
                                    <th scope="row">Unsur Kegiatan</th>
                                    <td>
                                        <select class="form-control select2 select2-hidden-accessible" id="uns" name="uns" required="" tabindex="-1" aria-hidden="true"> 
                                            
                          <option value="" selected="">-- Pilih Unsur Kegiatan --</option><option value="">Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HKI (belum diterapkan atau sudah diterapkan tetapi bukan pada BUMN)</option><option value="">Menghasilkan karya ilmiah sesuai bidangnya Buku Referensi</option><option value="">Menghasilkan karya ilmiah sesuai bidangnya Monograf</option><option value="">Artikel pada jurnal Internasional bereputasi</option><option value="">Artikel pada jurnal Internasional terindeks basis data internasional</option><option value="">Artikel pada jurnal Nasional Terakreditasi</option><option value="">Artikel pada jurnal Nasional</option><option value="">Hasil penelitian atau pemikiran dalam buku yang dipublikasikan Internasional dan berisi berbagai tulisan dari berbagai penulis (book chapter)</option><option value="">Hasil penelitian atau pemikiran dalam buku yang dipublikasikan Nasional dan berisi berbagai tulisan dari berbagai penulis (book chapter)</option></select>
                                        <span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width:877px;">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Judul Penelitian</th>
                                    <td><input type="text" class="form-control" name="judul-penelitian" placeholder="Judul Penelitian" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">Bukti Penugasan</th>
                                    <td><input type="text" class="form-control" name="bukti-penugasan" placeholder="Bukti Penugasan" required></td>
                                </tr>
                                <tr>
                                    <th scope="row">Masa Penugasan</th>
                                    <td>
                                        <input type="text" class="form-control" name="masa-penugasan" placeholder="Masa Penugasan" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Bukti Dokumen</th>
                                    <td>
                                        <input type="text" class="form-control" name="bukti-dokumen" placeholder="Bukti Dokumen" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Penulis Ke</th>
                                    <td>
                                        <input type="text" class="form-control" name="penulis-ke" placeholder="Penuis Ke" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Penulis</th>
                                    <td>
                                        <input type="text" class="form-control" name="jumlah-penulis" placeholder="Jumlah Penuis" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>
                                        <select name="kategori" class="form-control" name="keterangan">
                                            <option value="">--Pilih Keterangan--</option>
                                            <option value="">Selesai/Lanjut</option>
                                            <option value="">Gagal</option>
                                            <option value="">Beban Lebih</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <div class="box-footer">
                                <!-- <input type="submit" class="btn btn-success" value="Perbaharui Data"> -->
                                <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
                                <a href="penelitian.php" class="btn btn-info pull-right">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>