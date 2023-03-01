<?php

    session_start();
    include "connection.php";
  
    if (isset($_POST['delete_Ass'])) {

        $id = $_POST['delete_id'];
        $xex = $_POST["File_name"];

        $sql = "delete from assignment where id = '$id' ";
        $del = mysqli_query($con, $sql);

        if($del)
        {
            unlink('upload/Assignment/' .$xex);
                $_SESSION['file_msg'] = "File delete successfully.";
                header('location: Upload & Delete Assignment.php');
        }
        else
        {
            $_SESSION['file_msg'] = "Error in deleting file! ";
            header('location: Upload & Delete Assignment.php');
        }
    }


    if (isset($_POST['delete_att'])) {

       
        $id = $_POST['delete_id'];
        $xex = $_POST["File_name"];

        $sql = "delete from attendance where id = '$id' ";
        $del = mysqli_query($con, $sql);

        if($del)
        {
            unlink('upload/Attendance/' .$xex);
                $_SESSION['file_msg'] = "File delete successfully.";
                header('location:Upload & Delete Attendance.php');
        }
        else
        {
            $_SESSION['file_msg'] = "Error in deleting file! ";
            header('location:Upload & Delete Attendance.php');
        }
    }


    if (isset($_POST['delete_not'])) {

        $id = $_POST['delete_id'];
        $xex = $_POST["File_name"];

        $sql = "delete from notice where id = '$id' ";
        $del = mysqli_query($con, $sql);

        if($del)
        {
                unlink('upload/Notice/' .$xex);
                $_SESSION['file_msg'] = "File  delete successfully";
                header('location:Upload & Delete Notice.php');
        }
        else
        {
            $_SESSION['file_msg'] = " Error in deleting file!";
            header('location:Upload & Delete Notice.php');
        }
    }


    if (isset($_POST['delete_time'])) {

        $id = $_POST['delete_id'];
        $xex = $_POST["File_name"];

        $sql = "delete from timetable where id = '$id' ";
        $del = mysqli_query($con, $sql);

        if($del)
        {
                unlink('upload/Time Table/' .$xex);
                $_SESSION['file_msg'] = "File delete successfully";
                header('location:Upload & Delete TimeTable.php');
        }
        else
        {
            $_SESSION['file_msg'] = "Error in deleting file!";
            header('location:Upload & Delete TimeTable.php');
        }
    }


    if (isset($_POST['delete_res'])) {

        $id = $_POST['delete_id'];
        $xex = $_POST["File_name"];

        $sql = "delete from result where id = '$id' ";
        $del = mysqli_query($con, $sql);

        if($del)
        {
                unlink('upload/Result/' .$xex);
                $_SESSION['file_msg'] = "File delete successfully";
                header('location:Upload & Delete Result.php');
        }
        else
        {
            $_SESSION['file_msg'] = "Error in deleting file!";
            header('location:Upload & Delete Result.php');
        }
    }
 
?>