<?php
session_start();
if(isset($_SESSION["status"]) && $_SESSION["status"] !=''){
    echo "<h6 class='text-center empty_message'>". $_SESSION["status"]."</h6>";
    unset($_SESSION["status"]);
}else{
    header("Location: register.php");
}
?>
<?php include "admin/includes/database.php"; ?>
<?php
//
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\SMTP;
//use PHPMailer\PHPMailer\Exception;
//
//function send_mail($student_email,$verification_code){
//
//
//    require('PHPMailer/PHPMailer.php');
//    require('PHPMailer/SMTP.php');
//    require('PHPMailer/Exception.php');
//
//    $mail = new PHPMailer(true);
//
//    try {
//        //Server settings
//        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//        $mail->isSMTP();
//        $mail->Host       = 'smtp.gmail.com';
//        $mail->SMTPAuth   = true;
//        $mail->Username   = 'cse_1912020146@lus.ac.bd';
//        $mail->Password   = 'ruman#lu#146##';
//        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//        $mail->Port       = 465;
//
//        //Recipients
//        $mail->setFrom('cse_1912020146@gmail.com', 'Email Verifications');
//        $mail->addAddress($student_email);
//
//
//        //Content
//        $mail->isHTML(true);
//        $mail->Subject = 'Email Verification from Leading University Management System';
//        $mail->Body    = "Thanks for registration, click the link below for verify email address
//        <a href='http://localhost/university-management-system/verify_email.php?email=$student_email&verification_code=$verification_code'> Verify Now</a>";
//
//        $mail->send();
//
//        return true;
//
//    } catch (Exception $e) {
//        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//        return false;
//    }
//
//
//}

if(isset($_POST['register_student'])){

    $student_name =  trim(mysqli_real_escape_string($_POST['student_name']));
    $student_email = trim(mysqli_real_escape_string($_POST['student_email']));
    $student_phone = trim(mysqli_real_escape_string($_POST['student_phone']));
    $student_id = trim(mysqli_real_escape_string($_POST['student_id']));
    $student_department = $_POST['student_department'];
    $student_dob = -$_POST['student_dob'];
    $user_blood_group = $_POST['user_blood_group'];
    $student_password = trim(mysqli_real_escape_string($_POST['student_password']));
    $student_cfpassword = trim(mysqli_real_escape_string($_POST['student_cfpassword']));

    $student_avater = $_FILES['student_avater']['name'];
    $student_avater_loc = $_FILES['student_avater']['tmp_name'];


    $phone_rgex = "/(\+88)?-?01[3-9]\d{8}/";
    $email_regx = "/([a-z\d][a-z\d_\-.]+[a-z\d]){1,10}@lus.ac.bd/";

    $duplicate_student_id = mysqli_query($connection,"SELECT `st_id` FROM `student_panel` WHERE `st_id` ='$student_id'");
    $duplicate_student_email = mysqli_query($connection,"SELECT `email` FROM `student_panel` WHERE `email` = '$student_email'");
    $duplicate_student_phone = mysqli_query($connection,"SELECT `phone` FROM `student_panel` WHERE `phone` = '$student_phone'");


    $verification_code = bin2hex(random_bytes(16));


    if(!empty($student_name) && !empty($student_email) && !empty($student_phone) && !empty($student_id) && !empty($student_department) && !empty($student_dob) && !empty($student_password) && !empty($student_cfpassword) && !empty($student_avater) && !empty($user_blood_group)){

        if(!preg_match($phone_rgex,$student_phone)){

            $_SESSION["status"] = "Phone number is not accepted <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }else if(mysqli_num_rows($duplicate_student_id)){
            $_SESSION["status"] = "Student id is already used <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }else if(mysqli_num_rows($duplicate_student_email)){
            $_SESSION["status"] = "Student email is already used <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }else if(mysqli_num_rows($duplicate_student_phone)){
            $_SESSION["status"] = "Student phone number is already used <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }else if($student_password !== $student_cfpassword){
            $_SESSION["status"] = "Password and Confirm password is not match <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }else if(!preg_match($email_regx,$student_email)){

            $_SESSION["status"] = "Email is not valid <a href='register.php'>Register Again</a>";
            header('Location: login_action.php');

        }
        else{

            $query = "INSERT INTO `users`(`name`, `email`, `phone`, `st_id`, `department`, `dob`,`blood_group`, `password`, `profile`, `verification_code`, `is_verify`) VALUES ('$student_name','$student_email','$student_phone','$student_id','$student_department','$student_dob','$user_blood_group',''$student_password','$student_avater','$verification_code','0')";

            $query_run = mysqli_query($connection,$query);

            if($query_run){

                move_uploaded_file($student_avater_loc,"upload/$student_avater");

                $_SESSION["status"] = "Congratulations, Your registration is processing,Please verify your email in inbox <a href='login.php'>Login Now</a>";
                header('Location: login_action.php');
            }else{
                echo "<script>alert('Student Registration is failed');</script>";
                header('Location: login_action.php');
            }
        }



    }else{

        $_SESSION["status"] = "For registration you must need to fill up all the fields. <a href='register.php'>Register Again</a>";
        header('Location: login_action.php');

    }

}


?>

<?php

// Student Login Actions

if(isset($_POST['login_student'])){

    $student_id = $_POST['student_id'];
    $student_password = $_POST['student_password'];

    $query = mysqli_query($connection,"SELECT * FROM `student_panel` WHERE `st_id` = '$student_id' AND `password` = '$student_password'");

    if(!empty($student_id) && !empty($student_password)){

        if(mysqli_num_rows($query) > 0){

            $fetch = mysqli_fetch_assoc($query);

            if($fetch['is_verify']== 1){
                $_SESSION['st_id'] = $student_id;
                $_SESSION['password'] = $student_password;

                $_SESSION['login_success'] = "Congratulation, You have successfully logged in";
                header('Location: student/index.php');
            }else{
                $_SESSION['login_error'] = "Email is not Verify,Please Verify to login";
                header('Location: login.php');
            }

        }else{
            $_SESSION['login_error'] = "Student id and password is not match our server";
            header('Location: login.php');
        }

    }else{
        $_SESSION['login_error'] = "Opps, something is wrong";
        header('Location: login.php');
    }

}

?>




<style>
    .empty_message {
        padding: 30px;
        color: black;
        font-size: 25px;
        font-weight: bolder;
        text-align: center;
        background: #f6fbf9c2;
        border-radius: 49.0901px;
        margin: 5rem auto;
        font-family: sans-serif;
    }
</style>