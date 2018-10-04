
  <?php

if(isset($_POST['search'])) {
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $conn = mysqli_connect($servername, $username, $password, $dbase);

    $output = '';
    $search = $_POST['search'];
   // echo $search;
    $sql = "SELECT * FROM assesseemaster WHERE TradeName LIKE '".$search."%' OR GSTIN LIKE '%".$search."%' OR Address LIKE '%".$search."%' OR BankName LIKE '%".$search."%' ORDER BY TradeName";
    $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0)
        {
            //$output .= '<h4 align="center">Search Result</h4>';
            $output .= '</br><table border=1 class="w3-small w3-center">
                            <tr>
                            <th>Sl.No.</th>
                            <th>GSTIN</th>
                            <th>Name of Party</th>
                            <th>Address</th>
                            <th>Range</th>
                            <th>Authority</th>
                            <th style="width:10%">Bank Name</th>
                            <th style="width:10%">Bank Account</th>
                            <th style="width:6%">Action</th>
                            </tr>';
            while($row = mysqli_fetch_array($result))
                {
                    $output .= '
                   <tr> <td>'.$row["SlNo"].'</td>
                    <td>'.$row["GSTIN"].'</td>
                    <td>'.$row["TradeName"].'</td>
                    <td>'.$row["Address"].'</td>
                    <td>'.$row["RangeNo"].'</td>
                    <td>'.$row["Authority"].'</td>
                    <td>'.$row["BankName"].'</td>
                    <td>'.$row["BankAc"].'</td>';

                if ($row["BankAc"] !="" and $row["GSTIN"] !="") {
                    $output .=  '<td><button  id="'.$row["SlNo"].' " class="AddBank1 w3-btn w3-blue">Nexxt</button></td>';
                }
                else {
                    $output .=  '<td><button id='.$row["SlNo"].' name="AddBank1" class="AddBank1 w3-btn w3-red ">Add Bank Details</button></td>';
                }
                     $output .='</tr>';
                
                
            }
                $output .= '</table>';
            echo $output;
        }
        else
            {
    ?>
    <div class="w3-center">
      <br>
   <button id="Assessee" class="w3-btn w3-purple w3-round">Add Assessee Profile</button>
</div>
    <?php
            }
}
?>