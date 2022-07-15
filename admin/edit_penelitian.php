<?php
include '../koneksi.php';
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
                    <h3 class="box-title">Penilaian Unsur Pelaksanaan Pendidikans</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tabehover">
                            <tr>
                                <th width='15%'>Nama Dosen</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th width='15%'>Unsur Kegiatan</th>
                                <td>
                                    <select name="kategori" class="form-control">
                                        <option value="">--Pilih Unsur Kegiatan--</option>
                                        <option value="">Membuat rancangan dan karya teknologi yang dipatenkan atau seni yang terdaftar di HKI(beum diterapkan atau sudah diterapkan tetapi bukan pada BUMN)</option>
                                        <option value="">Menghasikan karya ilmiah sesuai bidangnya buku Referensi</option>
                                        <option value="">Menghasilkan karya ilmiah sesuai bidangnya Monograf</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Jenis Kegiatan</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Bukti Penugasan</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Masa Penugasan</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Bukti Dokumen</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Penulis Ke</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Jumlah Penulis</th>
                                <td>
                                    <input type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th width='15%'>Keterangan</th>
                                <td>
                                    <select name="kategori" class="form-control">
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
                    <input type="submit" class="btn btn-warning" value="Perbaharui Data">
                    <a href="penelitian.php" class="btn btn-info pull-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>