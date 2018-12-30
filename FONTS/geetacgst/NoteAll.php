<script src="pfiles/printThis.js"></script>
<?php
//session_start();
    include "pfiles/connect.php";

$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Div_id = $_POST['Div_id'];

$count = 0;
$output ='';
if($Div_id != '')  {
    $query ="SELECT * FROM stateorderrefundii 
            WHERE SlNo BETWEEN $From_id AND $To_id 
            AND Division  = $Div_id 
            ORDER BY Division, NameOfParty  ASC";
    /*
$query ="SELECT stateorderrefundii.GSTIN,
                stateorderrefundii.NameOfParty,
                stateassesseemaster.Address, 
                stateorderrefundii.Khand, 
                stateorderrefundii.SanctionOrderNo, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateassesseemaster.Division    
                FROM stateorderrefundii 
                INNER JOIN stateassesseemaster ON 
                stateorderrefundii.GSTIN=stateassesseemaster.GSTIN
                WHERE stateorderrefundii.SlNo BETWEEN $From_id AND $To_id 
               AND stateorderrefundii.Division  = $Div_id 
                ORDER BY stateorderrefundii.Division, stateorderrefundii.NameOfParty  ASC";
                */
}
else {
    $query ="SELECT * FROM stateorderrefundii 
            WHERE SlNo BETWEEN $From_id AND $To_id 
          
            ORDER BY Division, NameOfParty  ASC";
}


$result = mysqli_query($connect, $query);
$output .='

  
    <table border=1 style="wi dth:880px;">
      <tr style="text-align:center;background-color:#F8F8FF">
        <th>Sl<br>No</th>
        <th style="text-align:left;"">Name of Party & Address</th>
        <th>Khand</th>
        <th>Sanction <br>order No. </th>
        <th>CGST<br>Amount</th>
        <th>IGST<br>Amount</th>
        <th>Cess<br>Amount</th>
        <th>RFD</th>
        <th>Div.</th>
 
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
{
$count = $count + 1;
$output .='
    <tr style="margin:0px;padding:0px;">
        <td style="width:4%;">'.$count.'</td>
        <td style="text-align:left;width:42%">'.$row['GSTIN'].'<br>'.$row['NameOfParty'].','.$row['Address'].'</td>
        <td style="width:5%;">'.$row['Khand'].'</td>
        <td style="width:9%;">'.$row['SanctionOrderNo'].'</td>
        <td>'.$row['CGST'].'</td>
        <td>'.$row['IGST'].'</td>
        <td>'.$row['Cess'].'</td>
        <td style="width:4%;">'.$row['RFD'].'</td>
        <td style="width:4%;">';

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
                 $output .= 'VI';
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

