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
	<title></title>
</head>
<body>
<h1 style="position: absolute; right: 0; left: 0; top: 0; bottom: 0; text-align: center; font-family: arial; font-size: 50px;">Selamat anda telah berhasil bergabung! user</h1>
<a href="logout.php">logout</a>
</body>
</html>