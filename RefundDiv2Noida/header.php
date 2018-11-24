<?php
  if(isset($_SESSION["username"]))
    {
?>
<div class="row">
  <div class="col-lg-2">
    <h3 align="left">Welcome - <?php echo $_SESSION["username"];?>
  </div>
  <div  class="col-lg-8">
    <h3 align="center" class="text-danger">
    Central Goods &amp; Service Tax, Division-II, Noida</h3>
    <h2 align="center"  class="text-blue">Refund Branch</h2>
  </div>
  <div  align="right"  class="col-lg-2">
       <button type="button" class="btn btn-danger"  id="lagout">Lagout</button>
  </div>
</div>

<?php
    } 
  else
    {
    $yourURL="login1.php";
      echo ("<script>location.href='$yourURL'</script>");
    }
?>
 
 