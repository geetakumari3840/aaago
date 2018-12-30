<?php
//session_start();
    include "pfiles/connect.php";

$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Div_id = $_POST['Div_id'];
$count = 0;
$output ='';
if($_POST["Div_id"] != '')  {
$query ="SELECT * FROM stateorderrefundii 
               WHERE SlNo BETWEEN $From_id AND $To_id 
                AND Division  = $Div_id
                ORDER BY NameOfParty, SanctionOrderNo";
}
else {
$query ="SELECT * FROM stateorderrefundii 
               WHERE SlNo BETWEEN $From_id AND $To_id 
               ORDER BY SlNo, NameOfParty, SanctionOrderNo DESC";
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
    <th style="text-align:right;">CGST<br>
        IGST<br>
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
        <td style="text-align:left;width:15%;">';

if ($row['ARN']==1 ) 
        {
$output .='-----------';
        }
        else
        {
$output .= ''.$row['ARN'].'';
        }

$output .='<br>';
$chmonth1 = $row['RFDMonth'];
        $chmonth2 = $row['RFD2Month'];
        $chyear1 = $row['RFDYear'];
        $chyear2 = $row['RFD2Year'];
switch ($chmonth1) {
    case "1":
        $chmonth11 = "JAN";
        break;
    case "2":
        $chmonth11 = "FEB";
        break;
    case "3":
        $chmonth11 = "MAR";
        break;
    case "4":
        $chmonth11 = "APR";
        break;
    case "5":
        $chmonth11 = "MAY";
        break;
    case "6":
        $chmonth11 = "JUN";
        break;
    case "7":
        $chmonth11 = "JUL";
        break;
    case "8":
        $chmonth11 = "AUG";
        break;
    case "9":
        $chmonth11 = "SEP";
        break;
    case "10":
        $chmonth11 = "OCT";
        break;
    case "11":
        $chmonth11 = "NOV";
        break;
    case "12":
        $chmonth11 = "DEC";
        break;
    default:
        $chmonth11 = "NA";
}
switch ($chmonth2) {
    case "1":
        $chmonth22 = "JAN";
        break;
    case "2":
        $chmonth22 = "FEB";
        break;
    case "3":
        $chmonth22 = "MAR";
        break;
    case "4":
        $chmonth22 = "APR";
        break;
    case "5":
        $chmonth22 = "MAY";
        break;
    case "6":
        $chmonth22 = "JUN";
        break;
    case "7":
        $chmonth22 = "JUL";
        break;
    case "8":
        $chmonth22 = "AUG";
        break;
    case "9":
        $chmonth22 = "SEP";
        break;
    case "10":
        $chmonth22 = "OCT";
        break;
    case "11":
        $chmonth22 = "NOV";
        break;
    case "12":
        $chmonth22 = "DEC";
        break;
    default:
        $chmonth22 = "NA";
}
$FromP = ($chmonth11.'-'.$chyear1);
$ToP = ($chmonth22.'-'.$chyear2);
    if ($FromP != $ToP)
    {
 $output .= $FromP.' to '.$ToP;
    }
    else
    {
    $output .= $FromP;
    }
           

$output .='<br>RFD-'.$row['RFD'].'
        </td>
        <td style="text-align:left;width:15%;">Khand-
            '.$row['Khand'].'<br>Order No.
            '.$row['SanctionOrderNo'].'<br>';

       // .$row['SanctionOrderDate'].
$output .= date('d-m-Y', strtotime($row['SanctionOrderDate']));
$output .='</td>
        <td style="text-align:right;width:15%;">
            '.$row['CGST'].'/-<br>
            '.$row['IGST'].'/-<br>
            '.$row['Cess'].'/-
        </td>
    </tr>';
        
}

$output .='</table>';
echo $output;

?>

