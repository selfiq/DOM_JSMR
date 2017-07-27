<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			$idcabang = $_POST['idcabang'];
		 	$id_pk= $_POST['programkerja'];
			$id_subpk = $_POST['subprogram'];
			$tahun = $_POST['tahun'];
			$sttwrl = $_POST['sttwrl'];
			$stakhir= $_POST['stakhir'];
			$realisasi= $_POST['realisasi'];
		//cek input double
		$cek_realisasi = mysqli_query($connect, "SELECT * FROM tw_real WHERE id_sp = '$id_subpk' AND tahun ='$tahun'");
		$data = mysqli_fetch_array($cek_realisasi,MYSQLI_NUM);
		if($data[0] > 0){
			
		$updatestatusakhir = mysqli_query($connect,"UPDATE tw_real SET stat_akhirrl ='$stakhir' WHERE stat_twrl = 'sttwrl' AND tahun ='$tahun' AND id_sp='$id_subpk'");
		$updaterealisasi = mysqli_query($connect,"UPDATE tw_real SET realisasi_rl ='$realisasi' WHERE stat_twrl = 'sttwrl' AND tahun ='$tahun' AND id_sp='$id_subpk'");

		
			if($updatestatusakhir && $updaterealisasi){					
?>		 		
				<script> window.alert('Data berhasil Diperbaharui') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
			}else{ 
?>
				<script> window.alert('Data Gagal Diperbaharui') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php 		}
		}
		else {
			$insertrealisasi= mysqli_query($connect,"INSERT INTO tw_real VALUES ('','$id_subpk','$tahun','$sttwrl','$stakhir','$realisasi')");
		
			if($insertrealisasi){
?>		 		<script> window.alert('Data berhasil Ditambah') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
			}
			else{ 
?>
			<script> window.alert('Data Gagal Ditambahkan') </script>
			<script>document.location.href="monitorBeban.php";</script> 
<?php 		}
		}
		}
?>