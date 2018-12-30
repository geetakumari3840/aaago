 <?php  
//session_start();
	include "pfiles/connect.php";
 $Day = 15;
 $Month = 7;
 $Year = 18;

 echo $Year.'-'.$Month.'-'.$Day;
  echo "Connection failed: ";


    
if(isset($_POST["search2"]))  
 {  
  
 $query = "SELECT * FROM assesseemaster WHERE TradeName ='".$_POST["search2"]."'"; $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row); 
 }
         
?>