
 <!DOCTYPE html>  
 <html>  
  <head>  
      <title>Multi Row Add </title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>  
  
  <!-- offline  -->
  <script src="jquery.min.js"></script>  
  <link rel="stylesheet" href="bootstrap.min.css" />  
  <script src="bootstrap.min.js"></script> 
  <script src="jquery-3.3.1.js"></script>
  </head>  

<body>  
        
    <div class="container">  
          <h3 align="center" class="text-danger">
          Central Goods &amp; Service Tax, Division-II, Noida</h3>
          <h2 align="center"  class="text-blue">Refund Branch</h2>   
     
  <div class="table-responsive">
    <input type="hidden" id="Bank" name="Bank" value="ICICI Bank">
    <table  class="table table-bordered" id="crud_table">
      <tr>
        <th style="width: 20%;">GSTIN</th>
        <th style="width: 45%;">Address</th>
        <th style="width: 15%;">Mobile</th>
        <th style="width: 15%;">Email</th>
        <th style="width: 5%;">Action</th>
      </tr>
      <tr>
        <td contenteditable="true" class="GSTIN"></td>
        <td contenteditable="true" class="Address"></td>
        <td contenteditable="true" class="Email"></td>
        <td contenteditable="true" class="Mobile"></td>
        <td></td>
      </tr>
    </table>
    <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
    <button type="button" name="save" id="save" class="btn btn-info btn-xs">save</button>
    </div>
   
    <br>
    <div id="insert_item_data"></div>
    
</div>
</div>
</body>  
</html>  

<script>
  
  $(document).ready(function(){
var count = 1;
 $('#add').click(function(){
 count = count + 1;
 var html_code = "<tr id='row"+count+"'>";
 html_code += "<td contenteditable='true' class='GSTIN'></td>";
 html_code += "<td contenteditable='true' class='Address'></td>";
 html_code += "<td contenteditable='true' class='Email'></td>";
 html_code += "<td contenteditable='true' class='Mobile' ></td>";
 html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
 html_code += "</tr>";  
 $('#crud_table').append(html_code);
});

//remove
    $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
    });

//save

$('#save').click(function(){
    var GSTIN = [];
    var Address = [];
    var Email = [];
    var Mobile = [];
    
    var BankName = $('#Bank').val();

    $('.GSTIN').each(function(){ GSTIN.push($(this).text()); });
    $('.Address').each(function(){ Address.push($(this).text());});
    $('.Email').each(function(){ Email.push($(this).text()); });
    $('.Mobile').each(function(){ Mobile.push($(this).text()); });
          $.ajax({
                url:"fetch2.php",
                method:"POST",
                data:{GSTIN:GSTIN, Address:Address, Email:Email, Mobile:Mobile, BankName:BankName},
                success:function(data){
          alert(data);
                  $("td[contentEditable='true']").text("");
          for(var i=2; i<= count; i++)
          {
           $('tr#'+i+'').remove();
          }
          fetch_item_data();
          }
      });
 });


      function fetch_item_data ()
      {
        $.ajax ({
          url:"fetch3.php",
          method:"POST",
          success:function(data)
          {
            $('#insert_item_data').html(data);
          }
        });
      }
      fetch_item_data ();
  });
</script>
