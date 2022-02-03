<?php

include 'connection.php';

$start = 0;
$count = 6;

$sql = "SELECT * FROM product WHERE new = 1 LIMIT $count offset $start";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style copy.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <title>Document</title>

    <style>
        body {
            background-image: linear-gradient(to bottom, #452c7c, #3c3375, #111322);
        }
    </style>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 m-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#About">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#Contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="row pt-5 pb-5">

                <?php
                $n = 1;
                for ($n = 1; $n <= $result->num_rows;) {

                ?>
                    <div class="col-lg-4 pt-5 pb-5">
                        <div class="detail-product">
                            <div class="card" style="width: 20rem;">
                                <img src="<?php echo $row["images"] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row["title_prod"] ?></h5>
                                    <p class="card-text text-center"><?php echo $row["ket_product"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php

                    $row = $result->fetch_assoc();
                    $n = $n + 1;
                };

                ?>

                <div class="back-detail pt-5 text-center">
                    <a href="index.php#Product">
                        <h5>&lt; &lt; &lt; Back </h5>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <a href="#" class="ignielToTop"></a>
</body>

</html>