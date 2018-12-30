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
    <script src="pfiles/bootstrap.min.js"></script> 
    <script src="pfiles/myjs.js"></script>  
  <style>
          body,h1 {font-family: "Raleway", sans-serif}
          body, html {height: 100%;
                      margin:0px;
                      padding:0px;}
.bgimg {
    background-color:bl ack;
    background-image: url('images/forrest.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}

  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }

.modal-footer {
      background-color: #f9f9f9;
  }

</style>
</head>
<body  class="bgimg">

<div class="container text-center">
  <h1 style="color:white;">CGST Division-II, Noida</h1>
  <h2 style="color:white;">Refund Branch</h2>
  <br><br><br><br><br><br><br><br><br>
  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger btn-sm center-block"  id="myBtn"
  >Login</button>
</div>

</body>
</html>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div id="warning"></div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" id="login_user">
            <div class="form-group">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" 
              id="username" name="username" 
              placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit"  name="submit" class="btn btn-success btn-block" id="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
<!-- Modal Closed -->
 <script>
$(document).ready(function(){

    $("#myBtn").click(function(){
        $("#myModal").modal();
    });

    $("#submit").on("click", function(event){  
           event.preventDefault(); 
      var username = $("#username").val();
      var password = $("#password").val();
      if (username !='' && password !='')
      {
               $.ajax({
                url:"action.php",
                method:"POST",
                data:{username:username, password:password},
                dataType:"html",
                success:function(data)
                    {
                          if ($.trim(data) == "No") 
                     {
      
                        alert ("Username/Password is Incorrect!");
                     }
                      else
                      {
                        $("#myModal").modal('hide');
                         document.location = 'index.php'; 
                      }
                    }
              });
      }
      else
      {
        alert ("Boths fileds are required");
      }
    });
});
</script>
