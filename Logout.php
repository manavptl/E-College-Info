<?php

    session_start(); //to ensure you are using same session

    include "connection.php";

    $logout_D_T = date('Y/m/d H:i:s');
    $login =  $_SESSION['login_D_T'];
    $userid = $_SESSION['user_email'];

    $login = "insert into login_info(login_time,logout_time,login_id)values('$login','$logout_D_T','$userid')";
    $result = mysqli_query($con , $login);

    session_destroy(); //destroy the session
    header("location:Index.php"); //to redirect back to "Login.php" after logging out
    mysqli_close($con);
?>