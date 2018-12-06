<?php  
//session_start();
  include "pfiles/connect.php";
 if(!empty($_POST))  
 {  
      $output = '';  
      $messAuthority = '';  
      $GSTIN = mysqli_real_escape_string($connect, $_POST["CGSTIN"]);  
      $PartyName = mysqli_real_escape_string($connect, $_POST["CPartyName"]);
      $Address = mysqli_real_escape_string($connect, $_POST["CAddress"]);
      $Division = mysqli_real_escape_string($connect, $_POST["CDivision"]);  
      $DisNo = mysqli_real_escape_string($connect, $_POST["DisNo"]);  
      $DisDay = mysqli_real_escape_string($connect, $_POST["DisDay"]);
      $DisMonth = mysqli_real_escape_string($connect, $_POST["DisMonth"]);
      $DisYear = mysqli_real_escape_string($connect, $_POST["DisYear"]);  
      $SanNo = mysqli_real_escape_string($connect, $_POST["SanNo"]);
      $SanDay = mysqli_real_escape_string($connect, $_POST["SanDay"]);
      $SanMonth = mysqli_real_escape_string($connect, $_POST["SanMonth"]);
      $SanYear = mysqli_real_escape_string($connect, $_POST["SanYear"]);
      $SGST = mysqli_real_escape_string($connect, $_POST["SGST"]);
      $RFD = mysqli_real_escape_string($connect, $_POST["RFD"]);
     
     $DisDate = 2000+$DisYear.'-'.$DisMonth.'-'.$DisDay;
     $SanDate = 2000+$SanYear.'-'.$SanMonth.'-'.$SanDay;
           $query = "  
           INSERT INTO centraltostate (GSTIN, PartyName, Address, Division, DisNo, DisDate, SanNo, SanDate, SGST, RFD)  
           VALUES('$GSTIN', '$PartyName', '$Address', '$Division', 
            '$DisNo', '$DisDate', '$SanNo', '$SanDate', '$SGST', '$RFD')  
           ";  
           $messAuthority = 'Data Inserted';  
       
      if(mysqli_query($connect, $query))  
      {  
        $output .= '--' . $messAuthority . '--';  
                 
      }  
      else
      {
        echo "some is wrong !!!!";
      }
            echo $output; 
            //echo $messAuthority;
 }  
 ?>
 