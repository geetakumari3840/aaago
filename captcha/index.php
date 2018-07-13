<?php
session_start();
if(isset($_POST['submit'])) {
	$code = $_SESSION['code'];
	if ($_POST['code'] == $code){
		echo 'Matched';
		} else {
			echo 'Mismatch';
		} 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input id="meeting" type="date" value="2018-08-13"/><br><br>
	<input type="text" name="code"> <br><br>
	<img src="image.php"><br><br>
	<input type="submit" name="submit" value="Send">
</form>
</body>
</html>