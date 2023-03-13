<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "admin/includes/functions.php"; ?>
<?php include "admin/includes/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LUMS - Leading University Management Systems</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-lums.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.php">
                    <img src="assets/img/logo-lums.png"/>
                </a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li class="dropdown"><a href="#"><span>Faculty</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="faculty.php">View All Faculty</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Department</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="department.php">View All Department</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Books List</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="books.php?source=all_books_view">All Books</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Blood Helper</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="blood_helper.php?source=all_blood_helper_view">All Blood Helper</a></li>
                        </ul>
                    </li>


                    <?php

                    if(isset($_SESSION['st_id'])){ ?>
                        <li><a class="getstarted" href="admin/user_profiles.php">Profile</a></li>
                  <?php  }else{ ?>

                        <li><a class="getstarted" href="register.php">Sign Up</a></li>
                        <li><a class="getstarted1" href="login.php">Sign In</a></li>
                    <?php }

                    ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->