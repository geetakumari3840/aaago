<?php session_start(); include "incc/connect.php";
        if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) { ?>
<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php include "incc/cnavbar.php"; ?>
<!-- DSCN Head Tabs -->
 <div class="w3-container">
    <h3 style="text-shadow:3px 3px 0 #111;margin:0px;padding:0px;" class="w3-text-green w3-xxlarge w3-center"><b>Central Goods & Service Tax Commissionerate, Noida</b></h3>
    <h3 style="margin:0px;padding:5px;" class="w3-center w3-text-red w3-large"><b>(DSCN pending for issuance for Commissioner Competency)</b></h3>
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-green" style="width:16.666%;" ><center>D. S. C. N. </center></button>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow" href="dscn.php" style="width:16.666%;">Display All</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow"  href="searchr.php" style="width:16.666%;">Search</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow w3-purple"  href="insertr.php" style="width:16.666%;">Insert Records</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow"  href="editr.php" style="width:16.666%;">Edit Records</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow" href="deleter.php" style="width:16.666%;">Delete Records</a>
  </div>
<!-- Insert REcordss-->
   <br>  
   <div class="w3-card-4">
   <br>
    <form class="w3-container" name="adjform" action="" method="post">
      <div class="w3-row-padding w3-small">
            <div class="w3-third">
                  <div class="w3-half">
                  <lable>Name of the party</lable>
                  <input class="w3-input w3-border w3-round" type="text" name="nameofparty" placeholder="" required> 
                 </div>
                 <div class="w3-half">
                 <lable>Address of the Party</lable>
                 <input class="w3-input w3-border w3-round" type="text" name="address" placeholder="" required>
                  </div>
            </div>
            <div class="w3-third">
                    <div class="w3-third">
                    <lable>File Number</lable>
                    <input class="w3-input w3-border w3-round" type="text" name="fileno" placeholder="" required>
                    </div>
                    <div class="w3-third">
                    <lable>File Year</lable>
                    <input class="w3-input w3-border w3-round" type="text" name="fileyear" placeholder="" required>
                    </div>
                    <div class="w3-third">
                    <lable>Last date SCN issue</lable>
                    <input class="w3-input  w3-text-grey  w3-border w3-round w3-tiny" dateformat="d m y" name="ldscn" type="date" required>
                    </div>
            </div>
         
            <div class="w3-third">
                <lable>Issue Involved</lable>    
                <input class="w3-input  w3-border w3-round" type="text" name="issue" placeholder="" required>
            </div>
      </div>


		<div class="w3-row-padding w3-small" style="margin:6px;">
        <div class="w3-third">
         <div class="w3-third">
                 <lable>Duty (Rs.in lacs)</lable>
                 <input class="w3-input  w3-border w3-round" type="text" name="amount" placeholder="" required>
         </div>
          <div class="w3-third">
                  <lable>category</lable>
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="category" type="number" required>
                  <option value="" disabled selected>&nbsp;Category</option>
                  <option value="1">Central Excise</option>
                  <option value="1">Service Tax</option>
                  <option value="2">CGST</option>
                 </select>
         </div>
          <div class="w3-third">
                  <lable>Competancy</lable>
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="competancy" type="number" required>
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
          <select class="w3-select w3-text-grey w3-border w3-round" name="division" type="number" required>
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
          <select class="w3-select w3-text-grey w3-border w3-round" name="ranges" type="text" required>
                    <option value="" disabled selected>&nbsp;Range</option><option value="01">Range-1</option><option value="02">Range-2</option><option value="03">Range-3</option>
                    <option value="04">Range-4</option><option value="05">Range-5</option><option value="06">Range-6</option><option value="07">Range-7</option><option value="08">Range-8</option><option value="09">Range-9</option>
                    <option value="10">Range-10</option><option value="11">Range-11</option><option value="12">Range-12</option><option value="13">Range-13</option><option value="14">Range-14</option><option value="15">Range-15</option>
                    <option value="16">Range-16</option><option value="17">Range-17</option><option value="18">Range-18</option><option value="19">Range-19</option><option value="20">Range-20</option><option value="21">Range-21</option>
                    <option value="22">Range-22</option><option value="23">Range-23</option><option value="24">Range-24</option><option value="25">Range-25</option><option value="26">Range-26</option><option value="27">Range-27</option>
                    <option value="28">Range-28</option><option value="29">Range-29</option><option value="30">Range-30</option><option value="31">Range-31</option><option value="32">Range-32</option><option value="33">Range-33</option>
                    <option value="34">Range-34</option><option value="35">Range-35</option>
          </select>
       </div>	
			<div class="w3-third">
			<lable>Registration No.</lable>
			<input class="w3-input w3-border w3-round" type="text" name="reg_no" placeholder="" required>
			</div>
			</div>
			<div class="w3-third">
			<lable>Reason for Pendency</lable>
			<input class="w3-input  w3-border w3-round" type="text" name="remark" placeholder="" required>
			</div>
		</div>
		<div class="w3-small">
			<button class="w3-button w3-blue w3-round  w3-card-4 w3-right" type="insert1" name="insert1" >Insert</button>
		</div>
    </form>
    <br>
   </div><br>
<!-- Insert command -->
   
<?php

       if(isset($_POST["insert1"]))
      {

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "INSERT INTO adjnoida_dscn SET reg_no='$_POST[reg_no]', nameofparty='$_POST[nameofparty]', address='$_POST[address]', 
         fileno='$_POST[fileno]',amount='$_POST[amount]', issue='$_POST[issue]', category='$_POST[category]',supdt='$_POST[supdt]',
         competancy='$_POST[competancy]',fileyear='$_POST[fileyear]',division='$_POST[division]',ldscn='$_POST[ldscn]',ranges='$_POST[ranges]'";
        $conn->exec($sql);

        $sql = "SELECT * FROM adjnoida_dscn WHERE slno=(SELECT MAX(slno) FROM `adjnoida_dscn`);";
        $q = $conn->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);

?>  

    <table class='w3-table-all w3-small'>
    <thead><tr class='w3-light-grey w3-hover-red'>
      <th>Sl.No.</th>      
      <th>Name of the Party / <br/> Address</th>
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
    <tr class='w3-hover-green'>
      <td><?php echo htmlspecialchars($r['slno'])?></td> 
      <td><?php echo htmlspecialchars($r['nameofparty']) ?>,<?php echo htmlspecialchars($r['address']) ?></td>
      <td><?php echo htmlspecialchars($r['fileno'])?>/<?php echo htmlspecialchars($r['fileyear']) ?></td>
      <td><?php echo date('d-m-Y', strtotime($r['ldscn']))?></td>
      <td><?php echo htmlspecialchars($r['amount']) ?></td>
      <td><?php echo htmlspecialchars($r['category']) ?></td>
      <td><?php echo htmlspecialchars($r['competancy']) ?></td>
      <td><?php echo htmlspecialchars($r['division'])?>/<?php echo htmlspecialchars($r['ranges']) ?></td>
      <td><?php echo htmlspecialchars($r['supdt']) ?></td>
      <td><?php echo htmlspecialchars($r['issue']) ?></td>
    </tr>
            <?php endwhile; ?>
  </table>
  </div>
</body>
</html>
<?php } ?>

<?php } else { header ("location: /adjnoida/index.php"); } ?> 