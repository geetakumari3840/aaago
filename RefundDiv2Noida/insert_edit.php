<?php  
//session_start();
  include "pfiles/connect.php";
 if(!empty($_POST))  
 {  
      $output = '';  
      $messAuthority = '';  
      $GSTIN = mysqli_real_escape_string($connect, $_POST["GSTIN1"]);  
      $NameOfParty = mysqli_real_escape_string($connect, $_POST["NameOfParty1"]);
      $Address = mysqli_real_escape_string($connect, $_POST["Address1"]);  
      $Division = mysqli_real_escape_string($connect, $_POST["Division1"]);
      $Khand = mysqli_real_escape_string($connect, $_POST["Khand2"]);
      $NodalFile = mysqli_real_escape_string($connect, $_POST["NodalFile1"]);
      $NodalDate = mysqli_real_escape_string($connect, $_POST["NodalDate1"]);
      $CGSTRDate = mysqli_real_escape_string($connect, $_POST["CGSTRDate1"]);
      $RFDMonth = mysqli_real_escape_string($connect, $_POST["RFDMonth1"]);
      $RFDYear = mysqli_real_escape_string($connect, $_POST["RFDYear1"]);
      $RFD2Month = mysqli_real_escape_string($connect, $_POST["RFD2Month1"]);
      $RFD2Year = mysqli_real_escape_string($connect, $_POST["RFD2Year1"]);
      $SanctionOrderNo = mysqli_real_escape_string($connect, $_POST["SanctionOrderNo1"]);
      $SanctionOrderDate = mysqli_real_escape_string($connect, $_POST["SanctionOrderDate1"]);
      $CGST = mysqli_real_escape_string($connect, $_POST["CGST1"]);
      $IGST = mysqli_real_escape_string($connect, $_POST["IGST1"]);
      $Cess = mysqli_real_escape_string($connect, $_POST["Cess1"]);
      $RFD = mysqli_real_escape_string($connect, $_POST["RFD1"]);
      $ARN = mysqli_real_escape_string($connect, $_POST["ARN1"]);
      $ARNDate = mysqli_real_escape_string($connect, $_POST["ARNDate1"]);
      $assessee_id = mysqli_real_escape_string($connect, $_POST["assessee_id2"]);
   
     $query = "  
       UPDATE stateorderrefundii   
       SET GSTIN='$GSTIN',   
                    NameOfParty='$NameOfParty',
                    Address='$Address',
                    Division='$Division',
                    NodalFile='$NodalFile',
                    NodalDate='$NodalDate',
                    CGSTRDate='$CGSTRDate',
                    Khand='$Khand',
                    RFD='$RFD',
                    RFDMonth='$RFDMonth',
                    RFDYear='$RFDYear',
                    RFD2Month='$RFD2Month',
                    RFD2Year='$RFD2Year',
                    SanctionOrderNo='$SanctionOrderNo',
                    SanctionOrderDate='$SanctionOrderDate',
                    CGST='$CGST',
                    IGST='$IGST',
                    Cess='$Cess',
                    ARN='$ARN',
                    ARNDate='$ARNDate'
                   
       WHERE SlNo='$assessee_id'
       ";  
       $messAuthority = 'Data Updated';  
 
  if(mysqli_query($connect, $query))  
  {  
    $output .= '--' . $messAuthority . '--';  
             
  }  
        echo $output; 
      
       
}  
 ?>
 