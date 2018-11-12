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
  $(document).on('click', '.edit_data', function(){
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
