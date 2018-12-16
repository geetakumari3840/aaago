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
      $Rangee = mysqli_real_escape_string($connect, $_POST["Rangee"]);  
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
           Rangee = '$Rangee',  
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
       INSERT INTO stateassesseemaster (GSTIN, PartyName, Address, Area, Rangee, Division, Authority, BankAc, BankName, BankBranch, IFSC, MICR)  
       VALUES('$GSTIN', '$PartyName', '$Address', '$Area', '$Rangee', '$Division', '1', '$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR')";  
         $messAuthority = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
        $output .= '--' . $messAuthority . '--';  
                 
      }  
            echo $output; 
            echo $query;
 }  
 ?>
 