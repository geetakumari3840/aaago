<?php
if(!empty($_GET['q']))
{
		$servername = "localhost";
		$username = "2027387_salary";
		$password = "b4513.4513z";
		$dbase  = "refunddivii";
		$conn = mysqli_connect($servername, $username, $password, $dbase);
		$q=$_GET['q'];
		$sql = "SELECT * FROM assesseemaster2 WHERE NameOfParty LIKE '%".$q."%'";
		$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0)
{
    $output .= '<h4 align="center">Search Result</h4>';
    $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                    <tr>
                    <th>Sl.No.</th>
                    <th>GSTIN</th>
                    <th>Name of Party</th>
                    <th>Category</th>
                    <th>Authority</th>
                    </tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
        <td>'.$row["SlNo"].'</td>
        <td>'.$row["GSTIN"].'</td>
        <td>'.$row["NameOfParty"].'</td>
        <td>'.$row["Category"].'</td>
        <td>'.$row["Authority"].'</td>
        </tr>
    ';
    }
    $output .= '</table></div>';
    echo $output;
}
else
{
    echo 'Data Not Found';
}
}
?>