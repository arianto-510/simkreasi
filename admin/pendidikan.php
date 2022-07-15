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
                    <h3 class="box-title">Pendidikan</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="5px">No</th>
                                <th width="60%">Jenis Kegiatan</th>
                                <th width="%">SKS BKD</th>
                                <th width="%">Keterangan</th>
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

                                        <a href="edit_pendidikan.php"><button class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></button></a>
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
    <?php include 'footer.php'; ?>