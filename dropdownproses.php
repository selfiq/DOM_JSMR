<?php 
include 'connect.php';

		if(isset($_POST['dropdownTW'])){
			$triwulan = $_POST['dropDownListTW'];
		 
            if($triwulan > 0 ){
?>

                <script>document.location.href="laporan_bpt.php?triwulan=<?php echo $triwulan?>";</script>
<?php       }
            else 
?>               
                <script>document.location.href="laporan_bpt.php";</script>
<?php        }

if(isset($_POST['dropdownTWBPLL'])){
			$triwulan = $_POST['dropDownListTW'];
		 
            if($triwulan > 0 ){
 ?>

                <script>document.location.href="laporan_bpll.php?triwulan=<?php echo $triwulan?>";</script>
<?php       }
            else 
?>               
                <script>document.location.href="laporan_bpll.php";</script>
<?php        }


if(isset($_POST['dropdownTWSPOJT'])){
            $triwulan = $_POST['dropDownListTW'];
         
            if($triwulan > 0 ){
 ?>

                <script>document.location.href="laporan_spojt.php?triwulan=<?php echo $triwulan?>";</script>
<?php       }
            else 
?>               
                <script>document.location.href="laporan_spojt.php";</script>
<?php        }

if(isset($_POST['dropdownTWSPJT'])){
            $triwulan = $_POST['dropDownListTW'];
         
            if($triwulan > 0 ){
 ?>

                <script>document.location.href="laporan_spjt.php?triwulan=<?php echo $triwulan?>";</script>
<?php       }
            else 
?>               
                <script>document.location.href="laporan_spjt.php";</script>
<?php        }




?>