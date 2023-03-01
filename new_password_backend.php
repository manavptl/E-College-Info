<?php
    session_start();
    include 'connection.php';

    if(isset($_POST['save']))
    {
        $new_pass = $_POST['new_password'];
        $conform_pass = $_POST['conform_password'];

        $id = $_SESSION['new_user']; 

        if($new_pass === $conform_pass)
        {      
            $en_pass = password_hash("$conform_pass",PASSWORD_BCRYPT); 

            $querypass = "UPDATE common_info SET PASSWORD = '$en_pass' WHERE USERID = '$id' ";
            $res = mysqli_query($con, $querypass);
            header('location: Index.php');
            unset($_SESSION['new_user']);
        }
        else
        {
            $_SESSION['password_msg'] = "Password does't match.";
            header('location: new_password.php');
        }  
    }
?>