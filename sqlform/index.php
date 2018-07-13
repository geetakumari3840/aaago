<?php
session_start();
//include "incc/connect.php";
 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"phpmysqli");
//if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {
?>
<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="incc/w3.css">
<body>


<div class="w3-container">
  <h3 class="w3-center">Central Goods & Service Tax Commissionerate, Noida</h3>
  <h3 class="w3-center">(Adjudication Branch)</h3>
  <!-- <p class="w3-text-red w3-right">(Rs. in Lacs)</p> -->
  <br>
  
  <div class="w3-card-4">
    <div class="w3-conta iner w3-blue">
      <h3 class="w3-center">DSCN pending for issuance for Commissioner Competency</h3>
    </div>

    <form class="w3-container" name="form1" actuib="" method="post">

      <div class="w3-row-padding">
            <div class="w3-third">
              <input class="w3-input" type="text" name="t1" placeholder="Registration No." >
            </div>
            <div class="w3-third">
              <input class="w3-input" type="text" name="t2" placeholder="Name of the party" >
            </div>
            <div class="w3-third">
              <input class="w3-input" type="text" placeholder="Address of the Party" >
            </div>
      </div>
 <br>
  <div class="w3-row-padding">
        <div class="w3-third">
         <input class="w3-input" type="text" placeholder="File Number" >
         
         
        </div>
        <div class="w3-third">
          <input class="w3-input " type="text" placeholder="Duty Amount (Rs. in lacs)">
         
        </div>
        <div class="w3-third">
            <input class="w3-input " type="text" placeholder="Issue Involved" >
         </div>
        </div>
     
  <br>   
  <div class="w3-row-padding">
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="option">
          <option value="" disabled selected>&nbsp;Category</option>
          <option value="1">Central Excise</option>
          <option value="1">Service Tax</option>
          <option value="2">CGST</option>
         </select>
        </div>
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="option">
            <option value="" disabled selected>&nbsp;Competancy</option>
            <option value="1">Commissioner</option>
            <option value="2">A.D.C. or J.C.</option>
            <option value="3">D.C. or A.C.</option>
          </select>
        </div>
        <div class="w3-third">
         <input class="w3-input  w3-text-grey" type="date" placeholder="Last date of issue of SCN">
        </div>
        </div>
<br>
  <div class="w3-row-padding">
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="option">
            <option value="" disabled selected>&nbsp;Division</option>
            <option value="1">Division-I</option>
            <option value="2">Division-II</option>
            <option value="3">Division-III</option>
            <option value="3">Division-IV</option>
            <option value="3">Division-V</option>
            <option value="3">Division-VI</option>
            <option value="3">Division-VII</option>
          </select>
        </div>
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="option">
           
            <option value="" disabled selected>&nbsp;Range</option>
            <?php
            for ($i=1; $i<=35; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo 'Range-';?><?php echo $i;?></option>
        <?php
    }
           ?>
            
          </select>
        </div>
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="option">
            <option value="" disabled selected>&nbsp;Superintendent</option>
            <option value="1">Shri Manmohan Kullar</option>
            <option value="2">Shri J P Singh</option>
            <option value="3">Shri R K Pant</option>
          </select>
        </div>
      </div>

<button class="w3-button w3-blue w3-section w3-right w3-padding w3-xlarge" name="submt1" type="submit">Insert</button>
<button class="w3-button w3-blue w3-section w3-right w3-padding w3-xlarge" name="submt2" type="submit">Delete</button>
<button class="w3-button w3-blue w3-section w3-right w3-padding w3-xlarge" name="submt3" type="submit">Update</button>
<button class="w3-button w3-blue w3-section w3-right w3-padding w3-xlarge" name="submt4" type="submit">Display</button>
<button class="w3-button w3-blue w3-section w3-right w3-padding w3-xlarge" name="submt5" type="submit">Search</button>
    </form>
    <?php
      
      if(isset($_POST["submit1"]))
      {
        
        mysqli_query($link,"insert into table1 values ('$_post[t1],'$_post[t1]')");
      }
      
      if(isset($_POST["submit2"])){
        
        mysqli_query($link,"delete into table1 where name='$_post[t1]");
      }
      if(isset($_POST["submit3"])){
        
        mysqli_query($link,"update into table1 set name='$_post[t1]' where name='$_post[t1]");
      }
      if(isset($_POST["submit4"])){
        
        $res= mysqli_query($link,"select * from table1");
        echo "<table board=1>";
          echo "<tr>";
          echo "<th>"; echo "name";   echo "</th>";
          echo "<th>"; echo "city";   echo "</th>";
          echo "</tr>";
        while($raw=mysqli_fetch_arrary($res)) {
          echo "<tr>";
          echo "<td>"; echo @row["name"];   echo "</td>";
          echo "<td>"; echo @row["city"];   echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
      }
     if(isset($_POST["submit5"])){
        
        $res= mysqli_query($link,"select * from table1 where name='$_post[t1]')");
       echo "<table border=1>";
          echo "<tr>";
          echo "<th>"; echo "name";   echo "</th>";
          echo "<th>"; echo "city";   echo "</th>";
          echo "</tr>";
        while($raw=mysqli_fetch_arrary($res)) {
          echo "<tr>";
          echo "<td>"; echo @row["name"];   echo "</td>";
          echo "<td>"; echo @row["city"];   echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
      }


    ?>
  </div>
</div>


</body>


</html>
