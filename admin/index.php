<?php
session_start();

if (!isset($_SESSION['arianto'])) {
  header("location: ../index.php");
}
?>

<?php include 'header.php'; ?>

<section class="content-header">
  <h1>
    Dashboard
    <small>Control panel</small>
  </h1>



  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <a href="pendidikan.php">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>1</h3>

              <p>Pelaksanaan Pendidikan</p>
            </div>
            <div class="icon">
              <i class="ion ion-calendar"></i>
            </div>

          </div>
        </div>
      </a>
      <!-- ./col -->
      <a href="penelitian.php">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>2</h3>

              <p>Pelaksanaan Penelitian</p>
            </div>
            <div class="icon">
              <i class="ion ion-laptop"></i>
            </div>
          </div>
        </div>
      </a>
      <!-- ./col -->
      <a href="pengabdian.php">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>3</h3>

              <p>Pelaksanaan Pengabdian</p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
          </div>
        </div>
      </a>
      <!-- ./col -->
      <a href="penunjang.php">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>4</h3>

              <p>Penunjang</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
      </a>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->

    <?php include 'footer.php'; ?>