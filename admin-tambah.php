<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
        <style>
        @import url(https://fonts.googleapis.com/css?family=Calibri:400,300,700);
        .mt-100 {
            margin-top: 100px
        }

        .product-wrapper,
        .product-img {
            overflow: hidden;
            position: relative
        }

        .mb-45 {
            margin-bottom: 45px
        }

        .product-action {
            bottom: 0px;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            text-align: center;
            transition: all 0.6s ease 0s
        }

        .product-wrapper {
            border-radius: 10px
        }

        .product-img>span {
            background-color: #fff;
            box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
            color: #333;
            display: inline-block;
            font-size: 12px;
            font-weight: 500;
            left: 20px;
            letter-spacing: 1px;
            padding: 3px 12px;
            position: absolute;
            text-align: center;
            text-transform: uppercase;
            top: 20px
        }

        .product-action-style {
            background-color: #fff;
            box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
            display: inline-block;
            padding: 16px 2px 12px
        }

        .product-action-style>a {
            color: #979797;
            line-height: 1;
            padding: 0 21px;
            position: relative
        }

        .product-action-style>a.action-plus {
            font-size: 18px
        }

        .product-wrapper:hover .product-action {
            bottom: 20px;
            opacity: 1
        }

        .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(31, 65, 129);
    background-color: rgb(31, 65, 129);
    overflow-x: hidden;
    transition: 0.5s;
    }

    .overlay-content {
        position: relative;
    width: 650px;
    height: 800px;
    border-radius: 20px;
    padding: 40px;
    box-sizing: border-box;
    background: #ecf0f3;
    left: 10px;
    
    }
    #canpas{
        position: relative;
    width: 650px;
    height: 800px;
    border-radius: 20px;
    padding: 40px;
    box-sizing: border-box;
    background: #ecf0f3;
    left: 70px;
    }

    .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    .overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
    }

    .overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
    }

    @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
    }





    .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
    background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
    background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
    display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }



    </style>

</head>

<body id="page-top">

    <div id="wrapper">

    <!-- Sidebar -->
    <?php include ('./fragment/sidebar.php'); ?>
    <!-- End of Sidebar -->

    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
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
            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah Produk</a>
                    </div>    
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    
                                    <a href="#">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Produk A</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Edit</div>
                                    </div>
                                    </a>
                                    <!-- <a href="whatsapp://send?abid=phonenumber&text=Hello%2C%20World!">Send Message</a>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Hubungi Penjual</div>
                                        </div>
                                    </a> -->
                                    <div class="col-auto">
                                        <img src="{{ asset('/img/donat-gula.jpg') }}" width="200" height="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-success shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                
                              <div class="col mr-2">
                                  
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Produk B</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Edit</div>
                                    </div>
                                    
                                <div class="col-auto">
                                        <img src="{{ asset('/img/kue-bolu-manis.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-info shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Produk C</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Edit</div>
                                </div>
                                <div class="col-auto">
                                        <img src="{{ asset('/img/kue-sus.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-warning shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Produk D</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Edit</div>
                                </div>
                                <div class="col-auto">
                                        <img src="{{ asset('/img/onde-onde.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
       
    </div>
</div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>