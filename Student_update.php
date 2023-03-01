<?php
    session_start();
    include "connection.php";

    if(isset($_POST['update']))
    {
        $user_name = $_SESSION['user_email'];
              
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
                $fmno = (int) $_POST['f_m_n'];
                $p_add = $_POST['p_adress'];
                $eno = (int) $_POST['eno'];
                $category = $_POST['category'];
                $sem = (int) $_POST['sem'];
                $updown = $_POST['updown'];

                            $common_query = "update common_info set first_name = '$f_name',middle_name = '$m_name',last_name = '$l_name',
                            mobile_no = '$mobile',address = '$address',branch = '$branch',gender = '$gender',addhar_no = '$addhar_no',
                            city = '$city',dob = '$dob',pincode = '$pincode',email = '$email' where userid = '$user_name' ";

                            if(mysqli_query($con, $common_query))
                            {
                                $uid_query = "select u_id from common_info where userid='$user_name' ";
                                $resul_uid = mysqli_query($con,$uid_query);
                                $row = mysqli_fetch_assoc($resul_uid);
                                $user_uid = $row['u_id'];

                                $student_query = "update student_info set father_mno = '$fmno',father_address = '$p_add',enrolment = '$eno',
                                up_down = '$updown',category = '$category',sem = '$sem' where u_id = '$user_uid' "; 


                                if(mysqli_query($con, $student_query)){
                                    header('location:Current_student_details.php');
                                } else{
                                    echo "ERROR: Could not able to execute ". mysqli_error($con);
                                }
                            }
                            else{
                                echo "ERROR : Could not able to execute" . mysqli_error($con);
                            }                    
    }
?>
