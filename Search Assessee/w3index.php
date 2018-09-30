
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.css">
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>
<body>

<form>
  <span class="w3-red w3-large">Search</span>
  <input type="text" name="users" onchange="showUser(this.value)"/>
 <!-- 
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="ajay">ajay</option>
<option value="2">geeta</option>
<option value="tanya">tanya</option>
<option value="pari">pari</option>
</select> -->
</form>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>
