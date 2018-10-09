<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "2027387_salary");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM tbl_employee WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>