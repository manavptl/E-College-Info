<?php
    session_start();

        include 'connection.php';

    if(isset($_POST['sign_in']))
    {
        $user_email = $_SESSION['user_email'] = $_POST['userid'];
        $user_password = $_POST['password'];
         
        $fetch_userid = "select * from common_info where userid = '$user_email' ";

        $query = mysqli_query($con , $fetch_userid);

        $return_rows = mysqli_num_rows($query);
        
            if($return_rows)
            {
                $row = mysqli_fetch_assoc($query);
                
                $db_password = $row['password'];
                $user_id = $row['u_id'];

                $passwordx_decodex = password_verify($user_password,$db_password);

                    if($passwordx_decodex)
                    //if($user_password === $db_password)
                    {
                        $query_student = "select * from student_info where u_id = '$user_id'";
                        $student = mysqli_query($con , $query_student);
                        $ret_std = mysqli_num_rows($student);
                        
                        $query_faculty = "select * from faculty_info where u_id = '$user_id'";
                        $faculty = mysqli_query($con , $query_faculty);
                        $ret_fec = mysqli_num_rows($faculty);

                        if($ret_std == 1)
                        {
                            echo "student";
                            header('location: Student Home.php');
                        }
                        elseif($ret_fec == 1)
                        {
                            echo "faculty";
                            header('location: Faculty Home.php');
                        }
                        else
                        {
                            echo "admin";
                        }

                        $_SESSION['login_D_T'] = date('Y/m/d H:i:s');

                    }
                    else
                    {
                        
                        $_SESSION['msg'] = "Invalid Password.";
                        header('location:Index.php');
                    }
                }
            else
            {
               
               $_SESSION['msg'] = "Invalid Userid.";
                header('location:Index.php');
            }
    }

    if(isset($_POST['sign_up']))
    {
        header('location:Registration.php');
    }
?>