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


//Display all  image & table

 if($_POST["action"] == "fetch")
 {
  $sql = "SELECT ID,picture FROM `tbl_images` ";
        $qu = $conn->query($sql);
        $qu->setFetchMode(PDO::FETCH_ASSOC);
  echo "<table class='table table-bordered table-striped'>  
    <tr>
     <th width='10%'>ID</th>
     <th width='70%'>Image</th>
     <th width='10%'>Change</th>
     <th width='10%'>Remove</th>
    </tr>";
	
    while ($r = $qu->fetch())
  {
   echo " <tr>
     <td>".$r["ID"]."</td>
     <td>
      <img src='data:image/jpeg;base64,".base64_encode($r["picture"] )."'height='60' width='75' class='img-thumbnail' />
     </td>
     <td><button type='button' name='update' class='btn btn-warning bt-xs update' id=".$r["ID"].">Change</button></td>
     <td><button type='button' name='delete' class='btn btn-danger bt-xs delete' id=".$r["ID"].">Remove</button></td>
    </tr>";
  }
  echo "</table>";
  echo $r["ID"];
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
