<?php

$conn = mysqli_connect("vps2.tacpos.com", "pkl46", "12345", "pkl46");

function registrasi($data)
{
    global $conn;


    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $level = mysqli_real_escape_string($conn, $data['level']);

    //username sudah ada apa belum
    $result = mysqli_query($conn, "SELECT  username FROM  user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>  
			alert ('username sudah terdaftarkan!')
		</script>";
         
    
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
				alert('konfirmasi password tidak sesuai!');
			</script>";
        return false;
    }

    //enkripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru di database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password','$level')");
    return mysqli_affected_rows($conn);
}
?>