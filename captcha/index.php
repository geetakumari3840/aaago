<?php
session_start();
if(isset($_POST['chek'])) {
	$code = $_SESSION['cap_code']; 
	$user = $_POST['cap'];
	if ($code === $user){
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
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<body>
<form action="" method="post">
	
	<input type="text" name="cap"> <br><br>
	<img src="image.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.<br><br>
	<input type="submit" onclick="return validate();" name="chek" value="Verify">

</form>
</body>
</html>