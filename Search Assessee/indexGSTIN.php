<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<h1 class="w3-text-red w3-center">SEARCH ASSESSEE AUTHORITY</h1>
<form class="w3-center" method="post" action="" name="GstinForm">
	<input type="test" name="gstin" placeholder="GSTIN Number">
	<!-- <input type="test" name="pan" placeholder="PAN Number">
	<input type="test" name="Name" placeholder="Name of Assessee"> -->
	<button class="w3-btn w3-amber w3-round" type="search1" name="search1">Enter</button>
</form>
<?php
$servername = "localhost";
$username = "2027387_salary";
$password = "b4513.4513z";
$myDB = "refunddivii";
$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST["search1"]))
      {
        $search=$_POST["gstin"];
        $sql = "SELECT * FROM assesseemaster WHERE GSTIN LIKE '%".$search."%'";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
?>
<table class='w3-table-all w3-small'>
	<thead>
		<tr class='w3-light-grey w3-hover-red'>
			<th>Sl.No.</th>
			<th>GSTIN No.</th>
			<th>GSTIN Name</th>
			<th>Category</th>
			<th>Authority</th>
		</tr>
	</thead>
		<?php while ($r = $q->fetch()): ?>
			<tr class='w3-hover-green'>
				
				<td><?php echo htmlspecialchars($r['SlNo'])?></td>
				<td><?php echo htmlspecialchars($r['GSTIN'])?></td>
				<td><?php echo htmlspecialchars($r['NameOfParty'])?></td>
				<td><?php 
                                    switch ($r['Category']) {
                                    case "1":
                                        echo "Above 1.5 Crores";
                                        break;
                                    case "2":
                                        echo "Below 1.5 Crores";
                                        break;
                                    default:
                                        echo "Blank Field"; }
                 ?> </td>
				<td><?php 
                                    switch ($r['Authority']) {
                                    case "1":
                                        echo "Center";
                                        break;
                                    case "2":
                                        echo "State";
                                        break;
                                    default:
                                        echo "Blank Field"; }
                 ?> </td>
			</tr>
		<?php endwhile; ?>


<?php
}
?>
</table>
</body>
</html>