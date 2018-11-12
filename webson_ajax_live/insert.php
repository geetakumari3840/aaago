<?php  
 $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $messAuthority = '';  
      $GSTIN = mysqli_real_escape_string($connect, $_POST["GSTIN"]);  
      $TradeName = mysqli_real_escape_string($connect, $_POST["TradeName"]);
      $Mobile = mysqli_real_escape_string($connect, $_POST["Mobile"]);
      $Email = mysqli_real_escape_string($connect, $_POST["Email"]);  
      $Address = mysqli_real_escape_string($connect, $_POST["Address"]);  
      $RangeNo = mysqli_real_escape_string($connect, $_POST["RangeNo"]);  
      $Authority = "center";  
      $BankAc = mysqli_real_escape_string($connect, $_POST["BankAc"]);
      $BankName = mysqli_real_escape_string($connect, $_POST["BankName"]);
      $BankBranch = mysqli_real_escape_string($connect, $_POST["BankBranch"]);
      $IFSC = mysqli_real_escape_string($connect, $_POST["IFSC"]);
      $MICR = mysqli_real_escape_string($connect, $_POST["MICR"]);
     

      if($_POST["assessee_id"] != '')  
      {  
   $query = "  
           UPDATE assesseemaster   
           SET GSTIN='$GSTIN',   
           TradeName='$TradeName',   
           Address='$Address',   
           RangeNo = '$RangeNo', 
           Mobile = '$Mobile',
           Email = '$Email',  
           BankAc = '$BankAc',
           BankName = '$BankName',
           BankBranch = '$BankBranch',
           IFSC = '$IFSC',
           MICR = '$MICR'
           WHERE SlNo='".$_POST["assessee_id"]."'
           ";  
           $messAuthority = 'Data Updated';  
/* 
   */


      }  
      else  
      {  
           $query = "  
           INSERT INTO assesseemaster (GSTIN, TradeName, Address, RangeNo, Authority,
           BankAc, BankName, BankBranch, IFSC, MICR)  
           VALUES('$GSTIN', '$TradeName', '$Address', '$RangeNo', 'Center', 
           '$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR')  
           ";  
           $messAuthority = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $messAuthority . '</label>';  
           $select_query = "SELECT * FROM assesseemaster ORDER BY SlNo DESC LIMIT 115";  
           $result = mysqli_query($connect, $select_query); 
           $output .= '
                      <div class="table-responsive">  
                          <table class="table table-bordered">  
                               <tr class="bg-info">                                          
                                    <th>Sl.No.</th>
                                    <th align="center">GSTIN <br>Authority</th>
                                    <th>Name of Party<br>Address</th>
                                    <th>Range</th>
                                    <th>Bank Account</th>
                                    <th>Bank Name</br>Bank Branch</th>
                                    <th>IFSC</br>MICR</th>
                                    <th>Action</th> 
                                     
                               </tr>';
						while($row = mysqli_fetch_array($result))  
            {  

              $output .='  
                          <tr>  
                          <td>'.$row["SlNo"].'</td>
                          <td>'.$row["GSTIN"].'</br>
                          <p class="text-danger" align="center">
                               '.$row["Authority"].'</p></td>
                          <td>'.$row["TradeName"].'</br>
                              '.$row["Address"].'</td>
                          <td>'.$row["RangeNo"].'</td>
                          <td>'.$row["BankAc"].'</td>
                          <td>'.$row["BankName"].'</br>
                              '.$row["BankBranch"].'</td>
                          <td>'.$row["IFSC"].'</br>
                              '.$row["MICR"].'</td>';
                if ($row["BankAc"] !="" and $row["GSTIN"] !="") 
                      {
   //               $output .='<td><input type="button" name="next" value="Next" 
  //                class="btn btn-success btn-xl next_data" id="'.$row["SlNo"].'"/></td>';
    $output .= '<td align="center"><input type="button" name="edit" value="Edit" class="btn btn-warning btn-xl edit_data" id="'.$row["SlNo"].'"/>
          <input type="button" name="next" value="Next" class="btn 
                    btn-info btn-xl next_data" id="'.$row["GSTIN"].'"/></td></tr>
                    ';                      

                     }
                      else 
                      {
                  $output .= '<td><input type="button" name="edit" value="Add Bank Details" class="btn btn-danger btn-xl edit_data" id="'.$row["SlNo"].'"/></td></tr>';
                      }
                   
                    

}  
         
                  $output .= '</table></div>';

                            
      }  
            echo $output;  
 }  
 ?>
 