<?php

    session_start();
    include 'connection.php';
    date_default_timezone_set("Asia/Kolkata");

// Uploads Assignmnet
if (isset($_POST['upload_ass'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['fass']['name'];

    // destination of the file on the server
    $destination = 'upload/Assignment/' . $filename;


    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fass']['tmp_name'];
    $size = $_FILES['fass']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) 
    {
        $_SESSION['file_msg'] = "You file extension must be .zip, .pdf, .pptx or .docx ";
        header('location :Upload & Delete Assignment.php');

    }
     elseif ($_FILES['fass']['size'] > 4000000000) { // file shouldn't be larger than 1Megabyte

        $_SESSION['file_msg'] = "you can't upload more than 4GB ";
        header('location:Upload & Delete Assignment.php');
    } 
    else 
    {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            $date = date("Y-m-d");
            $sql = "INSERT INTO assignment (filename , size, upload_date) VALUES ('$filename' , '$size', '$date')";
            if (mysqli_query($con, $sql)) 
            {
                
                $_SESSION['file_msg'] = "File uploaded successfully ";
                header('location: Upload & Delete Assignment.php');
            }
        } 
        else 
        {
            $_SESSION['file_msg'] = "Failed to upload file. ";
            header('location: Upload & Delete Assignment.php');
        }
    }
}

// Uploads Attedance
if (isset($_POST['upload_att'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['fatt']['name'];

    // destination of the file on the server
    $destination = 'upload/Attendance/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fatt']['tmp_name'];
    $size = $_FILES['fatt']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) 
    {
        $_SESSION['file_msg'] = " You file extension must be .zip, .pdf, .pptx or .docx";
        header('location: Upload & Delete Attendance.php');

    }
     elseif ($_FILES['fatt']['size'] > 4000000000) { // file shouldn't be larger than 1Megabyte

        $_SESSION['file_msg'] = " you can't upload more than 4GB";
        header('location: Upload & Delete Attendance.php');
    } 
    else 
    {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            $date = date("Y-m-d");
            $sql = "INSERT INTO attendance (filename , size, upload_date) VALUES ('$filename' , '$size', '$date')";
            if (mysqli_query($con, $sql)) 
            {
                
                $_SESSION['file_msg'] = " File uploaded successfully";
                header('location:Upload & Delete Attendance.php');
            }
        } 
        else 
        {
            $_SESSION['file_msg'] = " Failed to upload file.";
            header('location:Upload & Delete Attendance.php');
        }
    }
}

// Uploads Time Table
if (isset($_POST['upload_time'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['ftime']['name'];

    // destination of the file on the server
    $destination = 'upload/Time Table/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['ftime']['tmp_name'];
    $size = $_FILES['ftime']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) 
    {
        $_SESSION['file_msg'] = "You file  extension must be .zip, .pdf, .pptx or .docx";
        header('location:Upload & Delete TimeTable.php');

    }
     elseif ($_FILES['ftime']['size'] > 4000000000) { // file shouldn't be larger than 1Megabyte

        $_SESSION['file_msg'] = "you can't  upload more than 4GB";
        header('location:Upload & Delete TimeTable.php');
    } 
    else 
    {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            $date = date("Y-m-d");
            $sql = "INSERT INTO timetable (filename , size, upload_date) VALUES ('$filename' , '$size', '$date')";
            if (mysqli_query($con, $sql)) 
            {
                
                $_SESSION['file_msg'] = "File  uploaded successfully";
                header('location: Upload & Delete TimeTable.php');
            }
        } 
        else 
        {
            $_SESSION['file_msg'] = "Failed  to upload file.";
            header('location: Upload & Delete TimeTable.php');
        }
    }
}


// Uploads Notice
if (isset($_POST['upload_not'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['fnot']['name'];

    // destination of the file on the server
    $destination = 'upload/Notice/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fnot']['tmp_name'];
    $size = $_FILES['fnot']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) 
    {
        $_SESSION['file_msg'] = "You file extension must be .zip, .pdf, .pptx or .docx";
        header('location:Upload & Delete Notice.php');

    }
     elseif ($_FILES['fnot']['size'] > 4000000000) { // file shouldn't be larger than 1Megabyte

        $_SESSION['file_msg'] = "you can't upload more than 4GB";
        header('location:Upload & Delete Notice.php');
    } 
    else 
    {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            $date = date("Y-m-d");
            $sql = "INSERT INTO notice (filename , size, upload_date) VALUES ('$filename' , '$size', '$date')";
            if (mysqli_query($con, $sql)) 
            {
                
                $_SESSION['file_msg'] = "File uploaded successfully";
                header('location: Upload & Delete Notice.php');
            }
        } 
        else 
        {
            $_SESSION['file_msg'] = "Failed to upload file.";
            header('location: Upload & Delete Notice.php');
        }
    }
}



// Uploads Result
if (isset($_POST['upload_res'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['fres']['name'];

    // destination of the file on the server
    $destination = 'upload/Result/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['fres']['tmp_name'];
    $size = $_FILES['fres']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'pptx'])) 
    {
        $_SESSION['file_msg'] = "You file extension must be .zip, .pdf, .pptx or .docx";
        header('location: Upload & Delete Result.php');

    }
     elseif ($_FILES['fres']['size'] > 4000000000) { // file shouldn't be larger than 1Megabyte

        $_SESSION['file_msg'] = "you can't upload more than 4GB";
        header('location: Upload & Delete Result.php');
    } 
    else 
    {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
        {
            $date = date("Y-m-d");
            $sql = "INSERT INTO result (filename , size, upload_date) VALUES ('$filename' , '$size', '$date')";
            if (mysqli_query($con, $sql)) 
            {
                
                $_SESSION['file_msg'] = "File uploaded successfully";
                header('location:Upload & Delete Result.php');
            }
        } 
        else 
        {
            $_SESSION['file_msg'] = "Failed to upload file.";
            header('location:Upload & Delete Result.php');
        }
    }
}

?>
