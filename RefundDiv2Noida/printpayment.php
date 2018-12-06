  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
include "pfiles/connect.php";

$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Tvalue = ($To_id - $From_id+1)*3;


$query ="DELETE FROM printpayment;";
$query .="ALTER TABLE printpayment AUTO_INCREMENT=1;";
for($count = $From_id; $count<$To_id+1; $count++)
   {
    for ($i = 0; $i<3; $i++) 
    {
     $query .= "
     INSERT INTO printpayment  (
                                GSTIN,
                                NameOfParty,
                                Division,
                                NodalFile,
                                NodalDate,
                                CGSTRDate,
                                Khand,
                                RFD,
                                RFDMonth,
                                RFDYear,
                                RFD2Month,
                                RFD2Year,
                                SanctionOrderNo,
                                SanctionOrderDate,
                                CGST,
                                IGST,
                                Cess)
                                    
                        SELECT                     
                                GSTIN,
                                NameOfParty,
                                Division,
                                NodalFile,
                                NodalDate,
                                CGSTRDate,
                                Khand,
                                RFD,
                                RFDMonth,
                                RFDYear,
                                RFD2Month,
                                RFD2Year,
                                SanctionOrderNo,
                                SanctionOrderDate,
                                CGST,
                                IGST,
                                Cess
        FROM stateorderrefundii WHERE SlNo LIKE $count;";
      }
    }

for($count1 = 1; $count1<$Tvalue+1; $count1=($count1+3))
   {
        $query .= "UPDATE printpayment SET IGST=0, Cess=0 
                    WHERE SlNo LIKE $count1;";
   }

for($count1 = 2; $count1<$Tvalue+1; $count1=($count1+3))
   {
        $query .= "UPDATE printpayment SET CGST=0, Cess=0 
                    WHERE SlNo LIKE $count1;";
   }
   for($count1 = 3; $count1<$Tvalue+1; $count1=($count1+3))
   {
        $query .= "UPDATE printpayment SET IGST=0, CGST=0 
        WHERE SlNo LIKE $count1;";
   }

$query .= "DELETE FROM `printpayment` WHERE (CGST+IGST+Cess)=0;";

if (mysqli_multi_query($connect, $query)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($connect);
}


?>

