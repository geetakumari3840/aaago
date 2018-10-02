$(document).ready(function(){

//fatch data
fetch_data();
  function fetch_data()
  {
    var action = "search";
    $.ajax({ 
      url:"fetch.php",
      method:"POST",
      data:{action:action},
      success:function(data)
      {
        $('#result').html(data);
      }
    })
  }


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
                        $('#result2').html(data);
                }
            });
     } else {
      return false;
    }
});

//$('#AddAssessee').sumbit(function(){
 //   return false;
//});

//function clearInput (){
    //$('#AddAssessee:input').each(function() {
    //    $(this).val('');
    //});
//}


// Add Records


 $(document).ready(function(){

    $('.Add').click(function(){
      $('#AddBankf').show();
    });

  });
    $('.close').click(function() {
    $('#AddBankf').hide();
  });

              // Add recored -- image_form

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
// End add records 


//end
});