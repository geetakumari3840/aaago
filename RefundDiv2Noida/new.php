<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
	  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <!-- offline  
        <script src="pfiles/jquery.min.js"></script>  
        <link rel="stylesheet" href="pfiles/bootstrap.min.css" />  
        <script src="pfiles/bootstrap.min.js"></script> 
            
        -->
</head>
<body>
<br>
<div align="center" >
	
		<input type="text" list="browers" name="live" id="live">
		<datalist id="browers">
			<div id="result"></div>			
		</datalist>

		
</div>
<div id="results"></div>
<br>
<input type="text" list="dd" name="name">
<datalist id="dd">
	<div id="result"></div>

	


</datalist>
</body>
</html>
<script>

$(document).ready(function(){

	$('#live').focus(function(event){
		event.preventDefault();
	var txt = $(this).val();
		
		$.ajax ({
			 url:"select_list.php",
			 method:"post",
			//data:{search:txt),
			data:{search:txt},
			dataType:"text",
			success:function(data)
			{
				$('#result').html(data);
			}

		});

	});

	$('.live').change(function(event){
		event.preventDefault();
		var txt = $(this).val();
		
		$.ajax ({
			 url:"fetch1.php",
			 method:"post",
			//data:{search:txt),
			data:{search:txt},
			dataType:"text",
			success:function(data)
			{
				$('#results').html(data);
			}

		});

	});

});
</script>