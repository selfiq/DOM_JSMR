<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			
		 	$nama_pk= $_POST['programkerja'];
			$nama_subpk = $_POST['subprogramkerja'];
		
		//cek inputan double di database

		$cekprogramkerja = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM program_kerja WHERE nama_pk = '$nama_pk'"));
		$idprogramkerja = $cekprogramkerja['id_pk'];
		$ceknama_subprogramkerja = mysqli_query($connect, "SELECT nama_sp FROM sub_program WHERE id_pk = '$idprogramkerja' AND nama_sp ='$nama_subpk'");		

		if(mysqli_num_rows($ceknama_subprogramkerja) > 0){
?>
				<script>window.alert('Nama Sub Program Kerja Sudah Ada Pada Program Kerja') </script>
				<script>document.location.href="monitorBeban.php";</script>
						
<?php }

		//insert semua
		else $insert= mysqli_query($connect,"INSERT INTO sub_program VALUES ('','$idprogramkerja','$nama_subpk','','','')");
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
