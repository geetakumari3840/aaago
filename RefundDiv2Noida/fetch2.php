
  <?php
 // session_start();
include "pfiles/connect.php";
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
     $errors = array();
 if(isset($_POST["GSTIN"]))
{
      $GSTIN = $_POST['GSTIN'];
      $NameOfParty = $_POST['NameOfParty'];
      $Division = $_POST['Division'];
      $NodalFile = $_POST['NodalFile'];
      $NodalDate = $_POST['NodalDate'];
      $CGSTRDate = $_POST['CGSTRDate'];
      $Khand = $_POST['Khand'];
      $RFDMonth = $_POST['RFDMonth'];
      $RFDYear = $_POST['RFDYear'];
      $RFD2Month = $_POST['RFD2Month'];
      $RFD2Year = $_POST['RFD2Year'];
      $SanctionOrderNo = $_POST['SanctionOrderNo'];
      $SanctonOrderDay = $_POST['SanctonOrderDay'];
      $SanctonOrderMonth = $_POST['SanctonOrderMonth'];
      $SanctonOrderYear = $_POST['SanctonOrderYear'];
      $ARN = $_POST['ARN'];
      $ARNDay = $_POST['ARNDay'];
      $ARNMonth = $_POST['ARNMonth'];
      $ARNYear = $_POST['ARNYear'];
      $CGST = $_POST['CGST'];
      $IGST = $_POST['IGST'];
      $Cess = $_POST['Cess'];
      $RFD = $_POST['RFD'];
if (empty($NodalFile)) { array_push($errors, "NodalFile is required"); }
if (empty($NodalDate)) { array_push($errors, "NodalDate is required"); }
if (empty($CGSTRDate)) { array_push($errors, "CGSTRDate is required"); }
if (empty($GSTIN)) { array_push($errors, "GSTIN is required"); }
if (empty($NameOfParty)) { array_push($errors, "NameOfParty is required"); }
if (empty($Division)) { array_push($errors, "Division is required"); }
if ($Khand < 37 && $Khand > 0 ) { } 
  else {array_push($errors, "Khan No. only 1 to 36");}


$query = '';
    for($count = 0; $count<count($RFDMonth); $count++)
   {

$RFDMonth_clean = mysqli_real_escape_string($connect, $RFDMonth[$count]);
$RFDYear_clean = mysqli_real_escape_string($connect, $RFDYear[$count]);
$RFD2Month_clean = mysqli_real_escape_string($connect, $RFD2Month[$count]);
$RFD2Year_clean = mysqli_real_escape_string($connect, $RFD2Year[$count]);
$SanctionOrderNo_clean = mysqli_real_escape_string($connect, $SanctionOrderNo[$count]);
$SanctonOrderDay_clean = mysqli_real_escape_string($connect, $SanctonOrderDay[$count]);
$SanctonOrderMonth_clean = mysqli_real_escape_string($connect, $SanctonOrderMonth[$count]);
$SanctonOrderYear_clean = mysqli_real_escape_string($connect, $SanctonOrderYear[$count]);
$ARN_clean = mysqli_real_escape_string($connect, $ARN[$count]);
$ARNDay_clean = mysqli_real_escape_string($connect, $ARNDay[$count]);
$ARNMonth_clean = mysqli_real_escape_string($connect, $ARNMonth[$count]);
$ARNYear_clean = mysqli_real_escape_string($connect, $ARNYear[$count]);
$CGST_clean = mysqli_real_escape_string($connect, $CGST[$count]);
$IGST_clean = mysqli_real_escape_string($connect, $IGST[$count]);
$Cess_clean = mysqli_real_escape_string($connect, $Cess[$count]);
$RFD_clean = mysqli_real_escape_string($connect, $RFD[$count]);
$SanctionOrderDate = 2000+$SanctonOrderYear_clean.'-'.$SanctonOrderMonth_clean.'-'.$SanctonOrderDay_clean;
if (is_null($ARNDay_clean) || $ARNDay_clean === 0 || $ARNDay_clean== "") {
  $ARNDate1 = "1-1-1";
}
else {
$ARNDate1 = 2000+$ARNYear_clean.'-'.$ARNMonth_clean.'-'.$ARNDay_clean;
}

if (is_null($ARN_clean) || $ARN_clean === 0 || $ARN_clean== "") {
  $ARN_clean1 = 1;
}
else
{
  $ARN_clean1 = $ARN_clean;
}

//echo $SanctonOrderDate;
     $query .= '
     INSERT INTO stateorderrefundii ( GSTIN,
                                      NameOfParty,
                                      Division,
                                      NodalFile,
                                      NodalDate,
                                      CGSTRDate,
                                      Khand,
                                      RFDMonth,
                                      RFDYear,
                                      RFD2Month,
                                      RFD2Year,
                                      SanctionOrderNo,
                                      SanctionOrderDate,
                                      CGST,
                                      IGST,
                                      Cess,
                                      RFD,
                                      ARN,
                                      ARNDate
                                    ) 
     VALUES("'.$GSTIN.'", "'.$NameOfParty.'", "'.$Division.'",
"'.$NodalFile.'", "'.$NodalDate.'", "'.$CGSTRDate.'", "'.$Khand.'", 
"'.$RFDMonth_clean.'", "'.$RFDYear_clean.'", 
"'.$RFD2Month_clean.'", "'.$RFD2Year_clean.'", 
"'.$SanctionOrderNo_clean.'", "'.$SanctionOrderDate.'",  
"'.$CGST_clean.'", "'.$IGST_clean.'", "'.$Cess_clean.'", 
"'.$RFD_clean.'", "'.$ARN_clean1.'", "'.$ARNDate1.'"  );';
      
     }


if ($RFDMonth_clean < 13 && $RFDMonth_clean > 0 ) { } 
  else {array_push($errors, "RFDMonth only 1 to 12");}
if ($RFDYear_clean < 19 && $RFDYear_clean > 16 ) { } 
  else {array_push($errors, "RFDYear_clean only 17 to 18");}
if ($RFD2Month_clean < 13 && $RFD2Month_clean > 0 ) { } 
  else {array_push($errors, "RFD2Month only 1 to 12");}
if ($RFD2Year_clean < 19 && $RFD2Year_clean > 16 ) { } 
  else {array_push($errors, "RFD2Year_clean only 17 to 18");}

if ($SanctonOrderDay_clean < 31 && $SanctonOrderDay_clean > 0 ) { } 
  else {array_push($errors, "SanctonOrderDay_clean only 1 to 31");}
if ($SanctonOrderMonth_clean < 13 && $SanctonOrderMonth_clean > 0 ) { } 
  else {array_push($errors, "SanctonOrderMonth only 1 to 12");}
if ($SanctonOrderYear_clean < 19 && $SanctonOrderYear_clean > 16 ) { } 
  else {array_push($errors, "SanctonOrderYear_clean only 17 to 18");}

if ($RFD_clean ==6 OR  $RFD_clean == 4 ) { } 
  else {array_push($errors, "RFD_clean only 17 to 18");}

if (empty($SanctionOrderNo_clean)) { array_push($errors, "SanctionOrderNo_clean is required"); }



//echo ($count);
if ($query !='') {
   if(count($errors) === 0)
    {
      mysqli_multi_query($connect, $query);
      echo "Item Data Inserted";
    }
    else
    {
      echo "Please Re-Check, Before Save \n Some Filed are Blank or\n Filed Background Color are Black or Red !!";

    }
   }
   else
   {
    echo "All Filed are Required";
   }
  }   
?>