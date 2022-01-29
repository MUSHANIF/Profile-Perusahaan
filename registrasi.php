<?php
require 'connection.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo
        "<script>
			alert('user berhasil di tambah!');
			document.location.href = 'login.php';
		</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <title>PERUSAHAAN</title>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar-login navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 m-2">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home
                            <img src="images/box-arrow-in-right.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <div class="container">
        <div class="row mt-5 pt-5 pb-2">
            <h1 class="text-center">Sign Up</h1>
        </div>
    </div>

    <section id="form" class="mt-2">
        <div class="container">
            <div class="row justify-content-center
             pt-2 ">
                <form action="" method="post">
                    <div class="row mb-3">
                        <p>Username</p>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                    </div>
                    <div class="row mb-3">
                        <p>Password</p>
                        <input type="password" class="form-control" name="password" placeholder="Buat Password" required>
                    </div>
                    <div class="row mb-3">
                        <p>Konfirmasi Password</p>
                        <input type="password" class="form-control" name="password2" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="row mb-3">
                        <input type="hidden" class="form-control" id="radio" name="level" value="user" placeholder="" required>
                    </div>
                    <div class="row">
                        <button type="submit" name="register" value="Registrasi" class="btn btn-primary">Sign Up</button>
                    </div>
                    <div class="row">
                        <p>Sudah punya akun? <a href="login.php">Log in</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    <a href="# " class="ignielToTop "></a>

</body>

</html>