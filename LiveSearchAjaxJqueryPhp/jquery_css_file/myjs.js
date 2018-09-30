$(document).ready(function(){

$('#live').keyup(function(){


        
			var txt = $(this).val();

            $.ajax ({
                url:"fetch.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
	});
});