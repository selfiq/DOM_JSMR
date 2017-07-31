<?php
include 'connect.php';
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['id_role'])){
  $idrole = $_SESSION['id_role'];
  $queryuser = "SELECT * FROM user_role WHERE id_role = '$idrole'";
  $hasiluser = mysqli_query($connect,$queryuser);
	$datauser = mysqli_fetch_array($hasiluser);

  // pengecekan jika level admin
  if ($datauser['role'] == "admin"){
    echo '<script language="javascript">alert("Welcome Back Admin!"); document.location="index.php";</script>';
  }
  // jika kondisi level user maka akan diarahkan ke halaman lain
  else if ($datauser['role'] == "user")
  {
    echo '<script language="javascript">alert("Welcome Back User!"); document.location="home.php";</script>';
  }
}

//jika tidak ada kondisi yang sama
elseif (!isset($datauser['role'])){
  header('location:index.php');
}
?>
