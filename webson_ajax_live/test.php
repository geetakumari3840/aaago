<!DOCTYPE html>
<html>
<head>
	<title>test</title>

	<script src="jquery-3.3.1.js"></script>
</head>
<body>

<input type="text" name="ajay" id="ajay" placeholder="geetA">
<input type="button" name="button" id="submit3" value="submit">

<div id="mtable" class="container" align="center">sfsf</div>


</body>
</html>

<script>
  $(document).ready(function(){
$('#ajay').val('');
    $('#submit3').click(function(){
    	var inputvalue = $('#ajay').val();
if (inputvalue !='')
{
    	 $('#mtable').text('ajay');
    	 $('#ajay').val('geeta kumari');
    	}
    	else
    	{
    		$('#mtable').text('OMMMMMMMMM');
    	 $('#ajay').val('OM Gautam');
    	}

    });



  });
</script>