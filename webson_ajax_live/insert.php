<?php  
 $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $messAuthority = '';  
      $GSTIN = mysqli_real_escape_string($connect, $_POST["GSTIN"]);  
      $TradeName = mysqli_real_escape_string($connect, $_POST["TradeName"]);  
      $Address = mysqli_real_escape_string($connect, $_POST["Address"]);  
      $RangeNo = mysqli_real_escape_string($connect, $_POST["RangeNo"]);  
      $Authority = "Center";
      $BankAc = mysqli_real_escape_string($connect, $_POST["BankAc"]);
      $BankName = mysqli_real_escape_string($connect, $_POST["BankName"]);
      $BankBranch = mysqli_real_escape_string($connect, $_POST["BankBranch"]);
      $IFSC = mysqli_real_escape_string($connect, $_POST["IFSC"]);
      $MICR = mysqli_real_escape_string($connect, $_POST["MICR"]);
      $SlNo = mysqli_real_escape_string($connect, $_POST["assessee_id"]);

if($SlNo != '')  
      {  
           $query = "  
           UPDATE assesseemaster   
           SET GSTIN='$GSTIN',   
           TradeName='$TradeName',   
           Address='$Address',   
           RangeNo = '$RangeNo',   
           BankAc = '$BankAc'
           BankName = '$BankName'
           BankBranch = '$BankBranch'
           IFSC = '$IFSC'
           MICR = '$MICR'
           WHERE SlNo='".$_POST["assessee_id"]."'";  
           $messAuthority = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO assesseemaster (GSTIN, TradeName, Address, RangeNo, Authority,
           BankAc, BankName, BankBranch, IFSC, MICR)  
           VALUES('$GSTIN', '$TradeName', '$Address', '$RangeNo', '$Authority', 
           '$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR');  
           ";  
           $messAuthority = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $messAuthority . '</label>';  
           $select_query = "SELECT * FROM assesseemaster ORDER BY SlNo DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">GSTIN</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["GSTIN"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["SlNo"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["SlNo"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>