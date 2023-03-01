<?php
    session_start();
    include "Faculty_Navbar.php";
    include "connection.php";
    

    $id =  $_SESSION['user_email'];

	$Query_common_info= "SELECT * FROM common_info where userid='$id' ";
	$result_common_info = mysqli_query($con,$Query_common_info);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Current Details</title>

    <style>

        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html
        {
            background: url("Images/Registration.jpg");
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
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

        .form
        {
            position: relative;
            width: 100%;
            max-width: 380px;
            padding: 70px 40px 40px;
            background: rgb(0, 0, 0,0.7);
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            margin-top: 200px;
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

        fieldset
        {
            padding: 15px;
            margin-bottom: 20px;
            border-color: #FFB423;
        }

        legend
        {
            padding-left: 10px;
            padding-right: 10px;
            color: #FDDB3A;
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

        .inp:focus , .inp:valid
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

        #gender
        {
            position: relative;
            top: 50px;
            left: -1px;
            margin-left: 5px;
        }

        .gender,input
        {
            font-size: 1rem;
            margin-left: 8px;
            margin-bottom: 20px;
            border-bottom: 1px solid #00BBF0;
        }

        .button
        {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-left: 1rem;
            color: inherit;
            position: relative;
           
        }

        .sign-up
        {
            width: 8rem;
            height: 4rem;
            border: none;
            outline: none;
            background:#00A591;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 100px;
            cursor: pointer;
        }


        @media all and (max-width: 320px) 
        {

            .button
            {
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                padding-left: 1rem;
                color: inherit;
                position: relative;
                top: -200px;
            }
        }

    </style>

</head>

<body>

    <div class="main">

        <form method="post" action="Faculty_update.php" class="form">

            <i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>

            <h2>Current Details</h2>
           
    <?php 
    While($row = mysqli_fetch_assoc($result_common_info))
	        {   ?>   

                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="f_name" value="<?php echo $row['first_name'] ?>" required>
                    <span>First Name</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="m_name" value="<?php echo $row['middle_name'] ?>" required>
                    <span>Middle Name</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="l_name" value="<?php echo $row['last_name'] ?>" required>
                    <span>Last Name</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="tel" name="mo_no" value="<?php echo $row['mobile_no'] ?>" required>
                    <span>Mobile Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="address" value="<?php echo $row['address'] ?>"  required>
                    <span>Address</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="email" value="<?php echo $row['email'] ?>" required>
                    <span>E-Mail</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="gender" value="<?php echo $row['gender'] ?>" required>
                    <span>Gender</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                
                <div class="cointainer">
                    <input class="inp" type="text" name="addhar_no"value="<?php echo $row['addhar_no'] ?>" required>
                    <span>Addhar Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="city" value="<?php echo $row['city'] ?>" required>
                    <span>City</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="dob" value="<?php echo $row['dob'] ?>" required>
                    <span>Date of Birth</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="pincode" value="<?php echo $row['pincode'] ?>" required>
                    <span>Pincode</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="branch" value="<?php echo $row['branch'] ?>" required>
                    <span>Branch</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>


    <?php $id = $row['u_id'];
        } 
            $Query_student_info= "SELECT * FROM faculty_info where u_id='$id' ";
            $result_student_info = mysqli_query($con,$Query_student_info);
            While($row = mysqli_fetch_assoc($result_student_info))
	        {
        ?>    
                <div class="cointainer">
                    <input class="inp" type="text" name="post" value="<?php echo $row['post'] ?>" required>
                    <span>Post As</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="s-1" value="<?php echo $row['s_name1'] ?>" required>
                    <span>Subject Name-1</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
         
                <div class="cointainer">
                    <input class="inp" type="text" name="s-2" value="<?php echo $row['s_name2'] ?>" required>
                    <span>Subject Name-2</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
    <?php   } ?>

            <div class="button">
                <input type="submit" class="sign-up" value="Update" name="update">
            </div>

        </form>

    </div>

</body>
</html>