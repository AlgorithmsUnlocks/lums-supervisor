<?php ob_start(); ?>
<?php include "admin/includes/database.php"; ?>
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
<body id="register-page" onload="myFunction()">

<div id="site-loader">

</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container registration-form rounded">
                <div class="row align-items-start">

                    <div class="col-md-12 text-center p-3">
                        <h4>Let's Create Student Account</h4>
<!--                        <p>This is only for <span>Leading University </span> Student</p>-->
                    </div>

                    <div class="col-md-6 align-items-center p-3">
                        <div class="register-right-content">

                            <img src="upload/sign-up-screen.jpg" alt="" class="img-fluid rounded">
                            <div class="info p-3">

                                <p class="text-center">Already Have A Student Account? <a href='login.php'>Sign In</a></p>
                                <?php
                                session_start();
                                if(isset($_SESSION["status"]) && $_SESSION["status"] !=''){
                                    echo "<h6 class='text-center empty_message'>". $_SESSION["status"]."</h6>";
                                    unset($_SESSION["status"]);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="register-left-content">
                            <div class="form-info text-center">


                            </div>
                            <form action="login_action.php" method="post" enctype="multipart/form-data">
                                <div class="register-form">
                                    <div class="form-group">
                                        <input type="text" class='form-control' name='student_name' placeholder='Student Name' require>

                                    </div>
                                    <div class="form-group">

                                        <input type="email" class='form-control' name='student_email' placeholder='Email Address' require>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class='form-control' name='student_phone' placeholder='Phone Number' require>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class='form-control' name='student_id' placeholder='Stuent Id.' require>
                                    </div>

                                    <div class="form-group">
                                        <select name="student_department" class='form-control'>
                                             <option value="">Select Department</option>
                                            <?php
                                            $query = "SELECT * FROM department";
                                            $query_run = mysqli_query($connection,$query);
                                            while($row = mysqli_fetch_assoc($query_run)){
                                                $department_id = $row['department_id'];
                                                $department_name = $row['department_name']; ?>
                                                <option value="<?php echo $department_id ?>"><?php echo $department_name ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class='form-control' name='student_dob'  placeholder='Date of Birth' require>
                                    </div>
                                    <div class="form-group">
                                        <select name="user_blood_group" class='form-control'>
                                            <option value="">Select blood group</option>
                                            <option value="">A+</option>
                                            <option value="">A-</option>
                                            <option value="">B+</option>
                                            <option value="">B-</option>
                                            <option value="">O+</option>
                                            <option value="">O-</option>
                                            <option value="">AB+</option>
                                            <option value="">AB-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class='form-control' name='student_password' placeholder='Password' require>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class='form-control' name='student_cfpassword'  placeholder='Confirm Password' require>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class='form-control' name='student_avater' id="formFile" require>
                                        <small class="text-danger">Upload your profile photo!</small>
                                    </div>
                                    <div class="submit-regiter text-center">
                                        <button type='submit' name='register_student' id='register-btn'>Create Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

</div>

<script>

    var preloader = document.getElementById("site-loader");
    function myFunction(){
        preloader.style.display = "none";
    }

</script>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>