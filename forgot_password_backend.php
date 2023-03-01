<?php
    session_start();
       
    include 'connection.php';
    
        if(isset($_POST['user-otp']))
        {

            $user_id = $_SESSION['new_user'] = $_POST['user-id'];

            $query = "select * from common_info where userid='$user_id'";

            $fetch_email = mysqli_query($con,$query);
            
            $return_rows = mysqli_num_rows($fetch_email);

            if($return_rows)
            {
                $user_data = mysqli_fetch_assoc($fetch_email);

                $f_name = $user_data['first_name'];
                $l_name = $user_data['last_name'];
                $user_email = $user_data['email'];

                $_SESSION['user_otp'] = otp_generator();
        
                $subject = "Password Reset";
                $body = "Hi, $f_name $l_name. Please use the following security code for the 
                        E college info account $user_id, security code:" .$_SESSION['user_otp']." is valid for five minutes";
        
                $sender_email = "send: ecollegeinfo.manage@gmail.com";
        
                if(mail($user_email, $subject, $body, $sender_email))
                {
                    $_SESSION['otp_verify'] = "Check your registered ".$user_email." email account";
                    header('location: OTP_verification.php');
                }
            }
            else
            {
                $_SESSION['otp_msg'] = "Invalid Userid";
                header('location: forgot_password.php');
            }
        }
        function otp_generator()
        {
            $x = rand(100000,999999);
            return($x);  
        }
    ?>
            
