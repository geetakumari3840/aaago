
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
$con = mysqli_connect($servername, $username, $password, $dbase);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql= "SELECT * FROM assesseemaster WHERE NameOfParty LIKE '%".$q."%'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
        <th>Sl.No.</th>
        <th>GSTIN</th>
        <th>Name of Party</th>
        <th>Category</th>
        <th>Authority</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['SlNo'] . "</td>";
    echo "<td>" . $row['GSTIN'] . "</td>";
    echo "<td>" . $row['NameOfParty'] . "</td>";
    echo "<td>" . $row['Category'] . "</td>";
    echo "<td>" . $row['Authority'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html> 