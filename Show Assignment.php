<?php
    session_start();
    include 'connection.php';

    $sql = "select filename,upload_date from assignment order by id desc ";
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment</title>
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
        }
        .table-container{
            padding: 0 10%;
            margin: 40px auto 0;
        }
        .heading{
            font-size: 40px;
            text-align: center;
            color: #f1f1f1;
            margin-bottom: 40px;
        }
        .table{
            width: 800px;
            border-collapse: collapse;
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
            width:130px;
            text-decoration: none;
            line-height: 35px;
            display:inline-block;
            background-color: #AE8625;
            font-weight: midium;
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
        <h1 class="heading">Assignments</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>File Name</th>
                    <th>Upload Date</th>
                    <th>Downloads</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['upload_date']; ?></td>
                    <td><a href="upload/Assignment/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
