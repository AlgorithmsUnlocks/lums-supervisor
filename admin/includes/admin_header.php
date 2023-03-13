<?php include("includes/database.php"); ?>
<?php include("includes/functions.php"); ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php
if(!(isset($_SESSION['st_id']))){
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> LUMS - SUPERVISOR </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/lums.png" />

    <!-- Custom Css Link -->
    <link rel="stylesheet" href="css/custom_css/custom.css">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">

        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="index.php"><img src="images/lums.png" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/lums.png" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="typcn typcn-th-menu"></span>
                </button>
            </div>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">

                        <img src="../upload/<?php echo $_SESSION['profile']; ?>" alt="profile"/>
                        <span class="nav-profile-name">
                            <?php
                            echo strtoupper($_SESSION['name']);
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="user_profiles.php">
                            <i class="typcn typcn-cog-outline text-primary"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="../assets/includes/logout.php">
                            <i class="typcn typcn-eject text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="../index.php">
                        <h6 class="date mb-0">Front Page</h6>
                    </a>
                </li>
                <li class="nav-item nav-date dropdown">
                    <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
                        <h6 class="date mb-0">
                            <?php
                            $current_date = "Today : ".date('l, d F, y');
                            date_default_timezone_set('Asia/Dhaka');
                            $curretn_time = date('h:i:sa');

                            echo $current_date." ".$curretn_time;


                            ?>
                        </h6>
                        <i class="typcn typcn-calendar"></i>
                    </a>
                </li>

            </ul>

            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="typcn typcn-th-menu"></span>
            </button>

        </div>
    </nav>


    <div class="container-fluid page-body-wrapper">