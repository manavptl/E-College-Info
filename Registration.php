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

    <title>Registration</title>

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
            padding: 1700px 40px 40px;
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

        @media all and (max-width: 240px) 
        {
            .form
            {
                padding: 2000px 40px 40px;
            }
        }

        @media all and (max-width: 320px) 
        {
            .form
            {
                padding: 1800px 40px 40px;
            }
        }
        .msg
            {
            color: whitesmoke;
            margin-top: 2px;
            }


    </style>

</head>

<body>

    <div class="main">

        <form method="post" action="Registration_backend.php" class="form">

            <i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>

            <h2>Sign Up</h2>

            <div class="gender">
                <lable style="margin-left: 15px;">User</lable>
                <input type="radio" id="stud" name="user" value="student" onclick="javascript:studentCheck();">
                <label for="student">Student</label>
                <input type="radio" id="facu" name="user" value="faculty" onclick="javascript:facultyCheck();">
                <label for="faculty">Faculty</label>
            </div>

            <fieldset>
                <legend>Login Details</legend>
                <div class="cointainer">
                    <input class="inp" type="text" name="e-mail" required>
                    <span>E-Mail</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <?php
                if(isset($_SESSION['username_msg']))
                {
                    echo $_SESSION['username_msg']; 
                    unset($_SESSION['username_msg']);
                }
                ?>
                <div class="cointainer" id="password">
                    <input class="inp" type="password" name="pass-1" required id="mypass-1">
                    <span>Password</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer" id="password">
                    <input class="inp" type="password" name="pass-2" required id="mypass-2">
                    <span>Re-Enter Password</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="ch-box">
                &ensp;<i class="fa fa-eye fa-lg" aria-hidden="true"></i> &ensp; 
                    <input type="checkbox" onclick="myFunction()">
                </div>

                <span class="msg"> 
                <?php
                if(isset($_SESSION['pass_msg']))
                {
                    echo $_SESSION['pass_msg']; 
                    unset($_SESSION['pass_msg']);
                }
                ?>
            </span>
            </fieldset>

            <fieldset>
                <legend>General Details</legend>
                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="f_name" required>
                    <span>First Name</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="m_name" required>
                    <span>Middle Name</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="l_name" required>
                    <span>Last Name</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="tel" name="mo_no" required>
                    <span>Mobile Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="address" required>
                    <span>Address</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="email" required>
                    <span>E-Mail</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="gender">
                    <i class="fa fa-user icon fa-lg" id="gender"></i>&ensp;
                    <lable>Gender</lable>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="addhar_no" required>
                    <span>Addhar Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="city" required>
                    <span>City</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="dob" required>
                    <span>Date of Birth(YY-MM-DD)</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="pincode" required>
                    <span>Pincode</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="branch" required>
                    <span>Branch</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
            </fieldset>

        <div id="student_details" >
            <fieldset>
                <legend>Student Details For College</legend>
                <div class="cointainer">
                    <input class="inp" type="text" name="f_m_n">
                    <span>Father Mobile Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer" id="password">
                    <input class="inp" type="text" name="p_address" >
                    <span>Parents Address</span>
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <div class="cointainer" >
                    <input class="inp" type="text" name="eno">
                    <span>Enrollment Number</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text"  name="category" >
                    <span>category</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="gender">
                    <i class="fa fa-user icon fa-lg" id="gender"></i>&ensp;
                    <lable>Up-Down</lable>
                    <input type="radio" id="yes" name="updown"  value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="updown"  value="no">
                    <label for="no">No</label>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="sem">
                    <span>Current Semester(In Digit)</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
            </fieldset>
        </div>
        <div id="faculty_details" >
            <fieldset>
                <legend>Faculty Subject</legend>
                <div class="cointainer">
                    <input class="inp" type="text" name="post">
                    <span>Post As</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="s-1">
                    <span>Subject 1 Name</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
                <div class="cointainer">
                    <input class="inp" type="text" name="s-2">
                    <span>Subject 2 Name</span>
                    <i class="fa fa-user icon fa-lg"></i>
                </div>
            </fieldset>
        </div>

            <div class="button">
                <input type="submit" class="sign-up" value="Sign Up" name="sign_up">
            </div>

        </form>

    </div>

    <script>
       function studentCheck() {
    if (document.getElementById('stud').checked) {
        document.getElementById('student_details').style.visibility = 'visible';
        document.getElementById('faculty_details').style.visibility = 'hidden';
    }
    //else document.getElementById('istudent_details').style.visibility = 'hidden';
    }
    function facultyCheck() {
    if (document.getElementById('facu').checked) {
        document.getElementById('faculty_details').style.visibility = 'visible';
        document.getElementById('student_details').style.visibility = 'hidden';
    }
    //else document.getElementById('faculty_details').style.visibility = 'hidden';
    }
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