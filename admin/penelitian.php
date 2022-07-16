<?php
include '../koneksi.php';
?>

<?php include 'header.php'; ?>
<section>
    <section class="content-header">
        <h1>
            Pendidikan
            <small>Control panel</small>
        </h1>
        <div class="container-fluid">
            <div class="row">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Laporan Kinerja Pelaksanaan Penelitian 2021/2022-Genap</h3>
                        <a class="pull-right btn btn-primary" href="tambah_data_penelitian.php">Tambah Data</a>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                
                                    <label>
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
                                        <?php $result = mysqli_query($conn, "SELECT * FROM pendidikan");

                                        $i = 1;
                                        while ($p = mysqli_fetch_row($result)) :

                                        ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $p[1]; ?></td>
                                                <td><?= $p[2]; ?></td>
                                                <td><?= $p[3]; ?></td>
                                                <td>

                                                    <a href="edit_penelitian.php"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></button></a>
                                                    <a href="pendidikan/hapus_pendidikan.php?id=<?= $p[0]; ?>" onclick="return confirm('Yakin mau dihapus');"><button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button></a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="true">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm-7">
                                        <nav aria-label="" class="">
                                            <ul class="pagination pull-right">
                                                <li class="page-item disabled">
                                                    <a href="" class="page-link">Previeus</a>
                                                </li>
                                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


    </section>