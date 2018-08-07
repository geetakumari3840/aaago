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
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow  w3-purple"  href="searchr.php" style="width:16.666%;">Search</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow"  href="insertr.php" style="width:16.666%;">Insert Records</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow"  href="editr.php" style="width:16.666%;">Edit Records</a>
    <a class="w3-bar-item w3-button w3-hover-text-purple w3-hover-black w3-hover-shadow" href="deleter.php" style="width:16.666%;">Delete Records</a>
  </div>
<!-- Insert REcordss-->
 <div style="padding-top:7px;" class="w3-card-4">

    <form cl ass="w3-container" name="adjform" action="" method="post">

		<div class="w3-row-padding w3-small">
        <div class="w3-third">
          <div class="w3-third">
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="category" type="number" >
                  <option value="" disabled selected>&nbsp;Category</option>
                  <option value="1">Central Excise</option>
                  <option value="2">Service Tax</option>
                  <option value="3">CGST</option>
                 </select>
         </div>
          <div class="w3-third">
                 <select class="w3-select w3-text-grey  w3-border w3-round" name="competancy" type="number" >
                    <option value="" disabled selected>&nbsp;competancy</option>
                    <option value="1">Commissioner</option>
                    <option value="2">A.D.C. or J.C.</option>
                    <option value="3">D.C. or A.C.</option>
                  </select>
         </div>
		  <div class="w3-third">
                
                  <select class="w3-select w3-text-grey  w3-border w3-round" name="supdt" type="number" >
                    <option value="" disabled selected>&nbsp;Superintendent</option>
                    <option value="1">Manmohan Kullar</option>
                    <option value="2">J P Singh</option>
                    <option value="3">R. K. Pant</option>
                  </select>
         </div>
        </div>
        <div class="w3-third">
			<div class="w3-third">

            <input class="w3-input w3-border w3-round" type="text" name="nameofparty" placeholder="Name of the party" > 
			</div>
			<div class="w3-third">
				
			<input class="w3-input w3-border w3-round" type="text" name="reg_no" placeholder="Registration No." >
			</div>	
			<div class="w3-third">
			
            <input class="w3-input w3-border w3-round" type="text" name="fileno" placeholder="File Number" >
			</div>
		</div>
		<div class="w3-third">
			<div class="w3-third">
                        <input class="w3-input  w3-border w3-round" type="text" name="amount" placeholder="Duty (Rs.in lacs" >
			</div>	
			
			<div class="w3-third">
         
          <select class="w3-select w3-text-grey w3-border w3-round" name="division" type="number" >
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
           <p class="w3-center" style="margin:5px 15px 5px 35px;padding:0px;">
           <button  class="w3-button w3-blue w3-round we-bar w3-card-4 w3-center" type="search1" name="search1">Search</button></p>
           </div>
     </div>
   </form>
 </div>
   
<?php

       if(isset($_POST["search1"]))
      {
        $sql = "SELECT * FROM adjnoida_dscn WHERE division IN ('$_POST[division]') OR category IN ('$_POST[category]')";
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