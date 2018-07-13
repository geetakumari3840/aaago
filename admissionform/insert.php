<?php
include ("db_conn.php");
error_reporting(0);
?>
<html>
<head>
	<title></title>
</head>
<body>
	<br><br>
	<form action="" method="post" enctype="multipart/form-data">
	Roll No <input type="text" name="rollno" value=""/><br><br>
	Name <input type="text" name="name" Value=""/><br><br>
	Class <input type="text" name="class" value=""/><br><br>
	<input type="file" name="uploadfile" value=""/><br><br>
	<input type="submit" name="submit" value="submit"/>		<br><br>
	</form>
<?php

if($_POST['submit'])
{

	$rn = $_POST['rollno'];
	$sn = $_POST['name'];
	$cl = $_POST['class'];

	$filename = $_FILES["uploadfile"] ["name"];
	$tempname = $_FILES["uploadfile"] ["tmp_name"];
	$folder = "student/".$filename;
	move_uploaded_file($tempname, $folder);
	
	if ($rn!="" && $sn!="" && $cl!="" & $filename!="")	
	{
		$sql = "INSERT INTO admissionform 
				(rollno, name, class, image) 
				VALUES 
				('$rn','$sn','$cl','$folder')";
		$conn->query($sql);

		if ($conn->query($sql) === TRUE) 
					{
                    echo "New record created successfully";
                    } 
                    else {
		                    echo "Error: " . $conn->error;
						}
	}	
		else
			{
					echo "All filed are required";
			}


} 

?>
 
</body>
</html>