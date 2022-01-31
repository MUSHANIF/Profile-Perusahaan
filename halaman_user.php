<?php 
session_start();

if ( !isset($_SESSION['login']) ) {
	header("location: login.php");
	exit;
}
else
{
//
 echo "kode ku :" . $_SESSION['login'] ;
 sleep(3);
 header("location:../komentar/index.php");
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title></title>
</head>
<body>
<h1 style="position: absolute; right: 0; left: 0; top: 0; bottom: 0; text-align: center; font-family: arial; font-size: 50px;">Selamat anda telah berhasil bergabung! user</h1>
<a href="logout.php">logout
	<i class="fad fa-sign-out"></i>
</a>
</body>
</html>