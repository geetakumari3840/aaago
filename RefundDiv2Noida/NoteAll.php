<?php
//session_start();
    include "pfiles/connect.php";

$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Div_id = $_POST['Div_id'];
$count = 0;
$output ='';
if($_POST["Div_id"] != '')  {
$query ="SELECT stateorderrefundii.GSTIN,
                stateorderrefundii.NameOfParty,
                stateassesseemaster.Address, 
                stateorderrefundii.Khand, 
                stateorderrefundii.SanctionOrderNo, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateorderrefundii.Division    
                FROM stateorderrefundii 
                INNER JOIN stateassesseemaster ON 
                stateorderrefundii.GSTIN=stateassesseemaster.GSTIN
                WHERE stateorderrefundii.SlNo BETWEEN $From_id AND $To_id 
               AND stateorderrefundii.Division  = $Div_id
                ORDER BY stateorderrefundii.SlNo DESC";
}
else {
    $query ="SELECT stateorderrefundii.GSTIN,
                stateorderrefundii.NameOfParty,
                stateassesseemaster.Address, 
                stateorderrefundii.Khand, 
                stateorderrefundii.SanctionOrderNo, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateorderrefundii.Division    
                FROM stateorderrefundii 
                INNER JOIN stateassesseemaster ON 
                stateorderrefundii.GSTIN=stateassesseemaster.GSTIN
                WHERE stateorderrefundii.SlNo BETWEEN $From_id AND $To_id 
              
                ORDER BY stateorderrefundii.SlNo DESC";
}


$result = mysqli_query($connect, $query);
$output .='

  
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

$output .='</table>';
echo $output;

?>

