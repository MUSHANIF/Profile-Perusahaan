<?php
//session_start();

//if (!isset($_SESSION['login'])) {
//header("location: login.php");
//exit;
//}

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
                        <a class="nav-link active" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Log in
                            <img src="images/box-arrow-in-right.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <!-- Home Page -->
    <section id="Home">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 p-5">
                    <h2>Tacpos</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem delectus, minima at rerum omnis saepe ex quos nemo, tempore temporibus molestiae ipsam incidunt, consequuntur culpa obcaecati commodi accusamus expedita neque.
                    </p>
                </div>
                <div class="col-md-6 p-5 text-center w-50">
                    <img src="images/in-sync-animate.svg" alt="" />
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,224L24,224C48,224,96,224,144,192C192,160,240,96,288,85.3C336,75,384,117,432,144C480,171,528,181,576,176C624,171,672,149,720,128C768,107,816,85,864,96C912,107,960,149,1008,186.7C1056,224,1104,256,1152,261.3C1200,267,1248,245,1296,224C1344,203,1392,181,1416,170.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </section>
    <!--End Home-->


    <!-- Service Page -->
    <section id="Service">
        <div class="container">
            <div class="row">
                <div class="col-12  pt-5 m-5">
                    <h2><b>WHAT ARE WE GOING TO DO?</b></h2>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                    </svg>
                    <h5 class="service-title">Development</h5>
                    <p class="service-subtitle">Desktop and Mobile Application Development. Our Team will help you to create it</p>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                    </svg>
                    <h5 class="service-title">Web Design</h5>
                    <p class="service-subtitle">Our Team have many experience to Create and Design Web for Private Company and Organisation.</p>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-6 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                    </svg>
                    <h5 class="service-title">IOT</h5>
                    <p class="service-subtitle"> Create Connection between your Home, Office or Others Location to your Mobile Device. or Computers.</p>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
                    </svg>
                    <h5 class="service-title">Maintenance</h5>
                    <p class="service-subtitle">Maintain Your Office Computers and Server to get the Best Perfomance</p>
                </div>
            </div>
    </section>
    <!--End Service-->

    <!-- About Us Page -->
    <section id="About">
        <div class="container">
            <div class="row">
                <div class="col-12  pt-5">
                    <h2 class="about-title"><b>ABOUT US</b></h2>
                    <p class="about-subtitle">The Indonesian Application Team Builder.<br> Growing from the bad economic session of the Indonesian at 1997</p>
                </div>
            </div>
        </div>
    </section>
    <!--End About Us-->

    <!-- Product Page -->
    <section id="Product">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5">
                    <h2><b>OUR PRODUCTS</b></h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card">
                        <img src="images/product1.jpg" class="card-img-top" alt="Picture" title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF)" loading="lazy">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4 ">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card ">
                        <img src="images/product2.jpg " class="card-img-top " alt="Picture " title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF) " loading="lazy ">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 pt-4 ">
                    <h5 class="product-title">JUDUL </h5>
                    <div class="card">
                        <img src="images/product3.jpg " class="card-img-top " alt="Picture " title="Remove Pattern Lock Screen & Bypass FRP Vivo Y91 (PD1818CF) " loading="lazy ">
                        <figcaption class="figure-caption ">Remove Pattern Lock Screen Vivo Y91 (PD1818CF)</figcaption>
                    </div>
                </div>
                <div class="pt-5 ">
                    <a href="detail-product.html ">
                        <h5>See More &gt; &gt; &gt; </h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Product-->

    <!-- Contact Page -->
    <section id="Contact">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1>Contact-Form<h1>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-md-6 mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.271194710484!2d106.96072911431035!3d-6.227931762725831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c63d6198ac5%3A0x4813b5d3e70f4590!2sdr.Dwiana%20Dewi%20Heryati!5e0!3m2!1sid!2sid!4v1642895462901!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> 
        <div class="col-md-6">       
          <div name="Contact-Form">
            <div class="row">
            <div class="col-md-6 mb-3">              
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="nama" required />      
            </div>
            <div class="col-md-6 mb-3">            
              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required />            
            </div>
          </div>
            <div class="col-md-12 mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3" name="pesan" required></textarea>
            </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-kirim">Submit</button>   
          </div>    
          </form>
        </div> 
      </div>
      <div class="row mt-5 mb-3">         
          <div class="col" data-aos="zoom-in" data-aos-offset="300" data-aos-delay="300">
            <div id="share-container">
              <div id="share" loading="lazy">
                <a class="blogger" href="https://adriandroidz.blogspot.com" rel="nofollow noopener" target="_blank" title="Blogger">
                <svg viewBox="0 0 24 24">
                <path 
                  d="M15.5 14.625c0 .484-.387.875-.864.875h-5.273c-.477 0-.863-.392-.863-.875s.387-.875.863-.875h5.272c.478 0 .865.391.865.875zm-6.191-4.375h2.466c.448 0 .809-.392.809-.875s-.361-.875-.81-.875h-2.465c-.447 0-.809.392-.809.875s.362.875.809.875zm14.691 1.75c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-1.039c0-.383-.311-.692-.691-.692h-1.138c-.583 0-.69-.446-.69-.996-.001-2.36-1.91-4.273-4.265-4.273h-2.952c-2.355 0-4.264 1.913-4.264 4.272v5.455c0 2.36 1.909 4.273 4.264 4.273h5.474c2.353 0 4.262-1.913 4.262-4.272v-3.767z" 
                  fill="#ff5722">
                </path>
                </svg>
                </a>
                
                <a class="facebook" href="https://www.facebook.com/adriandroids" rel="nofollow noopener" target="_blank" title="Facebook">
                <svg viewBox="0 0 24 24">
                <path 
                  d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z" 
                  fill="#3a579a">
                </svg>
                </a>           
                <a class="whatsapp" href="https://wa.wizard.id/6e16c9" rel="nofollow noopener" target="_blank" title="WhatsApp">
                <svg viewBox="0 0 24 24">
                <path 
                  d="M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" 
                  fill="#25d366">
                </path>
                </svg>
                </a>  
                
                <a class="youtube" href="https://www.youtube.com/adriandroid" rel="nofollow noopener" target="_blank" title="YouTube">
                <svg viewBox="0 0 24 24">
                <path 
                  d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z" 
                  fill=#cb2027>
                </path>
                </svg>
                </a>
              </div>
            </div>
          </div>
        </div> 
        
    </section>
    <!--End Contact-->



    <!-- Footer -->
    <section id="Footer">
        <svg xmlns="http://www.w3.org/2000/svg " viewBox="0 0 1440 320 ">
            <path fill="white " fill-opacity="1 " d="M0,96L48,133.3C96,171,192,245,288,240C384,235,480,149,576,144C672,139,768,213,864,240C960,267,1056,245,1152,224C1248,203,1344,181,1392,170.7L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z "></path>
        </svg>
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 footer-box ">
                    <img src="images/logo.png " class="footer-img mb-4 " />
                    <p>
                        <a href="#Home ">Home</a>
                    </p>
                    <p>
                        <a href="#Service ">Serivice</a>
                    </p>
                    <p>
                        <a href="#About ">About Us</a>
                    </p>
                    <p>
                        <a href="#Product ">Product</a>
                    </p>
                    <p>
                        <a href="#Contact ">Contact</a>
                    </p>
                </div>
                <div class="col-md-4 footer-box pl-4 ">
                    <h4 class="h4 mb-4 ">CONTACT US</h4>
                    <p><img src="images/icon-footer1.png " class="icon-footer "> Jakarta, Indonesia</p>
                    <p><img src="images/icon-footer2.png " class="icon-footer "></i> 0822 5888 1204</p>
                    <p><img src="images/icon-footer3.png " class="icon-footer "></i> angel@pramadio.com</p>
                </div>
                <div class="col-md-4 footer-box ">
                    <h5>COMPLAIN</h5>
                    <input type="email " class="form-control " placeholder="Your Email " />
                    <input type="number " class="form-control " placeholder="Your Number " />
                    <input type="text " class="form-control " placeholder="Your Problem " />
                    <button type="submit " class="btn btn-primary ">Send</button>
                </div>
            </div>
        </div>

        <footer class="text-center pb-5 ">
            <p>Copyright &copy; 2022</p>
        </footer>
    </section>
    <!--End Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
    <a href="# " class="ignielToTop "></a>

</body>

</html>