<?php  session_start(); ?>
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
    
</head>  
<body>  
    <div class="container-fluid">
          <?php include "header.php" ?>
          <?php include "navbar.php" ?>
                            <div id="main_frame"></div> 
    </div>


</body>
</html>
<!------------------------  Start Jquery Script   -------------------------->
<script>
$(document).ready(function(){ 
 
  $("#Home").click(function(){
    $("#main_frame").hide("slow");
     //alert("Home");
    
     });  

  $("#STC").click(function(){
     $("#main_frame").show();
     $("#main_frame").load('StateForm.php');
  });

   $("#CTS").click(function(){
       $("#main_frame").hide("slow");
        alert("Center to State");
     $("#main_frame").text("hi");
  });

    $("#Rept").click(function(){
    $("#main_frame").hide("slow");
     alert("Reports");
     });

   $("#Prin11").click(function(){
           $("#main_frame").show();
      $("#main_frame").load('NotesheetAll.php');
    });

   $("#Prin22").click(function(){
           $("#main_frame").show();
      $("#main_frame").load('DivNSRFD5.php');
    });




    $("#Refresh").click(function(){
    
      location.reload();
     });
//end tag  
 });
</script>