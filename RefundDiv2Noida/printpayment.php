  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
include "pfiles/connect.php";

$From_id = 1;
$To_id = 238;
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

/////////////////////////////

$query1 ="SELECT * FROM printpayment ORDER BY SlNo DESC";
$results = mysqli_query($connect, $query1);
$output ='';
$output .='
  <div class="table-responsive">
    <table  class="table table-bordered" style="width:100%;text-align:center;">
      <tr  align="center" class="bg-info">
        <th>SlNo</th>
        <th>Name of Party</th>
        <th>Div</th>
        <th>Nodal <br>File</th>
        <th>Nodal<br>Date</th>
        <th>CGSTR<br>Date</th>
        <th>Khand</th>
        <th>RFD</th>
        <th>Period</th>
        <th>Order<br>No</th>
        <th>Order<br>Date</th>
        <th>CGST</th>
        <th>IGST</th>
        <th>Cess</th>
    </tr>
      ';
mysqli_fetch_array($results);
    echo $row;
while ($row !='')
{

$output .='
    <tr>
        <td>'.$row['SlNo'].'</td>
        <td>'.$row['GSTIN'].'</br>'.$row['NameOfParty'].'</td>
        <td>'.$row['Division'].'</td>
        <td>'.$row['NodalFile'].'</td>
        <td>'.$row['NodalDate'].'</td>
        <td>'.$row['CGSTRDate'].'</td>
        <td>'.$row['Khand'].'</td>
        <td>'.$row['RFD'].'</td>
        <td>'.$row['RFDMonth'].'/ '.$row['RFDYear'].'</td>
        <td>'.$row['SanctionOrderNo'].'</td>
        <td>'.$row['SanctionOrderDate'].'</td>
        <td>'.$row['CGST'].'</td>
        <td>'.$row['IGST'].'</td>
        <td>'.$row['Cess'].'</td>

    </tr>';
}

$output .='</table>';
echo $output;

/*
$output .='

  <div class="table-responsive" style="width:900px;text-align:center;">
  <div style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following refund sanction orders received from State Goods & Service Tax are being forwarded to concerned jurisdictional officer for necessary action at their end:</div>
    <table  class="table table-bordered" style="width:900px">
      <tr  align="center" class="bg-info">
        <th style="width:5%">Sl<br>No</th>
        <th style="wid th:50%">Name of Party & Address</th>
        <th style="width:5%">Khand</th>
        <th style="width:8%">Sanction <br>order No. </th>
        <th style="width:15%">CGST<br>Amount</th>
        <th style="width:15%">IGST<br>Amount</th>
        <th style="width:15%">Cess<br>Amount</th>
        <th style="width:4%">RFD</th>
        <th style="width:4%">Div.</th>
 
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
{
$count = $count + 1;
$output .='
    <tr>
        <td>'.$count.'</td>
        <td style="text-align:left">'.$row['GSTIN'].'<br>'.$row['NameOfParty'].','.$row['Address'].'</td>
        <td>'.$row['Khand'].'</td>
        <td>'.$row['SanctionOrderNo'].'</td>
        <td>'.$row['CGST'].'</td>
        <td>'.$row['IGST'].'</td>
        <td>'.$row['Cess'].'</td>
        <td>'.$row['RFD'].'</td>
        <td>';

         switch ($row['Division']) {
             case 1:
                 $output .= 'I';
                 break;
             case 2:
                 $output .= 'II';
                 break;
                 case 3:
                 $output .= 'III';
                 break;
                 case 4:
                 $output .= 'IV';
                 break;
                 case 5:
                 $output .= 'V';
                 break;
                 case 6:
                 $output .= 'IV';
                 break;
             default:
                 # code...
                 break;
         }
$output .='</td></tr>';
}

$output .='
</table><br><br><br><br>
<table  style="width:100%;>
<tr style="text-align:left">
<td style="text-align:left;width:10%;">Inspector(R/R)</td>
<td>Nodal Officer(CGST)</td></tr></table>';
echo $output;
*/
?>

