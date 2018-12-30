<?php
session_start(); 
  if(isset($_SESSION["username"]))
    {
?>
<!DOCTYPE html>  
 <html>  
  <head>  
      <title>Refund Branch, CGST Div-II, Noida</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="pfiles/jquery.min.js"></script> 
   <link rel="stylesheet" href="pfiles/mycss.css"> 
   <script src="pfiles/myjs.js"></script>
   <script src="pfiles/printThis.js"></script>
  
</head>

<body class="container">
    
  <div style="text-align: center;background-color: #ffccff;width: 900px; margin: 0px auto;">
    <form id="SearchParty">
<table>
  <tr style="text-align: center;"> 
   
    <td style="width: 40%;"><input type="text" class="form-control" 
      name="SPartyName" placeholder="Name of State Asessee" id="SPartyName">
    </td>
       <td style="width: 40%;"><input type="text" class="form-control" 
      name="CPartyName" placeholder="Name of center Asessee" id="CPartyName">
    </td>
      

    </tr>
</table>
</form>
</div><br>
<div id="HomeResult"></div>
</body>
</html>
<script>
 $(document).ready(function(){  

  $('#SPartyName').keyup(function(event){
  event.preventDefault();
      var txt = $(this).val();
            if ( txt !='') {
    $.ajax ({
      url:"fetchHome.php",
       method:"post",
       data:{search:txt},
       dataType:"text",
       success:function(data)
      {
        $('#HomeResult').html(data);
        //  $('.live').val('');
      }

    });
}

});
//end tag
	});
</script>

<?php
    } 
  else
    {
    $yourURL="login1.php";
      echo ("<script>location.href='$yourURL'</script>");
    }
?>
 
