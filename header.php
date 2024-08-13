<?php 
    session_start();
    require "koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Owl carausel -->
    <link rel="stylesheet" href="assets/js/owl/owl.carousel.css">
    <link rel="stylesheet" href="assets/js/owl/owl.theme.css">
    <!-- Favicon -->
    <link rel="stylesheet" href="font.css">
    <link rel="shortcut icon" href="assets/img/icon/logoheader.png">
    <link href="assets/css/material-design/css/materialdesignicons.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <script src="assets/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="plugins/owlcarousel/owl.carousel.min.js">
    <link rel="stylesheet" href="plugins/owlcarousel/assets/owl.theme.default.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135974525-2"></script>
    <link rel="stylesheet" href="font.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    
    <!-- <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-135974525-2');
    </script> -->

    <style>
        body {
            background-color: rgb(246, 245, 245);
        }

        .navbar {
            padding: 0px;
            margin: 0px;
            box-shadow: 0px 2px 5px grey;
        }

        .navbar-nav li {
            z-index: 1;
        }

        .navbar-nav li a {
            font-size: 17px;
            padding: 15px 30px !important;
        }

        .navbar-nav li a:hover {
            
            transition: 0.5s all;
            font-size: 15px;
            padding: 14px 32.5px !important;
        }

        .navbar-light .navbar-nav .nav-item .nav-link {
            color: black;
            
        }

        .nav-itemtwo {
            color: black;
            border-right: 1px solid #ccc; /* Add a vertical grey line to separate menu items */
        
        }
        
        .navbar-nav .nav-link {
    padding-bottom: 5px; /* Adjust the spacing as needed */
    display: inline-block;
    position: relative;
    color: black !important; /* Set text color */
  }

  .navbar-nav .nav-link::after {
    content: "";
    display: block;
    border-bottom: 2px solid black; /* Black underline */
    transform: scaleX(0);
    transition: transform 0.3s ease-in-out;
  }

  .navbar-nav .nav-link:hover::after {
    transform: scaleX(1);
  }

  .navbar-nav .nav-link.cart-link,
  .navbar-nav .nav-link.login-link {
    color: black !important; /* Set text color for cart and login links */
    border: none !important; /* Remove any border */
  }

  .navbar-nav .nav-link.cart-link:hover::after,
  .navbar-nav .nav-link.login-link:hover::after {
    border-bottom-color: black; /* Set underline color for cart and login links on hover */
  }

  .navbar-btn {
    color: black !important; /* Set text color for buttons */
    background-color: white !important; /* Set background color for buttons */
    box-shadow: 0 2px 4px rgba(0, 5, 0, 0.4); /* Add drop shadow */
  }
  

        @media(max-width:1200px) {
            .navbar-nav li {
                font-size: 15px;
            }
        }

        @media(max-width:992px) {
            .navbar-toggler {
                margin: 10px 0px 10px 30px;
                border-color: #ff4f81;
            }

            .navbar-toggler:hover,
            .navbar-toggler:focus {
                background-color: white;
                border-color: #ff4f81;
            }

            .navbar-light {
                background-color: white;
            }

            .navbar-nav li a {
                text-align: center;
                background-color: white;
            }

            .navbar-nav li a:hover {
                background-color: #0066FF;
            }

        }
    </style>

    <title>A Subajga</title>
</head>

<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white m-0 p-0 pl-5 pr-2 py-2">
    <a class="navbar-brand" href="#">
        <img src="assets/img/icon/logoasubagja.jpg" width="300" height="70" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav fontpp">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <?php if (isset($_SESSION["pelanggan"])){
                    echo "<a class='nav-link' href='orderan.php'>Orderan</a>";
                }
                ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item nav-itemtwo">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item nav-itemtwo">
                <a class="nav-link cart-link" href="cart.php"><i class="mdi mdi-cart-outline text-secondary"
                        style="font-size: 25px;"></i></a>
            </li>
        </ul>
    </div>
    <?php if (isset($_SESSION["pelanggan"])) : ?>
    <button class="btn btn-light navbar-btn m-2 "
        onclick="window.location.href='logout.php'">Logout</button>
    <?php else: ?>
    <button class="btn btn-light navbar-btn m-4 login-link fontpp" onclick="window.location.href='login.php'">Login</button>
    <?php endif ?>
</nav>
    </header>