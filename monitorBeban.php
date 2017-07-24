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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
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
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-program">Tambah Program</button>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-subprogram">Tambah Subprogram</button>
				  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-rkap">Tambah RKAP</button>
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
		
		<div class="x_content">
			<!-- Modal Tambah Program -->
			<div class="modal fade bs-program" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					  <h4 class="modal-title" id="myModalLabel">Tambah Program</h4>
					</div>
					<div class="modal-body">
					  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ma">Nomor MA</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="ma" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="programKerja">Program Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="programKerja" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
					  </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					  <button type="button" class="btn btn-primary">Simpan</button>
					</div>
				  </div>
				</div>
			</div>
			<!-- Modal Tambah Subprogram -->
			<div class="modal fade bs-subprogram" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					  <h4 class="modal-title" id="myModalLabel">Tambah Subprogram</h4>
					</div>
					<div class="modal-body">
					  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="programKerja">Program Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="select2_single form-control" tabindex="-1">
								<option></option>
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="subProgram">Subrogram Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="subProgram" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
					  </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					  <button type="button" class="btn btn-primary">Simpan</button>
					</div>
				  </div>
				</div>
			</div>
			<!-- Modal Tambah RKAP -->
			<div class="modal fade bs-rkap" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
					  </button>
					  <h4 class="modal-title" id="myModalLabel">Tambah RKAP</h4>
					</div>
					<div class="modal-body">
					  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="programKerja">Program Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="select2_single form-control" tabindex="-1">
								<option></option>
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="subProgram">Subprogram Kerja</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="select2_single form-control" tabindex="-1">
								<option></option>
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_tw">Triwulan</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div class="radio">
								<label>
								  <input type="radio" value="1" name="status_tw"> TW 1
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" value="2" name="status_tw"> TW 2
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" value="3" name="status_tw"> TW 3
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" value="4" name="status_tw"> TW 4
								</label>
							  </div>
							</div>
						  </div>
					      <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahun">Tahun</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="select2_single form-control" tabindex="-1">
								<option value="2015">2015</option>
								<option value="2015">2015</option>
								<option value="2015">2015</option>
								<option value="2015">2015</option>
							  </select>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rkap">RKAP</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="number" min="0" id="rkap" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status_akhir">Status Akhir</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="number" min="0" id="status_akhir" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="realisasi">Realisasi</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="number" min="0" id="realisasi" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  
					  </form>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					  <button type="button" class="btn btn-primary">Simpan</button>
					</div>
				  </div>
				</div>
			</div>
		</div>

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