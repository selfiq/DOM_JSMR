<?php
include('akses.php'); //untuk memastikan dia sudah login
include ('connect.php'); //connect ke database
  $id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
   <?php include 'templates/head.php' ?>
<!--/head-->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

           <!-- menu profile quick info -->
           <?php include'templates/headmenu.php' ?>
            <!-- /menu profile quick info -->


            <br />

             <!-- sidebar menu -->
            <?php include 'templates/sidebarmenu.php' ?>
            <!-- /sidebar menu -->


            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

          <!-- top navigation -->
        <?php include 'topnavigation.php' ?>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Monitoring Beban</h3>
              </div>


            </div>

            <div class="clearfix"></div>

            <div class="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-table"></i> Table <small>Data Beban</small></h2>

                    <div class="clearfix"></div>
                  </div>

                   <div class="title_right">
                    <div class="col-md-2 col-sm-2 col-xs-12 form-group pull-right top_search" style="margin-top:10px;">
                      <div class="input-group">

                      </div>
                    </div>
                   </div>
                  <div class="x_content">

                      <table id="datatable-fixed-header"  class="table table-striped table-bordered " class="centered">
                            <thead >
                              <tr >

                                <th rowspan="2">Program Kerja</th>
                                <th rowspan="2">Sub Program Kerja</th>
                                <th rowspan="2">Total RKAP</th>
                                <th rowspan="2">Total Status Akhir s.d TW </th>
                                <th rowspan="2">TOTAL Realisasi s.d TW </th>
                                <th rowspan="2">Tahun </th>
                                <th colspan="3">TW </th>

                              </tr>
                              <tr>
                                <th>RKAP</th>
                                <th >Status Akhir</th>
                                <th >Realisasi</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $query = mysqli_query($connect, "SELECT * FROM mbeban ");
                                    while($data = mysqli_fetch_array($query)){ ?>
                              <tr>
                                <td><?php echo $data['programKerja'] ?></td>
                                <td><?php echo $data['subProgram'] ?></td>
                                <td><?php echo $data['totalRKAP'] ?></td>
                                <td><?php echo $data['totalStatus'] ?></td>
                                <td><?php echo $data['totalRealisasi'] ?></td>
                                <td><?php echo $data['tahun'] ?></td>
                                <td><?php echo $data['rkap'] ?></td>
                                <td><?php echo $data['status'] ?></td>
                                <td><?php echo $data['realisasi'] ?></td>

                              </tr>
                              <?php } ?>
                            </tbody>
                          </table>


                  </div>
                </div>
              </div>



              <div class="clearfix"></div>



            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- /page content -->
<style>
.table th {
   vertical-align: middle ; text-align: center ;"
}
</style>
        <!-- footer content -->
        <?php include 'templates/footer.php' ?>
        <!-- /footer content -->
      </div>
    </div>
<!-- scripts -->
<?php include 'templates/scripts.php' ?>
<script>

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });


</script>
<!-- /scripts -->
  </body>
</html>
