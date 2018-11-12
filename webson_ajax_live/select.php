<?php  
 if(isset($_POST["assessee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");   
      $query = "SELECT * FROM assesseemaster WHERE SlNo = '".$_POST["assessee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>GSTIN</label></td>  
                     <td width="70%">'.$row["GSTIN"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name of the Party</label></td>  
                     <td width="70%">'.$row["TradeName"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Address of the Assessee</label></td>  
                     <td width="70%">'.$row["Address"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Bank Ac No.</label></td>  
                     <td width="70%">'.$row["BankAc"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Bank Name</label></td>  
                     <td width="70%">'.$row["BankName"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 