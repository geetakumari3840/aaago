<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
  $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "2027387_salary";
   $con = new mysqli($servername, $username, $password, $dbase);

    // get user id
    $user_id = $_POST['id'];

    // delete User
    $query = "DELETE FROM users WHERE id = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>