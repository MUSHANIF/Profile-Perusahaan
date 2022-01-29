<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
// $CobaID = $_SESSION['id']; //$_GET['id'] ;

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <link href="https://cdn.jhttp://localhost/profile-peruhasaan/komentar/index.phpsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../style copy.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />

    <title>ADMIN PAGE</title>

</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 m-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Complain">Complain</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log Out
                            <img src="../images/box-arrow-in-right.svg" alt="">
                        </a>

                        <?php
                        if (!isset($_SESSION['id'])) {
                            header("location:../login.php");
                            exit;
                        } ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Complain Page -->
    <section id="Complain">
        <div class="container">
            <div class="row mt-5 mb-2 p-5">
                <div class="col-12">
                    <H1 class="complain-title">Complain</H1>
                </div>
                <div>
                    <span id="message"></span>

                    <div id="display_comment"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Complain  -->
    <!-- Footer -->

    <!--End Footer-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <a href="# " class="ignielToTop "></a>

    <script>
        $(document).ready(function() {
            //Mengirimkan Token Keamanan
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')

                }
            });

            $('#form_komen').on('submit', function(event) {
                event.preventDefault();
                let user_id = $('#user_id').val();
                let nama_pengirim = $('#nama_pengirim').val();
                let komen = $('#komen').val();

                if (nama_pengirim == '') {
                    alert("Nama Pengirim Harus disii");
                } else if (komen == '') {
                    alert("Komentar Harus disii");
                } else {
                    var form_data = $(this).serialize();
                    $.ajax({
                        url: "tambah_komentar.php",
                        method: "POST",
                        data: form_data,
                        success: function(data) {
                            Swal.fire(
                                'Sukses!',
                                'Komentar anda berhasil ditambahkan!',
                                'success'
                            );
                            $('#form_komen')[0].reset();
                            $('#komentar_id').val('0');
                            load_comment();
                        },
                        error: function(data) {
                            console.log(data.responseText)
                        }
                    })
                }
            });

            load_comment();

            function load_comment() {
                $.ajax({
                    url: "ambil_komentar.php",
                    method: "POST",
                    success: function(data) {
                        $('#display_comment').html(data);
                    },
                    error: function(data) {
                        console.log(data.responseText)
                    }
                })
            }

            $(document).on('click', '.reply', function() {
                var komentar_id = $(this).attr("id");
                $('#komentar_id').val(komentar_id);
                $('#nama_pengirim').focus();
            });
        });
    </script>

</body>

</html>