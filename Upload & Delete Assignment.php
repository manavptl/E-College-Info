<?php
    session_start();
    include 'connection.php';

    $sql = "select id,filename,upload_date from assignment order by id desc ";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Assignment</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {
            background-color:  #32312f;
            font-family:  sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .table-container{
            padding: 0 10%;
            margin: 40px auto 0;
        }

        .main
        {
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .form
        {
            position: relative;
            width: 100%;
            max-width: 380px;
            padding: 40px 40px 20px;
            background: #3c3f44;
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        }

        .form .cointainer
        {
            position: relative;
        }

        span
        {
            display:block;
            margin-bottom: 20px;
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
            background-color: #AE8625;
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

        .button1
        {
            width: 8rem;
            height: 4rem;
            border: none;
            outline: none;
            background:#AE8625;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 100px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .button1
        {
            margin-right: 10px;
        }
        
        .heading{
            font-size: 40px;
            text-align: center;
            color: #f1f1f1;
            margin-bottom: 30px;
        }
        .table{
            width: 800px;
            border-collapse: collapse;
            position: relative;
            left: 23%;
            margin-bottom: 50px;
        }
        .table thead{
            background-color: #D4AF37;
        }
        .table thead tr th{
            font-size: 600;
            font-weight: medium;
            letter-spacing: 0.35px;
            color:#FFFFFF;
            opacity: 1;
            padding: 12px;
            vertical-align: top;
            border:  2px solid #dee2e685;
        }
        .table tbody tr td{
            font-size: 14px;
            letter-spacing: 0.35px;
            font-weight: normal;
            color:#f1f1f1;
            background-color: #3c3f44;
            padding: 8px;
            text-align: center;
            border: 2px solid #dee2e685;
        }
        .table .text_open{
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 0.35px;
            color: #D2AC47;
        }

        .table tbody tr td .btn{
            width:300px;
            text-decoration: none;
            line-height: 35px;
            display:inline-block;
            background-color: #AE8625;
            font-weight: medium;
            color: #FFFFFF;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            font-size: 14px;
            opacity: 1;
        }
@media (max-width768px){
    .table thead{
        display: none;

    }
    .table, .table tbody,.table tr,.table td{
        display: block;
        width: 100%;
    }
    .table tr{
        margin-bottom: 15px;
    }
    .table tbody tr td{
        text-align: right;
        padding-left: 50%;
        position: relative;
    }
    .table td:before{
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 600;
        font-size: 14px;
        text-align: left;
        
    }
}
    </style>
</head>
<body>
    <div class="table-container">

    <div class="main">

        <form method="POST" action="Upload Master.php" class="form" enctype="multipart/form-data">

        <span>File name must be unique and related to the content of the file.</span>
            <div class="cointainer">
                <input class="inp" type="file" name="fass" required style="padding-left:10px;">
                
            </div>
        
            <div class="button">
                <input type="submit" class="button1" value="Upload" name="upload_ass">
            </div>
            <?php
                if(isset($_SESSION['file_msg']))
                {
                    echo $_SESSION['file_msg'];
                    unset($_SESSION['file_msg']);
                }
                ?>
        </form>

    </div>

        <h1 class="heading">Assignment</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>File Name</th>
                    <th>Upload Date</th>
                    <th>Downloads</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                foreach($result as $row) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['upload_date']; ?></td>
                    <td><a href="upload/Assignment/<?php echo $row['filename']; ?>" download>Download</td>
                    <td>
                        <form action="Delete Master.php" method="post" >
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?> "> 
                            <input type="hidden" name="File_name" value="<?php echo $row['filename'] ?> ">
                            <input type="submit" name="delete_Ass" value="Delete" onclick="return checkdelete()" >
                        </form>
                    </td>
                </tr>
                <?php } ?>
               
            </tbody>
        </table>
    </div>
    <script>
            function checkdelete()
            {
                return confirm(' are you sure you want to delete this record');
            }
    </script>
</body>
</html>