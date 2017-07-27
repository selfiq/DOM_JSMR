<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			$idcabang = $_POST['idcabang'];
		 	$id_pk= $_POST['programkerja'];
			$id_subpk = $_POST['subprogram'];
			$tahun = $_POST['tahun'];
			$rkap1= $_POST['rkap1'];
			$rkap2= $_POST['rkap2'];
			$rkap3= $_POST['rkap3'];
			$rkap4= $_POST['rkap4'];
			
		
		//cek input double
		$cek_rencana = mysqli_query($connect, "SELECT * FROM tw_rc WHERE id_sp = '$id_subpk' AND tahun ='$tahun'");
		$data = mysqli_fetch_array($cek_rencana,MYSQLI_NUM);
		if($data[0] > 0){
			
		$update1 = mysqli_query($connect,"UPDATE tw_rc SET rkap ='$rkap1' WHERE stat_twrc = '1' AND tahun ='$tahun' AND id_sp='$id_subpk'");
		$update2 = mysqli_query($connect,"UPDATE tw_rc SET rkap ='$rkap2' WHERE stat_twrc = '2' AND tahun ='$tahun' AND id_sp='$id_subpk'");
		$update3 = mysqli_query($connect,"UPDATE tw_rc SET rkap ='$rkap3' WHERE stat_twrc = '3' AND tahun ='$tahun' AND id_sp='$id_subpk'");
		$update4 = mysqli_query($connect,"UPDATE tw_rc SET rkap ='$rkap4' WHERE stat_twrc = '4' AND tahun ='$tahun' AND id_sp='$id_subpk'");
		
			if($update1 && $update2 && $update3 && $update4){					
?>		 		
				<script> window.alert('Data berhasil Diperbaharui') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
			}else{ 
?>
				<script> window.alert('Data Gagal Diperbaharui') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php 		 }
				
			
		}else{
		
			//insert data 
			$insert= mysqli_query($connect,"INSERT INTO tw_rc VALUES ('','$id_subpk','$tahun','1','$rkap1'), 
			('','$id_subpk','$tahun','2','$rkap2'),('','$id_subpk','$tahun','3','$rkap3'),
			('','$id_subpk','$tahun','4','$rkap4');");
			
			if($insert){
?>		 		
				<script> window.alert('Data berhasil Ditambah') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
			}else{ 
?>
				<script> window.alert('Data Gagal Ditambahkan') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php 		 
			}
		}
		}
?>