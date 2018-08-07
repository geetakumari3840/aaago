<?php
$conn = new mysqli("localhost","2027387_salary","b4513.4513z") or die (mysqli_connect_error());
mysqli_select_db($conn, "2027387_salary") or die (mysqli_connect_error());
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
