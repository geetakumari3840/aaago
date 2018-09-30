<!DOCTYPE html>
<html>
<title>Power by Ajay</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery.js"></script>
<script src="bootstrap.js"></script>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.css">
<body>

<div class="container">
    <br/>
    <h1>Live Search</h1>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon">Search</span>
            <input type="text" name="search_text" id="search_text" placeholder="Search by GSTIN Number" class="form-control"/>
            
        </div>
    </div>
    <div id="result"></div>
</div>

</body>
</html>
<script>
   $(document).ready(function(){
    $('#search_text').keyup(function(){

     //  $('#result').show();
        var txt = $(this).val();
        
            
            if (txt != '') {
                echo 'klasjf';
            }
            else 
            {
                $('#result').html('');
            $.ajax ({
                url:"getuser.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }
    });
   });

</script>