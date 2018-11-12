<?php
//session_start();
	include "pfiles/connect.php";


if(isset($_POST["delete_id"]))
{

  $query = "DELETE FROM stateassesseemaster WHERE SlNo = '".$_POST["delete_id"]."'";
	$result = mysqli_query($connect,$query);
 
}

if(isset($_POST["delete_id2"]))
{

  $query = "DELETE FROM stateorderrefundii WHERE SlNo = '".$_POST["delete_id2"]."'";
	$result = mysqli_query($connect,$query);
 
}
?>
