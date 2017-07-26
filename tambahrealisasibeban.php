<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			
		 	$nama_pk= $_POST['programkerja'];
			$nama_subpk = $_POST['subprogram'];
			$tahun = $_POST['tahun'];
			$sttwrl = $_POST['sttwrl'];
			$stakhir= $_POST['stakhir'];
			$realisasi= $_POST['realisasi'];

		//cek input double
			

		$insert= mysqli_query($connect,"INSERT INTO tw_rl VALUES ('','$nama_subpk','$tahun','$sttwrl','$stakhir','$realisasi')");
		
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