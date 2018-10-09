
 <?php
  /*if(isset($_POST["Bank_id"])) {

    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $conn = mysqli_connect($servername, $username, $password, $dbase);
    
    $BankAc = $_POST['BankAc'];
    $BankName = $_POST['BankName'];
    $BankBranch = $_POST['BankBranch'];
    $IFSC = $_POST['IFSC'];
    $MICR = $_POST['MICR'];
    $ID = $_POST['id'];
*/
try {
$connect = new PDO('mysql:host=localhost;dbname=2027387_salary', '2027387_salary', 'b4513.4513z');
    
//$SlNo=$_POST["Bank_id"];
$SlNo='327';
echo $SlNo;
$query = "SELECT * FROM assesseemaster WHERE SlNo = $SlNo";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
// set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


//echo "fsdfsffsdfdsfsfsafsafs dsf sdf saf sdf sad fsf asf ";

foreach($result as $row)
{
   
 $output['BankAc'] = $row["BankAc"];
 $output['BankBranch'] = $row["BankBranch"];
 $output['IFSC'] = $row["IFSC"];
 $output['MICR'] = $row["MICR"];


 $output['BankName'] = $row["BankName"];
 $output['BankAc'] = $row["BankAc"];
 $output['BankBranch'] = $row["BankBranch"];
 $output['IFSC'] = $row["IFSC"];
 $output['MICR'] = $row["MICR"];

}
 

echo json_encode($output);
/*
echo "<br>";
 echo  $output['BankName'];

$sql = "INSERT INTO assesseemaster (BankAc, BankName, BankBranch, IFSC, MICR ) VALUES 
		('$BankAc', '$BankName', '$BankBranch', '$IFSC', '$MICR') WHERE SlNo='$ID'";
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





//end */
} 
?>