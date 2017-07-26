<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			
		 	$nama_pk= $_POST['programkerja'];
			$nama_subpk = $_POST['subprogram'];
			$tahun = $_POST['tahun'];
			$rkap1= $_POST['rkap1'];
			$rkap2= $_POST['rkap2'];
			$rkap3= $_POST['rkap3'];
			$rkap4= $_POST['rkap4'];

		//cek input double
			

		$insert= mysqli_query($connect,"INSERT INTO tw_rc VALUES ('','$nama_subpk','$tahun','1','$rkap1'), 
		('','$nama_subpk','$tahun','2','$rkap2'),('','$nama_subpk','$tahun','3','$rkap3'),
		('','$nama_subpk','$tahun','4','$rkap4');");
		
		if($insert){
?>		 		<script> window.alert('Data berhasil Ditambah') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
		}else{ ?>
			<script> window.alert('Data Gagal Ditambahkan') </script>
			<script>document.location.href="monitorBeban.php";</script>
<?php 		 }
		}
?>