
 <?php
if(isset($_REQUEST)) {
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    $GSTIN = $_POST['GSTIN'];
    $TradeName = $_POST['TradeName'];
    $Mobile = $_POST['Mobile'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $RangeNo = $_POST['RangeNo'];
    $Authority = "Center";
    $BankAc = $_POST['BankAc'];
    $BankName = $_POST['BankName'];
    $BankBranch = $_POST['BankBranch'];
    $IFSC = $_POST['IFSC'];
    $MICR = $_POST['MICR'];



$sql = "INSERT INTO assesseemaster (GSTIN, TradeName, Mobile, Email, Address, RangeNo, 
		Authority, BankAc, BankName, BankBranch, IFSC, MICR ) VALUES 
		('$GSTIN', '$TradeName', '$Mobile', '$Email', '$Address', '$RangeNo', '$Authority', 
		'$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR')";
        if (mysqli_query($conn, $sql)) {
        	//include "index.html";
?>
<table border=1 class="w3-small w3-center">
                            <tr>
                            <th>GSTIN</th>
                            <th>Name of Party & Address</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Authority</th>
                            <th style="width:10%">Range</th>
                            </tr>
                               <tr>
                            <th><?php echo "$GSTIN"; ?></th>
                            <th><?php echo "$TradeName"." "."$Address"; ?></th>
                            <th><?php echo "$Mobile"; ?></th>
                            <th><?php echo "$Email"; ?></th>
                            <th><?php echo "$Authority"; ?></th>
                            <th style="width:10%"><?php echo "$RangeNo"; ?></th>
                            </tr>
                               <tr>
                            <th>BankAc</th>
                            <th>BankName</th>
                            <th>Branch Branch</th>
                            <th>IFSC</th>
                            <th>MICR</th>
                            <th style="width:10%">Action</th>
                            </tr>
                               <tr>
                            <th><?php echo "$BankAc"; ?></th>
                            <th><?php echo "$BankName"; ?></th>
                            <th><?php echo "$BankBranch"; ?></th>
                            <th><?php echo "$IFSC"; ?></th>
                            <th><?php echo "$MICR"; ?></th>
                            <th style="width:10%"><button class="w3-btn w3-blue">Next</button></th>
                            </tr>
                        </table>



<?php

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





//end
}
?>