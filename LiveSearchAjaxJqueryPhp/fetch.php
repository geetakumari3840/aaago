
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
        <h1 class="w3-center w3-text-red">Add Assessee Master</h1>

        <form class="w3-container" id="AddAssessee" method="post" action="AddAssessee.php">
<table>
    <tr>
        <th><input class="w3-input w3-border w3-round" type="text" 
                name="GSTIN" placeholder="GSTIN" required/> </th>
        <th><input class="w3-input w3-border w3-round" type="text" 
                name="TradeName" placeholder="Name of the Party" required/></th>
        <th ><input class="w3-input w3-border w3-round" type="text" 
                name="Address" placeholder="Address" required/></th>


       <th> <input class="w3-input w3-border w3-round" type="text" 
                name="Mobile" placeholder="Mobile No." /></th>
       <th> <input class="w3-input w3-border w3-round" type="text" 
                name="Email" placeholder="Email Id" /></th>
       <th> 

<select class="w3-select w3-text-grey  w3-border w3-round" name="RangeNo" type="text" required>
                  <option value="" disabled selected>&nbsp;Range</option>
                  <option value="6">Range 6</option>
                  <option value="7">Range 7</option>
                  <option value="8">Range 8</option>
                  <option value="9">Range 9</option>
                  <option value="10">Range 10</option>
                 </select></th>
</tr><tr>
        <th><input class="w3-input w3-border w3-round" type="text" 
                name="BankAc" placeholder="Bank Account No." required/></th>
       <th> <input class="w3-input w3-border w3-round" type="text" 
                name="BankName" placeholder="Bank'Name" required/></th>
       <th ><input class="w3-input w3-border w3-round" type="text" 
                name="BankBranch" placeholder="Bank Branch" required/></th>

       <th> <input class="w3-input w3-border w3-round" type="text" 
                name="IFSC" placeholder="IFS Code" required/></th>
        <th><input class="w3-input w3-border w3-round" type="text" 
                name="MICR" placeholder="MICR" required/></th>
      <th > <input type="submit" name="insert" id="insert" value="insert" 
          class="w3-btn w3-red w3-round" /></th>
</tr>      
</table>
        </form>


    <?php
            }
}
?>