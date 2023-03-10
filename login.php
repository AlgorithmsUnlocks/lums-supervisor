<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Leading University Management System </title>

    <link rel="stylesheet" href="assets/css/register.css">
    <link href="assets/img/logo-lums.png" rel="icon">

</head>
<body id="register-page">

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container registration-form rounded">
                <div class="row align-items-center">

                    <div class="col-md-12 text-center p-3">
                        <h4>Let's Login</h4>
<!--                        <p>This is only for <span>Leading University </span> Student</p>-->
                    </div>

                    <div class="col-md-6 p-3">

                        <img src="upload/singin-screen.jpg" alt="Leading University Student" class="img-fluid">

                    </div>

                    <div class="col-lg-6 p-3">
                        <?php

                        if(isset($_SESSION['st_id'])){ ?>
                            <h4 class="text-primary text-center">You are Logged In</h4>
                            <p>Home ?? <a href='index.php'>Home </a></p>
                       <?php }else{ ?>
                            <div class="form-info text-center">
                                <?php
                                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                                    echo '<h6 class="text-center status_message">'. $_SESSION['status'].'</h6>';
                                    unset($_SESSION['status']);

                                }else if(isset($_SESSION['login_error']) && $_SESSION['login_error'] !=''){
                                    echo '<h6 class="text-center empty_message">'. $_SESSION['login_error'].'</h6>';
                                    unset($_SESSION['login_error']);

                                }
                                ?>
                            </div>
                            <form action="assets/includes/action.php" method="post" enctype="multipart/form-data">
                                <div class="register-form">

                                    <div class="form-group">
                                        <input type="hidden" class='form-control' name='user_name' placeholder='Student Name' require value="<?php echo $_SESSION['name']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class='form-control' name='st_id' placeholder='Your Id.' require>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class='form-control' name='user_password' placeholder='Password' require>
                                    </div>

                                    <div class="submit-regiter text-center">
                                        <button type='submit' name='login_btn' id='register-btn'>Login</button>
                                    </div>

                                </div>

                            </form>

                            <div class="info text-center">
                                <p>Don't Have A Student Account? <a href='register.php'>Sign Up</a></p>
                                <p>Home ?? <a href='index.php'>Home </a></p>
                            </div>
                        <?php }
                        ?>

                    </div>

                </div>
            </div>
        </div>
    </div>



</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>