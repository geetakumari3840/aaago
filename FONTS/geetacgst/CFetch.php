<?php
//  session_start();
include "pfiles/connect.php";
    $search_id = $_POST['search_id'];

$output ='';

 $query ="SELECT * FROM centraltostate  ORDER BY SlNo DESC";

$result = mysqli_query($connect, $query);
$output .='

  <div class="table-responsive">
    <table  class="table table-bordered" style="width:100%;text-align:center;">
      <tr  align="center" class="bg-info">
        <th>SlNo</th>
        <th style="text-align:left;">GSTIN &
        Name of Party</th>
        <th  style="text-align:left;">Address</th>
        <th>Div.</th>
        <th colspan="2">Dispatch No. & Date</th>
        <th colspan="2">Santion No. & Date</th>
        <th>SGST</th>
        <th>RFD</th>
        <th style="width:10%"">Action</th>
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
{

$output .='
    <tr>
        <td>'.$row['SlNo'].'</td>
        <td style="text-align:left;">'.$row['GSTIN'].'</br>
        '.$row['PartyName'].'</td>
        <td style="text-align:left;">'.$row['Address'].'</td>
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
    $output .= '</td><td>'.$row['DisNo'].'</td><td>';
    $output .= date('d-m-Y', strtotime($row['DisDate']));
    $output .='</td><td>'.$row['SanNo'].'</td><td>';
    $output .= date('d-m-Y', strtotime($row['SanDate']));
    $output .='</td>
        <td>'.$row['SGST'].'</td>
        <td>'.$row['RFD'].'</td>';
        
$output .='<td align="center"><div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-warning edit_data2" 
              id="'.$row['SlNo'].'">Edit </button>
              <button type="button" class="btn btn-danger delete_data2" 
              id="'.$row['SlNo'].'">Delete</button></div></td>
    </tr>';
}

$output .='</table>';
echo $output;

?>

