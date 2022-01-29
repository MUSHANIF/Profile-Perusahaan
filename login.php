<?php
session_start();
require 'connection.php';
global $username;


if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE  username = '$username'");
    //cek username

    if (mysqli_num_rows($result) === 1) {

        //cek password

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {

            // set   session

            if ($row['level'] == "admin") {

                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "admin";
                $_SESSION['id'] = $row['id'];
                // alihkan ke halaman dashboard admin

                header("location: notif/index.php");
            } else if ($row['level'] == "user") {
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "user";
                $_SESSION['id'] = $row['id'];
                //header("location:/index.php?id=" . $row['id']);



                header("location: komentar/index.php");
            } else {

                // alihkan ke halaman login kembali
                header("location:login.php");
            }
        } else {
            header:
            ("location: login.php");
        }
        $_SESSION['login'] = true;
    }

    $error = true;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style copy.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <title>PERUSAHAAN</title>

</head>

<body>
    <?php if (isset($error))
        echo "<script>
			alert('Maaf username atau password salah ,Silahkan coba lagi');
		</script>";

    ?>
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
                        <a class="nav-link" href="index.php">Home
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
            <h1 class="text-center">Log In</h1>
        </div>
    </div>

    <section id="form" class="mt-2">
        <div class="container">
            <div class="row justify-content-center pt-2">
                <form action="" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <p>Username</p>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <p>Password</p>
                            <input type="password" class="form-control" name="password" placeholder="Buat Password" required>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-12 mb-4 mt-4 text-center">
                            <button type="submit" name="login" value="Login" class="btn btn-primary align-content-center center-block">Log In</button>
                        </div>
                    </div>
                    <div class="row"><a href="">Forgot password? </a></div>
                    <div class="row">
                        <a href="registrasi.php" class="">Sign Up</a>
                    </div>

                </form>
            </div>
        </div>
    </section>

    <!--Footer -->


    <!--End Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>


</body>

</html>