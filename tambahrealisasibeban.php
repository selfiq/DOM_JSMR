<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			$idcabang = $_POST['idcabang'];
		 	$id_pk= $_POST['programkerja'];
			$id_subpk = $_POST['subprogram'];
			$jenis = $_POST['jenis'];
			$tahun = $_POST['tahun'];
			$sttwrl = $_POST['sttwrl'];
			$stakhir= $_POST['stakhir'];
			$realisasi= $_POST['realisasi'];
		//cek input double
		$cek_rencana = mysqli_query($connect,"SELECT * beban_rencana WHERE id_sp='$id_subpk' AND tahun='$tahun' AND jenis 
			= '$jenis'");
		$datarencana = mysqli_fetch_array($cek_rencana,MYSQLI_NUM);

		if($datarencana[0] > 0){

		$cek_realisasi = mysqli_query($connect, "SELECT * FROM beban_realisasi WHERE id_sp = '$id_subpk' AND tahun ='$tahun' AND jenis ='$jenis'");
		$datarealisasi = mysqli_fetch_array($cek_realisasi,MYSQLI_NUM);

		if($datarealisasi[0] > 0){ 
?>
			<script> window.alert('Data Telah Tersedia') </script>
			<script>document.location.href="javascript:history.back()";</script>
			
<?php 		 		
			
 		
		}
		else {
			$insertrealisasi= mysqli_query($connect,"INSERT INTO beban_realisasi VALUES ('','$id_subpk','$tahun','$sttwrl','$stakhir','$realisasi','$jenis')");
		
			if($insertrealisasi){
?>		 		<script> window.alert('Data berhasil Ditambah') </script>
				<script>document.location.href="javascript:history.back()";</script>
<?php		
			}
			else{ 
?>
			<script> window.alert('Data Gagal Ditambahkan') </script>
			<script>document.location.href="javascript:history.back()";</script> 
<?php 		}
		}
		}}
?>