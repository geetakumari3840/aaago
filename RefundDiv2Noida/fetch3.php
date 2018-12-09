<?php
//  session_start();
include "pfiles/connect.php";
    $search_id = $_POST['search_id'];

$output ='';
if($_POST["search_id"] != '')  

{
$query ="SELECT * FROM stateorderrefundii WHERE NodalFile LIKE $search_id ORDER BY SlNo DESC";
}
else
{
 $query ="SELECT * FROM stateorderrefundii  ORDER BY SlNo DESC";
}

$result = mysqli_query($connect, $query);
$output .='

  <div class="table-responsive">
    <table  class="table table-bordered" style="width:100%;text-align:center;">
      <tr  align="center" class="bg-info">
        <th>SlNo</th>
        <th>Name of Party & Address</th>
        <th>Div</th>
        <th>Nodal File<br>Date</th>
        <th>CGSTR<br>Date</th>
        <th>Khand</th>
        <th>RFD</th>
        <th>Period</th>
        <th>Order No<br>Date</th>
        <th>CGST</th>
        <th>IGST</th>
        <th>Cess</th>
        <th>ARN <br>Date</th>
        <th style="width:10%"">Action</th>
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
{

$output .='
    <tr>
        <td>'.$row['SlNo'].'</td>
        <td>'.$row['GSTIN'].'</br>'.$row['NameOfParty'].',<br> '.$row['Address'].'


        </td>
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
    $output .= '</td><td>'.$row['NodalFile'].'</br>';
    $output .= date('d-m-Y', strtotime($row['NodalDate']));
    $output .='</td><td>';
    $output .= date('d-m-Y', strtotime($row['CGSTRDate']));
    $output .='</td>
        <td>'.$row['Khand'].'</td>
        <td>'.$row['RFD'].'</td>
        <td>';
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
$output .='<td>'.$row['SanctionOrderNo'].'</br>';
$output .= date('d-m-Y', strtotime($row['SanctionOrderDate']));
$output .='</td>
        <td>'.$row['CGST'].'</td>
        <td>'.$row['IGST'].'</td>
        <td>'.$row['Cess'].'</td>
        <td>';  
        if ($row['ARN']==1) 
        {
$output .='';
        }
        else
        {
$output .= ''.$row['ARN'].'';
        }
$output .='<br>';
  if ($row['ARNDate']==1) {
            $output .='';
        }
        else
        {
          $output .= date('d-m-Y', strtotime($row['ARNDate']));
        }
           $output .='</td>
        <td align="center">
         <div   class="btn-group btn-group-sm">
            <button type="button" class="btn btn-warning edit_data2" 
              id="'.$row['SlNo'].'">Edit </button>
              <button type="button" class="btn btn-danger delete_data2" 
              id="'.$row['SlNo'].'">Delete</button></div></td>
    </tr>';
}

$output .='</table>';
echo $output;

?>

