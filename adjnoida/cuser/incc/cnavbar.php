<div class="w3-bar w3-yellow w3-card-4">
  <a href="/adjnoida/index.php" class="w3-bar-item w3-button">Home</a>
  <a href="dscn.php" class="w3-bar-item w3-button w3-hide-small">DSCN</a>
  <a href="adjoio.php" class="w3-bar-item w3-button w3-hide-small">Pending Adjudication</a>
  <a href="callbook.php" class="w3-bar-item w3-button w3-hide-small">Call Book</a>
  <a href="incc/lagout.php" class="w3-bar-item w3-button w3-hide-small w3-right">Lagout</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right">Change Passward </a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-red w3-hide w3-hide-large w3-hide-medium">
  <a href="dscn.php" class="w3-bar-item w3-button">DSCN</a>
  <a href="adjoio.php" class="w3-bar-item w3-button">Pending Adjudication</a>
  <a href="callbook.php" class="w3-bar-item w3-button">Call Book</a>
  <a href="#" class="w3-bar-item w3-button">Change Passward</a>
  <a href="incc/lagout.php" class="w3-bar-item w3-button">Lagout</a>
</div>
<script>
function myFunction() 
{
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>