<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="inc/w3.css">
<body>
<?php
date_default_timezone_set('Asia/Calcutta'); 
echo date('d-m-Y H:i:s'); // time in India

$servername = "fdb14.biz.nf";
$username = "2027387_salary";
$password = "b4513.4513z";
$myDB = "2027387_salary";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
<form name="form1" action="" method="post">
<table>
<tr>
<td>Enter Name</td>
<td><input type="text" name="t1"></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input type="date" name="d1"></td>
</tr>
<tr>
<td>Enter City</td>
<td><input type="text" name="t2"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit1" value="Insert"></td>
<td colspan="2" align="center"><input type="submit" name="submit2" value="Delete"></td>
<td colspan="2" align="center"><input type="submit" name="submit3" value="Update"></td>
<td colspan="2" align="center"><input type="submit" name="submit4" value="Display"></td>
<td colspan="2" align="center"><input type="submit" name="submit5" value="Search"></td>
</tr>

</table>
</form>
<?php
      if(isset($_POST["submit1"]))
      {
      try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO table1 VALUES ('$_POST[t1]','$_POST[d1]','$_POST[t2]')";
        $conn->exec($sql);
   echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


      }

      
      
      if(isset($_POST["submit2"])){
              try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM table1 WHERE name='$_POST[t1]'";
        $conn->exec($sql);
   echo "One record deleted successfully";
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    }
     //   mysqli_query($link,"delete into table1 where name='$_post[t1]");
      
      if(isset($_POST["submit3"])){
        try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE  table1 SET name='$_POST[t2]' WHERE name='$_POST[t1]'";
        $conn->exec($sql);
   echo "Update record successfully";
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
      //  mysqli_query($link,"update into table1 set name='$_post[t1]' where name='$_post[t1]");
      }
      
      if(isset($_POST["submit4"])){

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>NAME</th><th>CITY</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
} 


   try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM table1");
		$stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
		}
catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
						}
$conn = null;
echo "</table>";


      }
      
      
     if(isset($_POST["submit5"])){
        

echo "<table style='border: solid 1px black;'>";
echo "<tr><th>NAME</th><th>CITY</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
} 


   try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM table1  WHERE name='$_POST[t1]'");
		$stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
		}
catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
						}
$conn = null;
echo "</table>";
}
 ?>


</body>
</html>