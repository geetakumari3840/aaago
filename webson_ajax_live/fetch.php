<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");   
 if(isset($_POST["assessee_id"]))  
 {  
      $query = "SELECT * FROM assesseemaster WHERE SlNo = '".$_POST["assessee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>