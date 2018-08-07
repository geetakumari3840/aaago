<?php
session_start();
include "inc/connect.php";
if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {

while ($_SESSION['auser']) {
header ("location: auser/auser.php");
}
while ($_SESSION['buser']) {
header ("location: buser/buser.php");
}
while ($_SESSION['cuser']) {
header ("location: cuser/cuser.php");
}
} else {
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>CGST ADJ NOIDA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/forestbridge.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>
<div class="bgimg w3-display-container w3-animate-opacity" >
<div class="w3-container">
  <h2 class="w3-center w3-xxlarge w3-text-white w3-animate-zoom " style="text-shadow:1px 1px 0 #444;margin-top:52px;">CGST ADJUDICATION BRANCH, NOIDA</h2>

  
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue w3-xlarge w3-round-xlarge w3-display-middle">Enter</button>
</div>
  <div id="id01" class="w3-modal w3-text-black">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent 
        w3-display-topright" title="Close Modal">X</span>
        <img src="images/img_avatar4.png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="" method="post">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="user" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pass" required>
        <!--  <input class="w3-button w3-blue w3-left" name="login" type="submit" value="login"> -->
          <button class="w3-button w3-block w3-green w3-section w3-padding" name="login" type="submit" value="login">Login</button>
          <input class="w3-check" type="checkbox" checked="checked"> Remember me
        </div>
 
<?php
 			$user = @$_POST['user'];
 			$pass = @$_POST['pass'];
 			$login = @$_POST['login'];

 			if ($login) {
                        if ($user =="" || $pass =="") 
	 				{ ?>

	 			<script>alert("Username / Password both are Blank");</script> 
<?php }
	 					 else 
	 				{ 
$result = $conn->query("select * from User_id where panno = '$user' and password = '$pass'");
$data=$result->fetch_array();
$cek=$result->num_rows;

if ($cek >=1) {

if ($data['accounttype']=="a") {
        $_SESSION["auser"] = $data['panno'];
        $_SESSION["aname"] = $data['name'];
        $_SESSION["adesign"] = $data['design'];
        echo "<script type='text/javascript'> document.location = 'auser/auser.php'; </script>";
      } 
elseif ($data['accounttype']=="b") {
        $_SESSION["buser"] = $data['panno'];
        $_SESSION["bbuser"]= $user;
        $_SESSION["aname"] = $data['name'];
        $_SESSION["adesign"] = $data['design'];
        echo "<script type='text/javascript'> document.location = 'buser/buser.php'; </script>";
}
elseif ($data['accounttype']=="c") {
        $_SESSION["cuser"] = $data['panno'];
        $_SESSION["aname"] = $data['name'];
        $_SESSION["adesign"] = $data['design'];
        echo "<script type='text/javascript'> document.location = 'cuser/cuser.php'; </script>";
} 
} else {
echo "<p clss='w3-red'>Please enter valid Username/Password</p>";
echo "<a href='Forgat.php'>Forgat Password</a>";
        }
                }	
                        }
?>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
</div>
</body>
</html>
<?php
}
?>