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
    <div id="here"></div>
</div>

</body>
</html>
<script>
$(document).ready(function() {
    $("#search_text").keyup(function(){

        $("#here").show();
        var x = $(this).val();
        $.ajax ({
            type :'GET',
            url:'fetch2.php'
            data:'q='+x,
            sucess:function(data)
            {
                $("#here").html(data);
            }
        });

    });
});
</script>