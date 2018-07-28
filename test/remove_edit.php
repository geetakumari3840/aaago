<!DOCTYPE html>
<html>
	<head>
		<title>Change & Remove Image</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</head>
<body>
<br/><br/>
<div class="container" style="width:900px;">
<h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>
<br/>
<div align="right">
<p>asfsa</p>
</div>
<br/>
<div id="image_data">
 
</div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
	fetch_data();
	function fetch_data()
	{
		var action = "fetch";
		$.ajax({ 
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function(data)
			{
				$('#image_data').html(data);
			}
		})
	}
});
</script>