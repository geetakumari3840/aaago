$(document).ready(function(){

$('th').addClass('w3-red');
$('#live').keyup(function(){


        
			var txt = $(this).val();
            if (txt !='') {
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
        }
        else
        {
            
        }
	});
});