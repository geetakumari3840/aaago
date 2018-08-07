<?php
$servername = "localhost";
$username = "2027387_salary";
$password = "b4513.4513z";
$myDB = "2027387_salary";
$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
