<?php
session_start();
include "incc/connect.php";
if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {
?>
<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="incc/w3.css">
<body>
<?php 
 //include "incc/header.php";
 include "incc/cnavbar.php";
?>

<div class="w3-container">
  <h3 class="w3-center">Central Goods & Service Tax Commissionerate, Noida</h3>
  <h3 class="w3-center">(Adjudication Branch)</h3>
  <!-- <p class="w3-text-red w3-right">(Rs. in Lacs)</p> -->
 
  
  <div class="w3-card-4">
    <div class="w3-conta iner w3-blue">
      <h3 class="w3-center">DSCN pending for issuance for Commissioner Competency</h3>
    </div>

    <form class="w3-container" name="adjform" action="" method="post">

      <!--       <input class="w3-input" type="text" name="reg_no" placeholder="Registration No." required>-->
      <div class="w3-row-padding w3-small">
            <div class="w3-third">
                  <div class="w3-half">
                  <input class="w3-input" type="text" name="nameofparty" placeholder="Name of the party" required> 
                 </div>
                 <div class="w3-half">
                 <input class="w3-input" type="text" name="address" placeholder="Address of the Party" required>
                  </div>
            </div>
            <div class="w3-third">
                    <div class="w3-third">
                    <input class="w3-input" type="text" name="fileno" placeholder="File Number" required>
                    </div>
                    <div class="w3-third">
                    <input class="w3-input" type="text" name="fileyear" placeholder="File Year" required>
                    </div>
                    <div class="w3-third">
                    <input class="w3-input  w3-text-grey" type="date" name="ldscn" placeholder="Last date of issue of SCN" required>
                    </div>
            </div>
         
            <div class="w3-third">
                <input class="w3-input " type="text" name="issue" placeholder="Issue Involved" required>
            </div>
      </div>


  <div class="w3-row-padding w3-small">
        <div class="w3-third">
         <div class="w3-third">
                 <input class="w3-input " type="text" name="amount" placeholder="Duty (Rs.in lacs)" required>
         </div>
          <div class="w3-third">
                  <select class="w3-select w3-text-grey " name="category" type="number" required>
                  <option value="" disabled selected>&nbsp;Category</option>
                  <option value="1">Central Excise</option>
                  <option value="1">Service Tax</option>
                  <option value="2">CGST</option>
                 </select>
         </div>
          <div class="w3-third">
                  <select class="w3-select w3-text-grey " name="competancy" type="number" required>
                    <option value="" disabled selected>&nbsp;Competancy</option>
                    <option value="1">Commissioner</option>
                    <option value="2">A.D.C. or J.C.</option>
                    <option value="3">D.C. or A.C.</option>
                  </select>
         </div>
        </div>

        <div class="w3-third">
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="division" type="number" required>
            <option value="" disabled selected>&nbsp;Division</option>
            <option value="1">Division-I</option>
            <option value="2">Division-II</option>
            <option value="3">Division-III</option>
            <option value="4">Division-IV</option>
            <option value="5">Division-V</option>
            <option value="6">Division-VI</option>
            <option value="7">Division-VII</option>
          </select>
        </div>
        <div class="w3-third">
          <select class="w3-select w3-text-grey" name="ranges" type="number" required>
           
 <option value="" disabled selected>&nbsp;Range</option>
                    <option value="01">Range-1</option>
                    <option value="02">Range-2</option>
                    <option value="03">Range-3</option>
                    <option value="04">Range-4</option>
                    <option value="05">Range-5</option>
                    <option value="06">Range-6</option>
                    <option value="07">Range-7</option>
                    <option value="08">Range-8</option>
                    <option value="09">Range-9</option>
                    <option value="10">Range-10</option>
                    <option value="11">Range-11</option>
                    <option value="12">Range-12</option>
                    <option value="13">Range-13</option>
                    <option value="14">Range-14</option>
                    <option value="15">Range-15</option>
                    <option value="16">Range-16</option>
                    <option value="17">Range-17</option>
                    <option value="18">Range-18</option>
                    <option value="19">Range-19</option>
                    <option value="20">Range-20</option>
                    <option value="21">Range-21</option>
                    <option value="22">Range-22</option>
                    <option value="23">Range-23</option>
                    <option value="24">Range-24</option>
                    <option value="25">Range-25</option>
                    <option value="26">Range-26</option>
                    <option value="27">Range-27</option>
                    <option value="28">Range-28</option>
                    <option value="29">Range-29</option>
                    <option value="30">Range-30</option>
                    <option value="31">Range-31</option>
                    <option value="32">Range-32</option>
                    <option value="33">Range-33</option>
                    <option value="34">Range-34</option>
                    <option value="35">Range-35</option>
            
          </select>
        </div>
        <div class="w3-third">
        <input class="w3-input" type="text" name="reg_no" placeholder="Registration No." required>
<!--          <select class="w3-select w3-text-grey" name="supdt" type="text" required>
            <option value="" disabled selected>&nbsp;Superintendent</option>
            <option value="Shri Manmohan Kullar">Shri Manmohan Kullar</option>
            <option value="Shri J P Singh">Shri J P Singh</option>
            <option value="Shri R K Pant">Shri R K Pant</option>
          </select> -->
        </div>
        </div>
        <div class="w3-third">
        <input class="w3-input " type="text" name="remark" placeholder="Reason for Pendency" required>
        </div>

                

<button class="w3-button w3-blue w3-section  w3-round" type="text" name="submit1" >Insert</button>
<button class="w3-button w3-blue w3-section  w3-round" type="text" name="submit2" >Delete</button>
<button class="w3-button w3-blue w3-section  w3-round" type="text" name="submit3" >Update</button>
<button class="w3-button w3-blue w3-section  w3-round" type="text" name="submit4" >Display</button>
<button class="w3-button w3-blue w3-section  w3-round" type="text" name="submit5" >Search</button>
</div>

    </form>
 <?php

       if(isset($_POST["submit1"]))
      {
      $reg_no=$_POST['reg_no'];
      $nameofparty=$_POST['nameofparty'];
     // echo $reg_no;
     // echo $nameofparty;
       if ($reg_no =="" || $nameofparty =="") {
       
       echo "Username / Password both are Blank"; }
       
       else {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO adjnoida_dscn SET reg_no='$_POST[reg_no]', nameofparty='$_POST[nameofparty]', address='$_POST[address]', 
         fileno='$_POST[fileno]',amount='$_POST[amount]', issue='$_POST[issue]', category='$_POST[category]',supdt='$_POST[supdt]',
         competancy='$_POST[competancy]',fileyear='$_POST[fileyear]',division='$_POST[division]',ldscn='$_POST[ldscn]',ranges='$_POST[ranges]'";
        $conn->exec($sql);
      // echo "New record created successfully";
                    $sql = "SELECT * FROM table1 ";
                    $q = $conn->query($sql);
                    $q->setFetchMode(PDO::FETCH_ASSOC);
   
   
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
      <td><?php echo htmlspecialchars($r['nameofparty']) ?></td>
      <td><?php echo  date('d-m-Y', strtotime($r['address']))?></td>
      <td><?php echo htmlspecialchars($r['issue']) ?></td>
    </tr>
            <?php endwhile; ?>
  </table>
  
      }
    ?>






</body>
</html>
<?php
} else {
header ("location: /adjnoida/index.php");
}
?> 