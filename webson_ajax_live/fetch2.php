
  <?php
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $con = mysqli_connect($servername, $username, $password, $dbase);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    
 if(isset($_POST["GSTIN"]))
{
  $GSTIN = $_POST["GSTIN"];
  $Address = $_POST["Address"];
  $Email = $_POST["Email"];
  $Mobile = $_POST["Mobile"]; 
  $BankName = $_POST["BankName"];
  echo $BankName;
  $query = '';
    for($count = 0; $count<count($GSTIN); $count++)
   {
     $GSTIN_clean = mysqli_real_escape_string($con, $GSTIN[$count]);
     $Address_clean = mysqli_real_escape_string($con, $Address[$count]);
     $Email_clean = mysqli_real_escape_string($con, $Email[$count]);
     $Mobile_clean = mysqli_real_escape_string($con, $Mobile[$count]);
     
      if($GSTIN_clean != '' && $Address_clean != '' && $Email_clean != '' && $Mobile_clean != '') 
     {
      
     
     $query .= '
     INSERT INTO assesseemaster (GSTIN, Address, Email, Mobile, BankName) 
     VALUES("'.$GSTIN_clean.'", "'.$Address_clean.'", "'.$Email_clean.'",
      "'.$Mobile_clean.'", "'.$BankName.'");';
      }
     }
   if($query != '')
    {
       if(mysqli_multi_query($con, $query))
     {
    echo 'Item Data Inserted';
     }
    else
    {
      echo 'Error';
    }
   }
     else
   {
     echo 'All Fields are Required';
   }
   }
?>