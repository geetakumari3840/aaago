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
            $output .= '<table border=1  >
                            <tr class="w3-txt-red">
                            <th>Sl.No.</th>
                            <th>GSTIN</th>
                            <th>Name of Party</th>
                            <th>Address</th>
                            <th>Bank Account</th>
                            <th>Bank Name</th>
                            <th>Range</th>
                            <th>Authority</th>
                            </tr>';
            while($row = mysqli_fetch_array($result))
                {
                    $output .= '
                    <td>'.$row["SlNo"].'</td>
                    <td>'.$row["GSTIN"].'</td>
                    <td>'.$row["TradeName"].'</td>
                    <td>'.$row["Address"].'</td>
                    <td>'.$row["BankAc"].'</td>
                    <td>'.$row["BankName"].'</td>
                    <td>'.$row["RangeNo"].'</td>
                    <td>'.$row["Authority"].'</td>
                    </tr>

                '
                ;
                }
                $output .= '</table>';
            echo $output;
        }
        else
            {
                echo 'Data Not Found';
            }
}
?>