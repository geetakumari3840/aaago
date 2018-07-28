<!DOCTYPE html>
<html>
	<head>
		<title>Change & Remove Image</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js">
	</script>
<body>
<br/><br/>
<div class="container" style="width:900px;">
	<h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>
	<br/>
	<div align="right">
		<button type="button" name="add" id="add" class="btn btn-sucess">ADD</button>
	</div>
	<br/> 
	<div id="image_data">
	 
	</div>
</div>
</body>
</html>

<div id="imageModal" class="modal-fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&time;</button>
			<h4 class="modal-title">Add Image</h4>
		</div>
		<div class="modal-body">
			<form id="image_form" method="post" enctype="multipart/form-data">
				<p><label>Select Image</label>
					<input type="file" name="image" id="image"/></p><br />
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="image_id" id="image_id" />
					<input type="submit" name="insert" id="insert" value="Insert"
					class="btn btn-info" />
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-defult" data-dismiss="modal">
			Close</button>
		</div>
	</div>
</div>
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
	$('#add').click(function() {
			$('#imageModal').modal('show');
			$('#image_form')[0].reset();
			$('.modal-title').text("Add Image");
			$('#image_id').val('');
			$('#action').val('insert');
			$('insert').val('Insert');
	});
	$('#image_form').submit(function(event){
		event.preventDefault();
		var image_name = $('#image').val();
		if (image_name =='') {
				alert("Please Select Image");
				return false;
		} else {
				var extension = $('image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension,['gif','jpeg','jpg','png']) == -1)
				{
					alert("Invalid Image File");
					$('#image').val('');
					return false;
				} else {
						$.ajax ({
							url:"action.php",
							method:"POST",
							data: new FormData(this),
							contentType:false,
							processData:false,
							success:function(data) 
							{
								alert(data);
								fetch_data();
								$('#image_form')[0].reset();
								$('#imageModal').val('hide');		

							}
						});
				}
		}

	});
	$(document).on('click','.Update', function () {
		$('#image_id').val($(this).attr("ID"));
		$('#action').val("update");
		$('.modal-title').text("Update Image");
		$('#insert').val("Update");
		$('#imageModal').modal("show");
	});
	
	$(document).on('click','.delete', function(){
		var image_id = $(this).attr("ID");
		var action = "delete";
		if (confirm("Are you sure you want to remore this image from database?"))
		{
			$.ajax ({
				url:"action.php",
				method:"post",
				data:{image_id:image_id, action:action},
				success:function(data)
				{
					alert(data);
					fetch_data();
				}
			})

		} else {
			return false;
		}
	});
});
</script>