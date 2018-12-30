
  <?php
//  session_start();
include "pfiles/connect.php";
//echo "hellow";
if(isset($_POST['search']))  {  
      $query = "SELECT * FROM rangemaster WHERE Sector = '".$_POST["search"]."'"; 
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }