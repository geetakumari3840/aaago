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
    fetch_data();
      $('#imageModal').show();
      $('.modal_title').text("Add Image");
      $('#image_id').val('');
      $('#action').val('insert');
      $('#insert').val('Insert');
  });

  $('.close').click(function() {
    $('#imageModal').hide();
  });

              // Add recored -- image_form

            $('#image_form').submit(function(event){
              event.preventDefault();
              var image_name = $('#image').val();
              if (image_name =='') {
                  alert("Please Select Image");
                  return false;
              } else {
                  var extension = $('#image').val().split('.').pop().toLowerCase();
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
                          $('#imageModal').hide();   
                        }
                      });
                  }
              }
            });
// End add records 

//Update Records
  $(document).on('click','.Update', function () {
    $('#imageModal').show();
    $('#image_id').val($(this).attr("ID"));
    $('#action').val("update");
    $('.modal_title').text("Update Image");
    $('#insert').val("Update");
    
    
  });

// End Update Records


// Delete Records

  $(document).on('click','.delete', function(){
    var image_id = $(this).attr("ID");
    var action = "delete";
    if (confirm ("Are you sure you want to remore this image from database?"))
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