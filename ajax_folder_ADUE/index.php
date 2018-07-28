
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="jquery_css_file/jquery-3.3.1.js"></script>
   <link rel="stylesheet" href="jquery_css_file/w3.css"> 
   <link rel="stylesheet" href="jquery_css_file/myscript.css">   
   
</head>
<body>

<div class="w3-container">
   <h3 class="w3-text-green w3-xxlarge w3-center zoom" 
   style="text-shadow:3px 3px 0 #111;margin:0px;padding:0px;">
   Live Add Edit Delete Datatables Records using PHP Ajax</h3><br />
  <div class="w3-right">

  <button type="button" name="add" id="add" class="w3-button w3-blue w3-round"
  onclick="document.getElementById('id01').style.display='block'">Add Record</button>
  </div>
  <br>  <br> 
  <div id="image_data">   </div>
</div>
</body>
</body>
</html> 



<!-- Add Image Modal -->
<div id="id01" class="w3-modal">
<div id="imageModal">
  <div class="w3-modal-content">
    <header class="w3-container w3-teal">
      <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
      <h4 class="w3-xlarge">Add Image</h4>
    </header>
    <div class="w3-container">
      <form id="image_form" method="post">
        <p><label>Select Image</label>
          <input type="file" name="image" id="image"/></p><br />
          <input type="hidden" name="action" id="action" value="insert" />
          <input type="hidden" name="image_id" id="image_id" />
          <input type="submit" name="insert" id="insert" value="insert" 
          class="w3-btn w3-red w3-round" />

      </form>
      <br>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal Footer</p>
    </footer>
  </div>
</div>
</div>
<!-- End Add Image Modal -->

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

// Add Records

  $('#add').click(function() {
       $('#image_id').val('');
      $('#action').val('insert');
      $('insert').val('Insert');
  });

              // Add recored -- image_form

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
                          $('#id01').val('hide');   
                        }
                      });
                  }
              }
            });
// End add records 

/* Update Records
  $(document).on('click','.Update', function () {
    $('#image_id').val($(this).attr("ID"));
    $('#action').val("update");
    $('.modal-title').text("Update Image");
    $('#insert').val("Update");
    $('#imageModal').modal("show");
  });
*/
// End Update Records


// Delete Records

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

  // End Delete Records

});
</script>