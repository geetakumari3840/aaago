<?php  
//session_start();
  include "pfiles/connect.php";
 if(!empty($_POST))  
 {  
      $output = '';  
      $messAuthority = '';  
      $GSTIN = mysqli_real_escape_string($connect, $_POST["GSTIN"]);  
      $PartyName = mysqli_real_escape_string($connect, $_POST["PartyName"]);
      $Mobile = mysqli_real_escape_string($connect, $_POST["Mobile"]);
      $Area = mysqli_real_escape_string($connect, $_POST["Area"]);  
      $Address = mysqli_real_escape_string($connect, $_POST["Address"]);  
      $Division = mysqli_real_escape_string($connect, $_POST["Division"]);  
      $Authority = "1";  
      $BankAc = mysqli_real_escape_string($connect, $_POST["BankAc"]);
      $BankName = mysqli_real_escape_string($connect, $_POST["BankName"]);
      $BankBranch = mysqli_real_escape_string($connect, $_POST["BankBranch"]);
      $IFSC = mysqli_real_escape_string($connect, $_POST["IFSC"]);
      $MICR = mysqli_real_escape_string($connect, $_POST["MICR"]);
     

      if($_POST["assessee_id"] != '')  
      {  
   $query = "  
           UPDATE stateassesseemaster   
           SET GSTIN='$GSTIN',   
           PartyName='$PartyName',   
           Address='$Address',   
           Division = '$Division', 
           Mobile = '$Mobile',
           Area = '$Area',  
           BankAc = '$BankAc',
           BankName = '$BankName',
           BankBranch = '$BankBranch',
           IFSC = '$IFSC',
           MICR = '$MICR'
           WHERE SlNo='".$_POST["assessee_id"]."'
           ";  
           $messAuthority = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO stateassesseemaster (GSTIN, PartyName, Address, Division, Authority, BankAc, BankName, BankBranch, IFSC, MICR)  
           VALUES('$GSTIN', '$PartyName', '$Address', '$Division', '1', 
           '$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR')  
           ";  
           $messAuthority = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $messAuthority . '</label>';  
           $select_query = "SELECT * FROM stateassesseemaster ORDER BY SlNo DESC LIMIT 115";  
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
                          <td>'.$row["PartyName"].'</br>
                              '.$row["Address"].'</td>
                          <td>'.$row["Division"].'</td>
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
 