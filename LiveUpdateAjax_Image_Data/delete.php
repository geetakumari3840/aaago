<?php
//delete.php

$connect = new PDO('mysql:host=localhost;dbname=2027387_salary', '2027387_salary', 'b4513.4513z');


if(isset($_POST["image_id"]))
{
 $file_path = 'files/' . $_POST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM tbl_image WHERE image_id = '".$_POST["image_id"]."'";
  $statement = $connect->prepare($query);
  $statement->execute();
 }
}

?>
