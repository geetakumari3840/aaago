<?php  
//session_start();
	include "pfiles/connect.php";   
 if(isset($_POST["assessee_id"]))  
 {  
      $query = "SELECT * FROM stateassesseemaster WHERE SlNo = '".$_POST["assessee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
  if(isset($_POST["assessee_id2"]))  
 {  
      $query = "SELECT * FROM stateorderrefundii WHERE SlNo = '".$_POST["assessee_id2"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 } 
   if(isset($_POST["Party_id"]))  
 {  
      $query = "SELECT * FROM stateassesseemaster WHERE PartyName = '".$_POST["Party_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 } 
 ?>