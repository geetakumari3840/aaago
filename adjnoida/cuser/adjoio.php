<?php
session_start();
include "incc/connect.php";
if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {
?>
<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <div class="w3-purple">
      <h3 class="w3-center">LIST OF PENDING ADJUDICATION CASES COMMISSIONER'S COMPETENCY</h3>
    </div>

    <form class="w3-container" name="adjform" action="" method="post">

      <div class="w3-row-padding w3-small">
            <div class="w3-third">
                  <div class="w3-half">
                  <lable>Name of the party</lable>
                  <input class="w3-input w3-border w3-round" type="text" name="nameofparty" placeholder="" requir ed> 
                 </div>
                 <div class="w3-half">
                 <lable>Address of the Party</lable>
                 <input class="w3-input w3-border w3-round" type="text" name="address" placeholder="" requi red>
                  </div>
            </div>
            <div class="w3-third">
                    <div class="w3-third">
                    <lable>File Number</lable>
                    <input class="w3-input w3-border w3-round" type="text" name="fileno" placeholder="" requ ired>
                    </div>
                    <div class="w3-third">
                    <lable>File Year</lable>
                    <input class="w3-input w3-border w3-round" type="text" name="fileyear" placeholder="" requi red>
                    </div>
                    <div class="w3-third">
                    <lable>SCN / Denovo date</lable>
                    <input class="w3-input  w3-text-grey  w3-border w3-round w3-tiny" dateformat="d m y" name="ldscn" type="date" re quired>
                    </div>
            </div>
         
            <div class="w3-third">
                <lable>Issue Involved</lable>    
                <input class="w3-input  w3-border w3-round" type="text" name="issue" placeholder="" requi red>
            </div>
      </div>


	<div class="w3-row-padding w3-small" style="margin:6px;">
        <div class="w3-third">
         <div class="w3-third">
                 <lable>Duty (Rs.in lacs)</lable>
                 <input class="w3-input  w3-border w3-round" type="text" name="amount" placeholder="" req uired>
         </div>
          <div class="w3-third">
                  <lable>category</lable>
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="category" type="number" req uired>
                  <option value="" disabled selected>&nbsp;Category</option>
                  <option value="1">Central Excise</option>
                  <option value="1">Service Tax</option>
                  <option value="2">CGST</option>
                 </select>
         </div>
          <div class="w3-third">
                  <lable>Competancy</lable>
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="competancy" type="number" requ ired>
                    <option value="" disabled selected>&nbsp;competancy</option>
                    <option value="1">Commissioner</option>
                    <option value="2">A.D.C. or J.C.</option>
                    <option value="3">D.C. or A.C.</option>
                  </select>
         </div>
        </div>

        <div class="w3-third">
        <div class="w3-third">
          <lable>Division</lable>
          <select class="w3-select w3-text-grey w3-border w3-round" name="division" type="number" requ ired>
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
          <lable>Range</lable>
          <select class="w3-select w3-text-grey w3-border w3-round" name="ranges" type="text" requ ired>
           
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
        <lable>Registration No.</lable>
        <input class="w3-input w3-border w3-round" type="text" name="reg_no" placeholder="" requi red>
        </div>
        </div>
        <div class="w3-third">
        <lable>Reason for Pendency</lable>
        <input class="w3-input  w3-border w3-round" type="text" name="remark" placeholder="" requi red>
        </div>

    </div>    
	<div class="w3-small " style="margin:6px;">
		<button class="w3-button w3-amber w3-round" type="submit1" name="submit1" >Insert</button>
		<button class="w3-button w3-amber w3-round" type="submit2" name="submit2" >Delete</button>
		<button class="w3-button w3-amber w3-round" type="submit3" name="submit3" >Update</button>
		<button class="w3-button w3-amber w3-round" type="submit4" name="submit4" >Display</button>
		<button class="w3-button w3-amber w3-round" type="submit5" name="submit5" >Search</button>
	</div>

    </form>
	</div>
 <?php

       if(isset($_POST["submit1"]))
      {
      $reg_no=$_POST['reg_no'];
      $nameofparty=$_POST['nameofparty'];
     // echo $reg_no;
     // echo $nameofparty;
       if ($reg_no =="" || $nameofparty =="")  {
       ?>
 			
<div class="w3-panel w3-red w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-red w3-large w3-display-topright">&times;</span>
  <h3>Some filed are Blank</h3>
</div> 
<?php 
        }
       
       else {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO adjnoida_oio SET reg_no='$_POST[reg_no]', nameofparty='$_POST[nameofparty]', address='$_POST[address]', 
         fileno='$_POST[fileno]',amount='$_POST[amount]', issue='$_POST[issue]', category='$_POST[category]',supdt='$_POST[supdt]',
         competancy='$_POST[competancy]',fileyear='$_POST[fileyear]',division='$_POST[division]',ldscn='$_POST[ldscn]',ranges='$_POST[ranges]'";
        $conn->exec($sql);
      // echo "New record created successfully";
        $sql = "SELECT * FROM adjnoida_oio WHERE slno=(SELECT MAX(slno) FROM `adjnoida_oio`);";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
   
   ?>

   <br>
    <table class="w3-table-all w3-small ">
    <thead><tr class="w3-light-grey w3-hover-red">
      <th>Sl.No.</th>      
      <th><pe>Name of the Party / <br/> Address</pre></th>
      <th>File No.</th>
      <th>Date of issue <br/>of SCN</th>
      <th>Duty Amount</th>
      <th>Category</th>
      <th>Compentancy</th>
      <th>Division/ <br/>Range</th>
      <th>Superintendent</th>
      <th>Days</th>
    </tr></thead>
       <?php while ($r = $q->fetch()): ?>
    <tr class="w3-hover-green">
      <td><?php echo htmlspecialchars($r['slno']) ?></td> 
      <td><?php echo htmlspecialchars($r['nameofparty']) ?>,<?php echo htmlspecialchars($r['address']) ?></td>
      <td><?php echo htmlspecialchars($r['fileno'])?>/<?php echo htmlspecialchars($r['fileyear']) ?></td>
      <td><?php echo  date('d-m-Y', strtotime($r['ldscn']))?></td>
      <td><?php echo htmlspecialchars($r['amount']) ?></td>
      <td><?php echo htmlspecialchars($r['category']) ?></td>
      <td><?php echo htmlspecialchars($r['competancy']) ?></td>
      <td><?php echo htmlspecialchars($r['division'])?>/<?php echo htmlspecialchars($r['ranges']) ?></td>
      <td><?php echo htmlspecialchars($r['supdt']) ?></td>
      <td><?php echo htmlspecialchars($r['issue']) ?></td>
    </tr>
            <?php endwhile; ?>
  </table>
  <?php
   }
      }
      //display
if(isset($_POST["submit4"]))
      {
        $sql = "SELECT * FROM adjnoida_oio ";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
   
   ?>
   <br><br>
    <table class="w3-table-all w3-small">
    <thead><tr class="w3-light-grey w3-hover-red">
      <th class="w3-center">Sl.No.</th>      
      <th>Name of the Party <br> / Address</th>
      <th class="w3-center">File No.</th>
      <th class="w3-center">Date of issue <br>  of SCN</th>
      <th class="w3-center">Duty Amount</th>
      <th class="w3-center">Category</th>
      <th class="w3-center">Compentancy</th>
      <th class="w3-center">Division <br> /Range</th>
      <th class="w3-center">Superintendent</th>
      <th class="w3-center">Days</th>
    </tr></thead>
       <?php while ($r = $q->fetch()): ?>
    <tr class="w3-hover-green">
      <td class="w3-center"><?php echo htmlspecialchars($r['slno']) ?></td> 
      <td><?php echo htmlspecialchars($r['nameofparty']) ?>,<?php echo htmlspecialchars($r['address']) ?></td>
      <td class="w3-center"><?php echo htmlspecialchars($r['fileno'])?>/<?php echo htmlspecialchars($r['fileyear']) ?></td>
      <td class="w3-center"><?php echo  date('d-m-Y', strtotime($r['ldscn']))?></td>
      <td class="w3-center"><?php echo htmlspecialchars($r['amount']) ?></td>
      <td class="w3-center">
<?php 
      
switch ($r['category']) {
    case "1":
        echo "Central Excise";
        break;
    case "2":
        echo "Service Tax";
        break;
    case "3":
        echo "CGST";
        break;
    default:
        echo "Blank Field";
}
      
      ?></td>
      <td class="w3-center">
      
     <?php 
     
     switch ($r['competancy']) {
    case "1":
        echo "Commissioner";
        break;
    case "2":
        echo "ADC / JC";
        break;
    case "3":
        echo "DC / AC";
        break;
    default:
        echo "Blank Field"; } ?></td>
      <td class="w3-center"><?php echo htmlspecialchars($r['division'])?>/<?php echo htmlspecialchars($r['ranges']) ?></td>
      <td class="w3-center"><?php echo htmlspecialchars($r['supdt']) ?></td>
      <td class="w3-center"><?php 
      
$OldDate = strtotime($r['ldscn']);
$NewDate = date('M j, Y', $OldDate);
$diff = date_diff(date_create($NewDate),date_create(date("M j, Y")));?>

        <?php 



 $t = $diff->format('%a');
 $ye = $diff->format('%y');
 $mo = $diff->format('%m');
 $da = $diff->format('%d');
 

// year & years farmulla

if ($ye === "0" ) {
	
	echo '';
}
elseif ($ye === "1") {
	echo $ye;echo ' year ';
}
else {
	echo $ye;echo ' years ';
	}
//end years


// month & months farmulla

if ($mo === "0" ) {
	
	echo '';
}
elseif ($mo === "1") {
	echo $mo;echo ' month ';
}
else {
	echo $mo;echo ' months ';
	}
//end months

// day & days farmulla

if ($da === "0" ) {
	
	echo '';echo '<br>';
}
elseif ($da === "1") {
	echo $da;echo ' day';
}
else {
	echo $da;echo ' days';
	}
//end days
    
        ?>
    </tr>
            <?php endwhile; ?>
            
  </table>
  <?php
   
      }
     
    
?>



</div>
</body>
</html>
<?php
}
else {
header ("location: /adjnoida/index.php");
}
?> 