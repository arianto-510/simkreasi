<?php
include '../koneksi.php';
?>

<?php include 'header.php'; ?>
<section>
    <section class="content-header">
        <h1>
    Dashboard
    <small>Control panel</small>
  </h1>
        <div class="container-fluid" style="padding-top: 15px;">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Laporan Kinerja Pelaksanaan Pengabdian 2021/2022-Genap</h3>
                        <a class="pull-right btn btn-primary" href="tambah_data_pengabdian.php">Tambah Data</a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="example1_length">
                                    <label style="font-weight: normal; text-align:left; white-space:nowrap">
                                        Show
                                        <select name="example1-length" aria-controls="example" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="example1_filter" class="dataTables_filter pull-right">
                                    <label for="">Search:<input type="search" class="form-control input-sm" aria-controls="example1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">


                            <div class="box-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="15%">No</th>
                                            <th width="25%">Jenis Kegiatan</th>
                                            <th width="15%">SKS BKD</th>
                                            <th width="25%">Keterangan</th>
                                            <th width="%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $result = mysqli_query($conn, "SELECT * FROM pengabdian");

                                        $i = 1;
                                        while ($p = mysqli_fetch_row($result)) :

                                        ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $p[1]; ?></td>
                                                <td><?= $p[2]; ?></td>
                                                <td><?= $p[3]; ?></td>
                                                <td>

                                                    <a href="edit_pengabdian.php"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></button></a>
                                                    <a href="pendidikan/hapus_pendidikan.php?id=<?= $p[0]; ?>" onclick="return confirm('Yakin mau dihapus');"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button></a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


    </section>
    <?php include 'footer.php'; ?>