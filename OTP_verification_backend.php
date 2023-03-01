<?php

    session_start();
    date_default_timezone_set("Asia/Kolkata");

    if(isset($_POST['submit']))
    {
      
        $system_otp = $_SESSION['user_otp'];
        $user_otp = $_POST['verify-otp'];


            if($system_otp == $user_otp)
            {
                header('location: new_password.php');
            }
            else
            {
                $_SESSION['otp_verify'] = "Invalid OTP";
                header( 'location: OTP_verification.php');
            }
    }


?>