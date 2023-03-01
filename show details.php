<html>
<body>
<?php
include "connection.php";

	$id = "ridham410";

	$query= "SELECT * FROM common_info where userid='$id' ";
	$query_run = mysqli_query($con,$query);

	While($row = mysqli_fetch_assoc($query_run))
	{
        ?>
        <form action=”” method=”POST”>
            <input type="text" name="id"  value="<?php echo $row['first_name'] ?>"><br>
            <input type="text" name="id"  value="<?php echo $row['middle_name'] ?>"><br>
            <input type="text" name="id"  value="<?php echo $row['last_name'] ?>"><br>
            <input type="text" name="id"  value="<?php echo $row['mobile_no'] ?>"><br>
            <input type="text" name="id"  value="<?php echo $row['gender'] ?>"><br>
            <input type="text" name="id"  value="<?php echo $row['branch'] ?>"><br>
		</form>
	    <?php
    }
?>
</html>
</body>