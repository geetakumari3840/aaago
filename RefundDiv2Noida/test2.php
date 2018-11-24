<!DOCTYPE html>
<html lang="en"> 
<head>
     <title>Refund Branch, CGST Div-II, Noida</title>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- offline  -->
    <script src="pfiles/jquery.min.js"></script>  
    <link rel="stylesheet" href="pfiles/bootstrap.min.css" />
    <link rel="stylesheet" href="pfiles/mycss.css" />   
    <script src="pfiles/bootstrap.min.js"></script> 
    <script src="pfiles/myjs.js"></script>
    <script src="pfiles/printThis.js"></script>    
</head>  
<body> 
<div id="print1">i am ajay kumar</div> 
<button id="kk">Print</button>
</body>
</html>
<script>
	
	$(document).ready(function(){

		$('#kk').on('click',function(e)
			{
				$('#print1').printThis();
			});
	});
</script>