<?php include '../koneksi.php' ?>

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
                        <table class="table table-bordered tabehover">
                            <tr>
                                <th scope="row">Unsur Kegiatan</th>
                                <td>
                                    <select name="" id="" class="form-control select2 select2-hidden-accessible" id="uns" name="uns" tabindex="-1" aria-hidden="true">
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
                                <td><input type="text" class="form-control" placeholder="Judul Penelitian" required></td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Penugasan</th>
                                <td><input type="text" class="form-control" placeholder="Bukti Penugasan" required></td>
                            </tr>
                            <tr>
                                <th scope="row">Masa Penugasan</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Masa Penugasan" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Bukti Dokumen</th>
                                <td>
                                    <input type="text" class="form-control" placeholder="Bukti Dokumen" required>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Keterangan</th>
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
                    <input type="submit" class="btn btn-success" value="Simpan Data">
                    <a href="penelitian.php" class="btn btn-info pull-right">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>