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
        <th style="width:10%"">Action</th>
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
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
        <td align="center">
            <button type="button" class="btn btn-warning btn-sm edit_data2" 
              id="'.$row['SlNo'].'">Edit </button>
              <button type="button" class="btn btn-danger btn-sm delete_data2" 
              id="'.$row['SlNo'].'">Delete</button></td>
    </tr>';
}

$output .='</table>';
echo $output;

?>

