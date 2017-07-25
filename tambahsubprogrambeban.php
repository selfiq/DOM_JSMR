<?php
	include 'connect.php';

		if(isset($_POST['tambah'])){
			
		 	$nama_pk= $_POST['programkerja'];
			$nama_subpk = $_POST['subprogramkerja'];
		
		//cek inputan double di database

		$cekprogramkerja = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM program_kerja WHERE nama_pk = '$nama_pk'"));
		$idprogramkerja = $cekprogramkerja['id_pk'];
		$ceknama_subprogramkerja = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM sub_program WHERE id_pk = '$idprogramkerja' AND nama_sp ='$nama_subpk'"));		
		$cek = $ceknama_subprogramkerja['id_pk'];
		$cek2 = $ceknama_subprogramkerja['nama_sp'];
			if($cek2==$nama_subpk){
				if($cek==$idprogramkerja){
?>
				<script>window.alert('Nama Sub Program Kerja Sudah Ada Pada Program Kerja') </script>
				<script>document.location.href="monitorBeban.php";</script>
<?php		
				}
				else{
				$insert= mysqli_query($connect,"INSERT INTO sub_program VALUES ('','$nama_subpk','','','', '$idprogramkerja')");
				}
				
					if($insert){
?>		 				<script> window.alert('Data berhasil Ditambah') </script>
						<script>document.location.href="monitorBeban.php";</script>
<?php		
					}else{ ?>
						<script> window.alert('Data Gagal Ditambahkan') </script>
						<script>document.location.href="monitorBeban.php";</script>
<?php 		 		}
			}
			else{
				$insert= mysqli_query($connect,"INSERT INTO sub_program VALUES ('','$nama_subpk','','','', '$idprogramkerja')");
			}
				if($insert){
?>		 				<script> window.alert('Data berhasil Ditambah') </script>
						<script>document.location.href="monitorBeban.php";</script>
<?php		
				}else{ ?>
						<script> window.alert('Data Gagal Ditambahkan') </script>
						<script>document.location.href="monitorBeban.php";</script>
<?php 		 	}		
		
		}
?>
