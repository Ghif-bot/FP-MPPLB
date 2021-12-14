<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Ninestars Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="./admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="./Ninestars/assets/img/favicon.png" rel="icon">
  <link href="./Ninestars/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./Ninestars/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./Ninestars/assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.comNinestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="home.php"><span>Hantarin</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
     
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
   
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="#portfolio">Home</a></li>
          <li><a class="nav-link scrollto" href="#">Profil</a></li>
          <li><a class="nav-link scrollto" href="./php/check_logout.php">Log Out</a></li>
          <li><a class="getstarted scrollto" href="/daftar">Daftar Pesanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php 
      session_start();
        if(isset($_GET['pesan'])){
            if($_GET['pesan=berhasil']){
                echo "<div class='alert alert-success role='alert' align='center'>Berhasil Login</div>";
            }
        }
        ?>
  <main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="detail.php.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="Ninestars/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="Ninestars/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="detail.php" title="More Details"><i class="bi bi-link"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

   
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./Ninestars/assets/vendor/aos/aos.js"></script>
  <script src="./Ninestars/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./Ninestars/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./Ninestars/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./Ninestars/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./Ninestars/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./Ninestars/assets/js/main.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="./admin/vendor/jquery/jquery.min.js"></script>
  <script src="./admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="./admin/js/sb-admin-2.min.js"></script>

</body>

</html>