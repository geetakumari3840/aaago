
 $(document).ready(function(){  
// Search Result 
fetch_data();
  function fetch_data()
  {
    
// live search data 
$('#live').keyup(function(){
     
      var txt = $(this).val();
            if (txt !='') {
            $.ajax ({
                url:"fetch1.php",
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

// end search result

  
  
// Update REcord 
      $(document).on('click', '.edit_data', function(){  
           var assessee_id = $(this).attr("id");   
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{assessee_id:assessee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#GSTIN').val(data.GSTIN);  
                     $('#TradeName').val(data.TradeName);  
                     $('#Address').val(data.Address);  
                     $('#Mobile').val(data.Mobile);  
                     $('#Email').val(data.Email);
                     $('#RangeNo').val(data.RangeNo);  
                     $('#BankAc').val(data.BankAc);
            //         $('#Authority').val(data.Authority);  
                     $('#BankName').val(data.BankName);  
                     $('#BankBranch').val(data.BankBranch);  
                     $('#IFSC').val(data.IFSC);    
                     $('#MICR').val(data.MICR);  
                     $('#assessee_id').val(data.SlNo);  
                     $('#insert').val("Update");
                     $('#headingg').text("Update Records");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  

//Update Record Insert into Data Base

      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val('Inserting');  
                     },   
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#result').html(data);  
                     }  
                });  
       
      });  

// view data

      $(document).on('click', '.view_data', function(){  
           var assessee_id = $(this).attr("id");  
           if(assessee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{assessee_id:assessee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });

//next recored display

   $('#submit2').click(function(){
      var monthid = val('#RecNo');

      if (monthid !='')
      {
  $('#ntable').html("<tr><td  colspan='7' class='text-danger' align='center'>hello</td></tr>");
      }
   else
      {
   $('#ntable').html('Blank')
      }  
      });  


//end tag  
 });  