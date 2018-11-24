<?php
session_start();
 include "pfiles/connect.php";
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password1 = mysqli_real_escape_string($connect, $_POST['password']);
 if (isset($_POST['username'])) {


$password = md5($password1);
  $query = "SELECT * FROM users 
  WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0)
  {
      $_SESSION["username"] = $username;
      echo  $_SESSION["username"];
      echo "Yes";
  }
  else
  {
      echo "No";
  }
 }

 if (isset($_POST["action"]))
 {
  unset($_SESSION["username"]);
 }
?>
