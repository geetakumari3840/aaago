<?php
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $connect = mysqli_connect($servername, $username, $password, $dbase);
$output ='';

$query ="SELECT * FROM assesseemaster ORDER BY SlNo DESC";
$result = mysqli_query($connect, $query);
$output .='

  <div class="table-responsive">
    <table  class="table table-bordered" id="crud_table">
      <tr>
        <th>SlNo</th>      
        <th>GSTIN</th>
        <th>Address</th>
        <th>Email</th>
        <th>BankName</th>
       
      </tr>
      ';
while ($row = mysqli_fetch_array($result))
{

$output .='
    <tr>
    <td>'.$row["SlNo"].'</td>
    <td>'.$row["GSTIN"].'</td>
    <td>'.$row["TradeName"].'</br>'
         .$row["Address"].'</td>
    <td>'.$row["Email"].'</td>
    <td>'.$row["BankName"].'</td>
    </tr>';
}

$output .='</table>';
echo $output;

?>