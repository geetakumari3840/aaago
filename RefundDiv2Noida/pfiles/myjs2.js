
$(document).ready(function(){ 

 /// Enter to Next Filed
   $('input').bind("keydown", function(e) {
      var n = $("input").length;
      if (e.which == 13)
      { //Enter key
        e.preventDefault(); //Skip default behavior of the enter key
        var nextIndex = $('input').index(this) + 1;
        if(nextIndex < n)
          $('input')[nextIndex].focus();
        else
        {
          $('input')[nextIndex-1].blur();
          $('#btnSubmit').click();
        }
      }
    });
  //////
function check_form () {
  
  //input blank
 
$('input').blur(function(){
  var thisval = $(this).val();
    if (thisval !='')
    { $(this).css('background-color','white'); }
    else
    { $(this).css('background-color','black');
 
            }
});

// day
$('.SanctonOrderDay').blur(function(){
  var rda = $(this).val();
  if ((rda < 32) && (rda > 0)  )
  {
    $(this).css('background-color','white');
    $('#alert1').empty();
  }
  else
  {

    $(this).css('background-color','red');
      $('#alert1').html('<marquee direction="right">Day Value only 1 to 31</marquee>').css('background-color','red').css('color','white');
     // alert (); $('#alert1').empty();
  }
  
});
//rfd 
$('#RFD').blur(function(){
  var rd = $(this).val();
  if (rd == '4' || rd == '6'  )
  {
       $(this).css('background-color','white');
       ('#alert1').empty();
  }
  else
  {

    $(this).css('background-color','red');
          $('#alert1').html('<marquee direction="right">RFD Form value 4 or 6</marquee>').css('background-color','red').css('color','white');
  }
  
});

}
check_form ();

  function LoadClean () {

 $('input').val('').css('background-color','white');
 $('#alert1').empty();
 $('#results').empty();
}
  


// Search Result 
  $('#CPartyName').focus(function(event){
    event.preventDefault();
           $.ajax ({
             url:"select_list.php",
             method:"post",
             dataType:"text",
             success:function(data)
            {
              $('#result').html(data);
            }

          });
   });
///////// */

// Select Party Name
  $('.live1').change(function(event){
    event.preventDefault();
    var Party_id = $('#CPartyName').val();

    if ( Party_id !='') {
    $.ajax ({
                url:"fetch.php",  
                method:"POST",  
                data:{Party_id:Party_id},  
                dataType:"json",  
                success:function(data){  
                     $('#CGSTIN').val(data.GSTIN);  
                     $('#CAddress').val(data.Address);  
                     $('#CDivision').val(data.Division);  
                    
      }

    });
  
}
  });
/////////
 
      function Cfetch_item_data ()
      {
        var search_id = $('#CPartyName').val();
        $.ajax ({
          url:"CFetch.php",
          method:"POST",
          data : {search_id:search_id},
          success:function(data)
          {
            $('#insert_item_data').html(data);
          }
        });
      }
      Cfetch_item_data ();

//* Update REcord 
      $(document).on('click', '.edit_data', function(){  
           var assessee_id = $(this).attr("id");   
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{assessee_id:assessee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#GSTIN1').val(data.GSTIN);  
                     $('#PartyName').val(data.PartyName);  
                     $('#Address').val(data.Address);  
                     $('#Mobile').val(data.Mobile);  
                     $('#Area').val(data.Area);
                     $('#Division').val(data.Division);  
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

      $('#Central_form').on("submit", function(event){  
           event.preventDefault();  
          
                $.ajax({  
                     url:"Cinsert.php",  
                     method:"POST",  
                     data:$('#Central_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val('Inserting');  
                     },   
                     success:function(data){  
                          $('#Central_form')[0].reset();  
                         
                          alert(data); 
                          Cfetch_item_data ();
                          //$('#result1').html(data);  
                     }  
                });  
       
      });  
//Add Multi column
       var count = 1;
 

    $('#lagout').click(function(){
      var action = "lagout";
      $.ajax ({
        url : "action.php",
        method:"POST",
        data:{action:action},
        success:function(data){
            document.location = 'login1.php'; 
        }
      });
    });
//end tag  
 });
