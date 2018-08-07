<!DOCTYPE html>
<html lang="en">
<head>
<title>lpc</title>
<meta http-equiv="Content-Language" content="hi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="inca/w3.css">

<style type="text/css">
body {background-color: :yellow;}
</style>
</head>
<body clsss="w3-container">
<?php


$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$email=$_POST['email'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$image_name=$_POST['image_name'];
$declaratoin=$_POST['declaration'];
include "inca/connect.php";

$sql="INSERT INTO profile 
(name, father, mother, email, address, mobile, gender, dob, image_name, declaration)

 VALUES 

('$name', '$father', '$mother', '$email', '$address', '$mobile', '$gender', '$dob', '$image_name', '$declaration')";  


                $conn->query($sql);
 
 $sql="SELECT * FROM  profile WHERE email='$email'";
 $result = $conn->query($sql);
$row=$result->fetch_array();

echo "<h1> Hi, Mr. ".$row['name']."</h1>
<h2>Your Application has been accepted and your User Id is ".$row['email']."</h2>

  <table class='w3-table-all w3-large'>
    <tr>
      <th>Applicant Name</th>
      <th>".$row['name']."</th>

    </tr>
    <tr>
      <td>Father's Name</td>
      <td>".$row['father']."</td>

    </tr>
    <tr>
      <td>Mother's Name</td>
      <td>".$row['mother']."</td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td>".$row['dob']."</td>
    </tr>
        <tr>
      <td>Email Id</td>
      <td>".$row['email']."</td>
    </tr>
        <tr>
      <td>Mobile</td>
      <td>".$row['mobile']."</td>
    </tr>
        <tr>
      <td>Address</td>
      <td>".$row['address']."</td>
    </tr>
        <tr>
      <td>Image Name</td>
      <td>".$row['image_name']."</td>
    </tr>
        <tr>
      <td>Declaration</td>
      <td>".$row['declaration']."</td>
    </tr>
  </table>
</div>";
                         
/*
                         
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                        } else {
                    echo "Error: " . $conn->error;
                        } */
        


?>
</body>
</html>