<?php include "admin/includes/database.php"; ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail($student_email,$verification_code){


    require('PHPMailer/PHPMailer.php');
    require('PHPMailer/SMTP.php');
    require('PHPMailer/Exception.php');

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cse_1912020146@lus.ac.bd';
        $mail->Password   = 'ruman#lu#146##';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('cse_1912020146@gmail.com', 'Email Verifications');
        $mail->addAddress($student_email);


        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Email Verification from Leading University Management System';
        $mail->Body    = "Thanks for registration, click the link below for verify email address
        <a href='http://localhost/university-management-system/verify_email.php?email=$student_email&verification_code=$verification_code'> Verify Now</a>";

        $mail->send();

        return true;

    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;
    }


}



if(isset($_POST['register_student'])){

    $student_name =  $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_phone = $_POST['student_phone'];
    $student_id = $_POST['student_id'];
    $student_department = $_POST['student_department'];
    $student_dob = $_POST['student_dob'];
    $student_password = $_POST['student_password'];
    $student_cfpassword = $_POST['student_cfpassword'];

    $student_avater = $_FILES['student_avater']['name'];
    $student_avater_loc = $_FILES['student_avater']['tmp_name'];


    $phone_rgex = "/(\+88)?-?01[3-9]\d{8}/";
    $email_regx = "/([a-z\d][a-z\d_\-.]+[a-z\d]){1,10}@lus.ac.bd/";

    $duplicate_student_id = mysqli_query($connection,"SELECT `st_id` FROM `student_panel` WHERE `st_id` ='$student_id'");
    $duplicate_student_email = mysqli_query($connection,"SELECT `email` FROM `student_panel` WHERE `email` = '$student_email'");
    $duplicate_student_phone = mysqli_query($connection,"SELECT `phone` FROM `student_panel` WHERE `phone` = '$student_phone'");


    $verification_code = bin2hex(random_bytes(16));




    if(!empty($student_name) && !empty($student_email) && !empty($student_phone) && !empty($student_id) && !empty($student_department) && !empty($student_dob) && !empty($student_password) && !empty($student_cfpassword) && !empty($student_avater)){

        if(!preg_match($phone_rgex,$student_phone)){

            $_SESSION['empty'] = "Phone number is not accepted";
//            header('Location: student_register_form.php');

        }else if(mysqli_num_rows($duplicate_student_id)){
            $_SESSION['empty'] = "Student id is already used";
//            header('Location: student_register_form.php');

        }else if(mysqli_num_rows($duplicate_student_email)){
            $_SESSION['empty'] = "Student email is already used";
//            header('Location: student_register_form.php');

        }else if(mysqli_num_rows($duplicate_student_phone)){
            $_SESSION['empty'] = "Student phone number is already used";
//            header('Location: student_register_form.php');

        }else if($student_password !== $student_cfpassword){
            $_SESSION['empty'] = "Password and Confirm password is not match";
//            header('Location: student_register_form.php');

        }else if(!preg_match($email_regx,$student_email)){

            $_SESSION['empty'] = "Email is not valid";
//            header('Location: student_register_form.php');

        }
        else{



            $query = "INSERT INTO `student_panel`(`name`, `email`, `phone`, `st_id`, `department`, `dob`, `password`, `profile`, `verification_code`, `is_verify`) VALUES ('$student_name','$student_email','$student_phone','$student_id','$student_department','$student_dob','$student_password','$student_avater','$verification_code','0')";

            $query_run = mysqli_query($connection,$query);

            if($query_run && send_mail($_POST['student_email'],$verification_code)){

                move_uploaded_file($student_avater_loc,"upload/$student_avater");

                $_SESSION['status'] = "Congratulations, Your registration is processing,Please verify your email in inbox";
//                header('Location: student_login.php');
            }else{
                echo "<script>alert('Student Registration is failed');</script>";
//                header('Location: student_register_form.php');
            }
        }



    }else{

        $_SESSION['empty'] = "OOPS, You have enter wrong details";
        header('Location: register.php');
    }

}


?>

