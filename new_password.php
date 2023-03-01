<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>new_password</title>

    <style>

        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html
        {
            background: url("Images/Login.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
        }

        body
        {
            font-family: sans-serif;
        }

        .main
        {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form
        {
            position: relative;
            width: 100%;
            max-width: 380px;
            padding: 100px 40px 40px;
            background: rgb(0, 0, 0,0.7);
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }

        .fa-user-circle-o
        {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        .form h2{
            text-align: center;
            font-size: xx-large;
            letter-spacing: 1px;
            margin-bottom: 2rem;
            color: #00A591;
        }

        .form .cointainer
        {
            position: relative;
        }

        .form .cointainer input
        {
            width: 100%;
            padding: 10px 0;
            font-size: 1rem;
            letter-spacing: 1px;
            margin-bottom: 20px;
            border: none;
            border-bottom: 1px solid #00BBF0;
            outline: none;
            background: transparent;
            color: inherit;
        }

        .pass:focus , .pass:valid
        {
            text-indent: 40px;
        }
        .form .cointainer span
        {
            position: absolute;
            top: 0;
            left: 40px;
            padding: 10px 0;
            font-size: 1rem;
            pointer-events: none;
            transition: 0.3s ease-out;
        }

        .icon
        {
            
            position: relative;
            left: 10px;
            transform: translateY(-50px);
        }

        .fa-lock
        {
            position: relative;
            left: 10px;
            transform: translateY(-50px);
        }

        #password
        {
            margin-bottom: 0;
        }

        .form .cointainer input:focus + span, .form .cointainer input:valid + span
        {
            transform: translateY(-18px);
            color: #00BBF0;
            font-size: 0.8rem;
        }

        .button
        {
            width: 100%;
            height: 100%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 1rem;
            color: inherit;
        }

        .save
        {
            width: 10rem;
            height: 3rem;
            border: none;
            outline: none;
            background:#00A591;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 100px;
            cursor: pointer;
            margin-top:20px;
        }

        .ch-box 
        {
            margin-left: 7px;
        }

        @media all and (max-width: 240px) 
        {
            .form
            {
                padding: 240px 40px 40px;
            }

            .form h2
            {
                font-size:x-large;
            }

            .submit
            {
                width: 8rem;
            }
        }
        .msg
            {
            color: whitesmoke;
            margin-top: 2px;
            }

    </style>

</head>

</head>

<body>

    <div class="main">

        <form method="POST" action="new_password_backend.php" class="form">

        <i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>

        <h2>Reset Password</h2>

            <div class="cointainer">
                <input class="pass" type="password" name="new_password" required id="mypass-1">
                <span>New Password</span>
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            </div>
            <div class="cointainer">
                <input class="pass" type="password" name="conform_password" required id="mypass-2" >
                <span>Confirm Password</span>
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
            </div>
            <div class="ch-box">
                <i class="fa fa-eye fa-lg" aria-hidden="true"></i> &ensp; 
                <input type="checkbox" onclick="myFunction()">
            </div>

            <span class="msg"> 
                <?php
                if(isset($_SESSION['password_msg']))
                {
                    echo $_SESSION['password_msg']; 
                    unset($_SESSION['password_msg']);
                }
                ?>
            </span>

            <div class="button">
                <input type="submit" class="save" value="Save" name="save">
            </div>
        </form>

    </div>

    <script>
        function myFunction() 
        {
            var x = document.getElementById("mypass-1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            var y = document.getElementById("mypass-2");
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>

</body>
</html>