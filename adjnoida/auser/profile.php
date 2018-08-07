<?php
session_start();
include "inca/connect.php";
if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="inca/w3.css">
<title>Profile</title>
<meta http-equiv="Content-Language" content="hi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>New Navigation Bar</title>
        <link rel="stylesheet" href="inca/navbar.css">
        <style type="text/css">
                body {
                background-color: :white;}
        </style>
</head>
<body>

<?php 
 include "inca/header.php";
 include "inca/anavbar.php";
?>
<!--*************** -->
<br>

<div class="w3-container w3-teal w3-card-4">
  <h2>Applicant Profile</h2>
</div>
<form class="w3-container w3-card-4" action='thankyou.php' method='post'>
<br>
<p>      
<label class="w3-text-grey">Applicant Name</label>
<input class="w3-input w3-border" type="text" id="name" name="name" value="Full Name (in Capital letter)" required>
</p>
<p>      
<label class="w3-text-grey">Father's Name</label>
<input class="w3-input w3-border" type="text" id="father" name="father" value="Late Om Prakash" required>
</p>
<p>      
<label class="w3-text-grey">Mother's Name</label>
<input class="w3-input w3-border" type="text" id="mother" name="mother" value="Late Kala Devi" required>
</p>
<p>      
<label class="w3-text-grey">Email ID</label>
<input class="w3-input w3-border" type="text" id="email" name="email" value="ajaykumar3840@gmail.com" required>
</p>
<p>      
<label class="w3-text-grey">Date of Birth</label>
<input class="w3-input w3-border" type="text" id="dob" name="dob" value="1975/07/18" required>
</p>
<p>      
<label class="w3-text-grey">Gender</label>
<input class="w3-input w3-border" type="text" id="gender" name="gender" value="Male" required>
</p>
<p>      
<label class="w3-text-grey">Mobile</label>
<input class="w3-input w3-border" type="number" id="mobile" name="mobile" value="9953593687" required>
</p>
<p>      
<label class="w3-text-grey">Address</label>
<input class="w3-input w3-border" type="text" id="address" name="address" value="417/6, Shastri Nagar, Kanpur" required>
</p>
<p>      
<label class="w3-text-grey">Applicant's Photo</label>
<input class="w3-input w3-border" type="text" id="image_name" name="image_name" value="hi" required>
</p>
<p>      
<label class="w3-text-grey">Declaration</label>
<textarea class="w3-input w3-border" style="resize:none" id="declaration" name="declaration" value="HI, i am happy" ></textarea>
</p>
<br>
  <div class="w3-row">
  <div class="w3-half">
    <input id="milk" class="w3-check" type="checkbox" checked="checked">
    <label>Milk</label>
    <br>
    <input id="sugar" class="w3-check" type="checkbox">
    <label>Sugar</label>
    <br>
    <input id="lemon" class="w3-check" type="checkbox" disabled>
    <label>Lemon (Disabled)</label>
    <br><br>
  </div>

  <div class="w3-half">
    <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
    <label>Male</label>
    <br>
    <input id="female" class="w3-radio" type="radio" name="gender" value="female">
    <label>Female</label>
    <br>
    <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
    <label>Don't know (Disabled)</label>
  </div>
  </div>
  <p><input  class='w3-button w3-green w3-border w3-green w3-hover-card' type='submit'  name='submit'  value='Submit' ></p>
</form>

<br>

<!--*************** -->

<?php include "inca/footer.php";?>


</body>
<?php
} else {
header ("location: index.php");
}
?> 