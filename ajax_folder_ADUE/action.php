<?php
//action.php
if(isset($_POST["action"]))
{
$servername = "localhost";
$username = "2027387_salary";
$password = "b4513.4513z";
$myDB = "testing";
$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if($_POST["action"] == "fetch")
 {
$sql="SELECT ID,picture,firstname,lastname FROM `tbl_images`";
        $qu = $conn->query($sql);
        $qu->setFetchMode(PDO::FETCH_ASSOC);

echo "<table>
<tr class='w3-red w3-card-4'>
<th width='10%'>ID</th>
<th width='20%'>Picture</th>
<th width='20%'>Firstname</th>
<th width='20%'>Lastname</th>
<th width='10%'>Age</th>
<th width='10%'>Edit / Update</th>
<th width='10%'>Delete</th>
</tr>";
while ($r = $qu->fetch()) {
    echo "<tr><td class='w3-card-4'>" . $r["ID"] . "</td>
    <td class='w3-card-4 '><img class='w3-card-4 w3-round-xxlarge zoom' src='data:image/jpeg;base64,".base64_encode($r["picture"] )."' height='70' width='65' /></td>
    <td class='w3-card-4'>" . $r['firstname'] . "</td>
    <td class='w3-card-4'>" . $r['lastname'] . "</td>
    <td class='w3-card-4'><p ></p></td>
    <td class='w3-card-4'><button name='update' 
    onclick='document.getElementById('id01').style.display='block''
    class='Update w3-btn w3-block w3-amber w3-round' id=".$r["ID"].">Edit / Update</button></td>
    <td class='w3-card-4'><button name='delete' class='delete w3-button w3-block w3-purple w3-round' id=".$r["ID"].">Delete Records</button> </td>
    </tr>";
}
echo "</table>";
}

//insert image

 if($_POST["action"] == "insert")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $sql = "INSERT INTO `tbl_images` (`firstname`, `lastname`, `picture`) 
  VALUES ('abc','def', ('$file'))";
  //$sql = "INSERT INTO tbl_images (picture) VALUES ('$file')";
  if($conn->exec($sql))
  {
   echo 'Image Inserted into Database';
  }
 }

//update image

 if($_POST["action"] == "update")
 {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $sql = "UPDATE tbl_images SET picture = '$file' WHERE ID = '".$_POST["image_id"]."'";
   if($conn->exec($sql))
  {
   echo 'Image Updated into Database';
  }
 }

//delete image

 if($_POST["action"] == "delete")
 {
  echo $_POST["image_id"];
  $sql = "DELETE FROM tbl_images WHERE ID = '".$_POST["image_id"]."'";
  $conn->exec($sql);
  $sql="SELECT MAX(ID) + 1 FROM tbl_images";
  $qu = $conn->query($sql);
        $qu->setFetchMode(PDO::FETCH_ASSOC);
    $r = $qu->fetch();
    $newid=$r["MAX(ID) + 1"];
  $sql = "ALTER TABLE tbl_images AUTO_INCREMENT = $newid;"; 
    $conn->exec($sql);
 if($conn->exec($sql))
  {
   echo 'Image Deleted from Database';
  }
 }
}
?>