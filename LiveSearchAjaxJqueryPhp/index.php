<!DOCTYPE html>

<html lang="en">
  <head> 
    <title>LiveSearchAjaxSqlPhp</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

   
    
    <link rel="stylesheet" href="jquery_css_file/w3.css" type="text/css" />
    <link rel="stylesheet" href="jquery_css_file/mycss.css" type="text/css" />
    
<!--     <script src="jquery_css_file/jquery-3.3.1.js"></script>
    <script src="jquery_css_file/myjs.js"></script>

    bootstrap -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <!-- end bootstrap -->

    
  </head>
<body class="w3-container w3-center"> 
  <h1 class="w3-text-green w3-puvrple">Live Search Data - Ajax SQL PHP Jquery HTML</h1>
    <div class="w3-center">
     
      <input class="w3-input w3-border w3-round w3-center" style ="width:50%;margin:auto;" type="text" id="live"  name="live" placeholder="Type Some word" />
    </div>
        
  <div id="result"></div>
  <div id="result2"></div>
</body>
</html>
<!-- http://localhost/aaago/LiveSearchAjaxJqueryPhp/index.html -->

<!-- BOOTSCRAP MODAL-->
<!-- Trigger the modal with a button -->


<!-- Modal1 -->
<div id="Addform" class="modal fade" r ole="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header w3-purple">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Assessee Master</h4>
      </div>
      <div class="modal-body bg-danger">
        <form class="w3-container" id="AddAssessee" method="post" action="AddAssessee.php">
  
        <input class="w3-input w3-border w3-round" type="text" 
                name="GSTIN" placeholder="GSTIN" required/> 
        <input class="w3-input w3-border w3-round" type="text" 
                name="TradeName" placeholder="Name of the Party" required/>
        <th ><input class="w3-input w3-border w3-round" type="text" 
                name="Address" placeholder="Address" required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="Mobile" placeholder="Mobile No." />
        <input class="w3-input w3-border w3-round" type="text" 
                name="Email" placeholder="Email Id" />
        
<select class="w3-select w3-text-grey  w3-border w3-round" name="RangeNo" type="text" required>
                  <option value="" disabled selected>&nbsp;Range</option>
                  <option value="6">Range 6</option>
                  <option value="7">Range 7</option>
                  <option value="8">Range 8</option>
                  <option value="9">Range 9</option>
                  <option value="10">Range 10</option>
                 </select>

        <input class="w3-input w3-border w3-round" type="text" 
                name="BankAc" placeholder="Bank Account No." required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="BankName" placeholder="Bank'Name" required/>
       <input class="w3-input w3-border w3-round" type="text" 
                name="BankBranch" placeholder="Bank Branch" required/>

        <input class="w3-input w3-border w3-round" type="text" 
                name="IFSC" placeholder="IFS Code" required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="MICR" placeholder="MICR" required/>
                <div class="w3-center"><br>
      <input type="submit" name="insert" id="insert" value="Insert" 
          class="w3-btn w3-red w3-round" /></div>
 

        </form>
      </div>
       <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>


<!-- Modal2 -->
<div id="Addform2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header w3-deep-orange">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Bank Details</h4>
      </div>
      <div class="modal-body bg-warning">
        <form class="w3-container" id="AddBank_form" method="post">
          <input class="w3-input w3-border w3-round" type="text" 
                name="BankAc" placeholder="Bank Account No." required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="BankName" placeholder="Bank'Name" required/>
       <input class="w3-input w3-border w3-round" type="text" 
                name="BankBranch" placeholder="Bank Branch" required/>

        <input class="w3-input w3-border w3-round" type="text" 
                name="IFSC" placeholder="IFS Code" required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="MICR" placeholder="MICR" required/>
                <div class="w3-center">
<br>
      <button type="submit2" name="insert2" id="insert2" value="Insert" 
          class="w3-btn w3-orange w3-round">Insert </button></div>
         </form>
      </div>
     <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>


<!-- Modal2 -->
<div id="Addform3" class="modal fade" ro le="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header w3-teal">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Sanction Details</h4>
      </div>
      <div class="modal-body bg-success">

        <form class="w3-container" id="AddRecord" method="post" action="AddRecord.php">
          <input class="w3-input w3-border w3-round" type="text" 
                name="BankAc" placeholder="Bank Account No." required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="BankName" placeholder="Bank'Name" required/>
       <input class="w3-input w3-border w3-round" type="text" 
                name="BankBranch" placeholder="Bank Branch" required/>

        <input class="w3-input w3-border w3-round" type="text" 
                name="IFSC" placeholder="IFS Code" required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="MICR" placeholder="MICR" required/>
                <div class="w3-center">
<br>
      <button type="submit2" name="insert2" id="insert2" value="Insert" 
          class="w3-btn w3-green w3-round">Insert Record</button></div>
         </form>
      </div>
     <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div>

  </div>
</div>

<script>
  $(document).ready(function(){


fetch_data();
  function fetch_data()
  {
    
// live search data 
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
}
//add Assessee 

//$('#sumbit').click(function(event){
$('#AddAssessee').sumbit(function(event){
        event.preventDefault();
    var data = $("#AddAssessee");
if (confirm ("Are you sure you want to remore this image from database?"))
    {
    $.ajax ({
                url:"AddAssessee.php",
                method:"post",
                data: data,
                success:function(data)
                {
                          etch_data();
                        $('#result2').html(data); 
                        
                }
            });
     } else {
      return false;
    }
});

      /* / Add recored -- image_form

            $('#AddBankf').submit(function(event){
              event.preventDefault();
            var data = $("#AddBankf");
            $.ajax ({
                url:"AddBank.php",
                method:"post",
                data: data,
                success:function(data)

                {
                        $('#result2').html(data);
                }
            });


            });
*/// End add records 

 // Add bank Account
  $(document).on('click', '.edit11', function(){
  var Bank_id = $(this).attr("id");
  $.ajax({
   url:"AddBank.php",
   method:"post",
   data:{Bank_id:Bank_id},
   dataType:"json",
   success:function(data)
   {
    $('#Addform2').modal('show');
    $('#Bank_id').val(Bank_id);
    $('#BankName').val(data.BankName);
    $('#BankAc').val(data.BankAc);
    $('#IFSC').val(data.IFSC);
    $('#MICR').val(data.MICR);
   }
  });
 });


 // Add next
 $(document).on('click', '.next', function(){
  var Bank_id = $(this).attr("id");
  $.ajax({
   url:"AddRecord.php",
   method:"post",
   data:{Bank_id:Bank_id},
   dataType:"json",
   success:function(data)
   {
    $('#Addform3').modal('show');
    $('#image_id').val(image_id);
    $('#image_name').val(data.image_name);
    $('#image_description').val(data.image_description);
   }
  });
 });

//end
});
</script>