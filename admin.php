<?php

// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
    // jika level admin
    if ($_SESSION['level'] == "admin")
   {   
      echo '<script language="javascript">alert("Welcome Back Admin!"); document.location="admin/index.php";</script>';
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
      echo '<script language="javascript">alert("Welcome Back User!"); document.location="home.php";</script>';
   }
}
//tidak ada kondisi yang sama
if (!isset($_SESSION['level']))
{
    header('location:index.php');
}
 ?>