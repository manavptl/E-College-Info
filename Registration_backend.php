<?php
    include "connection.php";
    session_start();

    if(isset($_POST['sign_up']))
    {
        $user_name = $_POST['e-mail'];
        $sql = "select userid from common_info where userid ='$user_name'";
        $res = mysqli_query($con,$sql);
        $ret_row = mysqli_num_rows($res);
        if(!$ret_row == 1)
        {        
                $pass1 = $_POST['pass-1'];
                $pass2 = $_POST['pass-2'];
                $f_name = $_POST['f_name']; 
                $m_name = $_POST['m_name']; 
                $l_name = $_POST['l_name']; 
                $mobile = (int) $_POST['mo_no']; 
                $address = $_POST['address'];
                $email = $_POST['email']; 
                $gender = $_POST['gender']; 
                $addhar_no = (int) $_POST['addhar_no'];
                $city = $_POST['city']; 
                $dob = $_POST['dob']; 
                $pincode =(int) $_POST['pincode']; 
                $branch = $_POST['branch']; 
                $user =  $_POST['user'];

                    if("student" === $user)
                    {
                        $fmno = (int) $_POST['f_m_n'];
                        $p_add = $_POST['p_address'];
                        $eno = (int) $_POST['eno'];
                        $category = $_POST['category'];
                        $sem = (int) $_POST['sem'];
                        $updown = $_POST['updown'];

                        if($pass1 === $pass2)
                        {
                            $ked100pubg = password_hash("$pass1", PASSWORD_BCRYPT); 
                            $common_query = "insert into common_info(userid,password,first_name,middle_name,last_name,mobile_no,address,branch,gender,addhar_no,city,dob,pincode,email) 
                            values('$user_name','$ked100pubg','$f_name','$m_name','$l_name','$mobile','$address','$branch','$gender','$addhar_no','$city','$dob','$pincode','$email')";
                            //$stud1 = mysqli_query($con,$common_query);

                            if(mysqli_query($con, $common_query))
                            {
                                $uid_query = "select u_id from common_info where userid='$user_name' ";
                                $resul_uid = mysqli_query($con,$uid_query);
                                $row = mysqli_fetch_assoc($resul_uid);
                                $user_uid = $row['u_id'];

                                $student_query = "insert into student_info(u_id,father_mno,father_address,enrolment,up_down,category,sem) 
                                values('$user_uid','$fmno','$p_add','$eno','$updown','$category','$sem')";
                                //$stud2 = mysqli_query($con,$student_query);

                                if(mysqli_query($con, $student_query)){
                                    header('location:Index.php');
                                } else{
                                    echo "ERROR: Could not able to execute ". mysqli_error($con);
                                }
                            }
                            else{
                                echo "ERROR : Could not able to execute" . mysqli_error($con);
                            }
                                
                        }
                        else
                        {
                            $_SESSION['pass_msg'] = " Password does't match.";
                            header('location : registration.php');
                        }

                    }
                    else
                    {
                        $sub1 =  $_POST['s-1'];
                        $sub2 =  $_POST['s-2'];
                        $post =  $_POST['post'];

                        if($pass1 === $pass2)
                        {
                            $ked100pubg = password_hash("$pass1",PASSWORD_DEFAULT); 
                            $common_query = "insert into common_info(userid,password,first_name,middle_name,last_name,mobile_no,address,branch,gender,addhar_no,city,dob,pincode,email) 
                            values('$user_name','$ked100pubg','$f_name','$m_name','$l_name','$mobile','$address','$branch','$gender','$addhar_no','$city','$dob','$pincode','$email')";

                            if(mysqli_query($con, $common_query))
                            {
                                $uid_query = "select u_id from common_info where userid='$user_name' ";
                                $resul_uid = mysqli_query($con,$uid_query);
                                $row = mysqli_fetch_assoc($resul_uid);
                                $user_uid = $row['u_id'];

                                $faculty_query = "insert into faculty_info(post,u_id,s_name1,s_name2) 
                                values('$post','$user_uid','$sub1','$sub2')";
                        
                                if(mysqli_query($con, $faculty_query)){
                                    header('location:Index.php');
                                } else{
                                    echo "ERROR: Could not able to execute" . mysqli_error($con);
                                }
                            }
                            else{
                                echo "ERROR: Could not able to execute" . mysqli_error($con);
                            }                               
                        }
                        else
                        {
                            $_SESSION['pass_msg'] = "Password does't match.";
                            header('location:registration.php');
                        }
                    }
    
                }
                else
                {
                    $_SESSION['username_msg'] = "Choose Other Username.";
                    header('location:registration.php');
                }
    }
?>