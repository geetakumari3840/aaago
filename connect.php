
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-tiny">
<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cgst";
$x=1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT  GSTIN, 	TaxPayerName, SUM(IGST_Cash), SUM(IGST_IGST_Credit), SUM(IGST_CGST_Credit), SUM(IGST_SGST_Credit), SUM(IGST_Total), SUM(CGST_cash), SUM(CGST_IGST_Credit), SUM(CGST_CGST_Credit), SUM(CGST_Total), SUM(SGST_cash), SUM(SGST_IGST_Credit), SUM(SGST_SGST_Credit), SUM(SGST_Total), SUM(Cess_Cash), SUM(Cess_Credit), SUM(Cess_Total)
FROM form3b group by GSTIN";
$result = $conn->query($sql);
echo "<div class='w3-responsive'><h1><u><b>CENTRAL GOODS & SERVICE TAX RANGE-III, DIVISION-I, GHAZIABAD</u></b></h1><br><br><table  class='w3-table-all'><tr  class='w3-red'><th>Sl.No.</th><th>GSTIN</th><th style='text-align:left;'>Name of the Assessee</th><th>IGST_Cash</th><th>IGST<br> IGST_Credit</th><th>IGST<br>CGST_Credit</th><th>IGST<br>SGST_Credit</th><th>IGST_Total</th><th>CGST_cash</th><th>CGST<br>IGST_Credit</th><th>CGST<br>CGST_Credit</th><th>CGST_Total</th><th>SGST_cash</th><th>SGST<br>IGST_Credit</th><th>SGST<br>SGST_Credit</th><th>SGST_Total</th><th>Cess_Cash</th><th>Cess_Credit</th><th>Cess_Total</th></tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='w3-hover-green'>
        <th>".$x. "</th><th>" . $row["GSTIN"]. "</th><th  style='width:250px;text-align:left;'>" 
        . $row["TaxPayerName"]. "</th><th>".$row["SUM(IGST_Cash)"]."</th><th>".$row["SUM(IGST_IGST_Credit)"]."</th><th>".$row["SUM(IGST_CGST_Credit)"]."</th><th>".$row["SUM(IGST_SGST_Credit)"]."</th><th>".$row["SUM(IGST_Total)"]."</th><th>".$row["SUM(CGST_cash)"]."</th><th>".$row["SUM(CGST_IGST_Credit)"]."</th><th>".$row["SUM(CGST_CGST_Credit)"]."</th><th>".$row["SUM(CGST_Total)"]."</th><th>".$row["SUM(SGST_cash)"]."</th><th>".$row["SUM(SGST_IGST_Credit)"]."</th><th>".$row["SUM(SGST_SGST_Credit)"]."</th><th>".$row["SUM(SGST_Total)"]."</th><th>".$row["SUM(Cess_Cash)"]."</th><th>".$row["SUM(Cess_Credit)"]."</th><th>".$row["SUM(Cess_Total)"]."</th>
        </tr>";
        $x=$x+1;
    } 
    echo "</table></div>";
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</center>
</body>
</html>