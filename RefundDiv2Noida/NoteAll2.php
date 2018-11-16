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
                 stateorderrefundii.SanctionOrderDate, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateorderrefundii.Division,
                stateorderrefundii.ARN,
                stateorderrefundii.RFDMonth, 
                stateorderrefundii.RFDYear,
                stateorderrefundii.RFD2Month, 
                stateorderrefundii.RFD2Year     
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
                stateorderrefundii.SanctionOrderDate, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateorderrefundii.Division,
                stateorderrefundii.ARN     
                FROM stateorderrefundii 
                INNER JOIN stateassesseemaster ON 
                stateorderrefundii.GSTIN=stateassesseemaster.GSTIN
                WHERE stateorderrefundii.SlNo BETWEEN $From_id AND $To_id 
              
                ORDER BY stateorderrefundii.SlNo DESC";
}


$result = mysqli_query($connect, $query);
$output .='
<table border="1" style="width: 800px; margin: auto;">
  <tr >
    <th>Sl.<br>No.</th>
    <th style="text-align:Left;">GSTIN <br>
        Name of Party & <br>
        Address<br></th>
    <th style="text-align:Left;">ARN No.<br>
        Refund Period<br>
        Final/Provisional</th>
    <th style="text-align:Left;">Khand<br>
        Order No.<br>
        Order Date<br></th>
    <th style="text-align:right;">IGST<br>
        CGST<br>
        Cess</th>
  </tr>
      ';
while ($row = mysqli_fetch_array($result))
{
$count = $count + 1;
$output .='
    <tr style="margin:0px;padding:0px;">
        <td style="width:5%;">'.$count.'</td>
        <td style="text-align:left;width:50%">
            '.$row['GSTIN'].'<br>
            '.$row['NameOfParty'].'<br>
            '.$row['Address'].'
        </td>
        <td style="text-align:left;width:15%;">
            '.$row['ARN'].'<br>
            '.$row['RFDMonth'].'/'.$row['RFDYear'].' to 
            '.$row['RFD2Month'].'/'.$row['RFD2Year'].'<br>RFD-
            '.$row['RFD'].'
        </td>
        <td style="text-align:left;width:15%;">Khand-
            '.$row['Khand'].'<br>Order No.
            '.$row['SanctionOrderNo'].'<br>
            '.$row['SanctionOrderDate'].'
        </td>
        <td style="text-align:right;width:15%;">
            '.$row['IGST'].'/-<br>
            '.$row['CGST'].'/-<br>
            '.$row['Cess'].'/-
        </td>
    </tr>';
        
}

$output .='</table>';
echo $output;

?>

