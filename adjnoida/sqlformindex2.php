<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="inc/w3.css">
<body>
 <?php
        $servername = "fdb14.biz.nf";
        $username = "2027387_salary";
        $password = "b4513.4513z";
        $myDB = "2027387_salary";
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT * FROM table1 ";
                    $q = $conn->query($sql);
                    $q->setFetchMode(PDO::FETCH_ASSOC);
                        } catch (PDOException $e) {
                            die("Could not connect to the database $dbname :" . $e->getMessage());
                                                        }
   ?>

<table class="w3-table-all">
    <thead><tr class="w3-light-grey w3-hover-red">
      <th>Full Name</th>
      <th>Date of Birth</th>
      <th>City</th>
    </tr></thead>
       <?php while ($r = $q->fetch()): ?>
    <tr class="w3-hover-green">
      <td><?php echo htmlspecialchars($r['name']) ?></td>
      <td><?php echo  date('d-m-Y', strtotime($r['bob']))?></td>
      <td><?php echo htmlspecialchars($r['city']) ?></td>
    </tr>
            <?php endwhile; ?>
  </table>
  

</body>
</html>