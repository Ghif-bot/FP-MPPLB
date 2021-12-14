<!DOCTYPE html>
<html lang="en">

<!-- <?include './fragments/header.php' ?> -->
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

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif; background: linear-gradient(90deg, #F6E5A0 70%, #FED99B 100%);">

    <div class="container">
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan=gagal']){
                echo "<div class='alert alert-danger' role='alert' align='center'>Silahkan cek password dan email anda</div>";
            }elseif($_GET['pesan=berhasil']){
                echo "<div class='alert alert-success role='alert' align='center'>Berhasil registrasi, silahkan anda login</div>";
            }
        }
        ?>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="img/hantaran.jpg" width="500" height="520">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/logo.jpg" width="100" height="100">
                                        <br><br>
                                    </div>
                                    <form class="user" method="post" action="./php/check_login.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                name="email" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="#">Hubungi Kami</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

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