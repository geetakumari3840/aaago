
$(document).ready(function(){ 
  
  $('input').css('background-color','white');
  $("input").css("text-align","center");


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
//month
$('.RFDMonth, .RFD2Month, .SanctonOrderMonth').blur(function(){
  var rm = $(this).val();
  if ( (rm < 13) && (rm > 0))
  {
        $(this).css('background-color','white');
         $('#alert1').empty();
  }
  else
  {
    $(this).css('background-color','red');
      $('#alert1').html('<marquee direction="right">Month Value only 01 to 12</marquee>').css('background-color','red').css('color','white');
     // alert (); $('#alert1').empty();
  }
  
});

/// year 
$('.RFDYear, .RFD2Year, .SanctonOrderYear').blur(function(){
  var ry = $(this).val();
  if ((ry < 19) && (ry > 16)  )
  {
    $(this).css('background-color','white');
    $('#alert1').empty();
    
  
  }
  else
  {
    //   alert ('Year Value only 17 to 18');
    $(this).css('background-color','red');
      $('#alert1').html('<marquee direction="right">Year Value only 17 to 18</marquee>').css('background-color','red').css('color','white');
     // alert (); $('#alert1').empty();direction="right"
  }
  
});

//$('.RFDYear').blur(function(){
  //$('.RFD2Month').val($('.RFDMonth').val());
    //$('.RFD2Year').val($('.RFDYear').val());

//});
// khand
$('#Khand').blur(function(){
  var kd = $(this).val();
  if ((kd < 37) && (kd > 0)  )
  {
    $(this).css('background-color','white');

  }
  else
  {
      // alert ('Khan No. only 1 to 36');
    $(this).css('background-color','red');
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
$('.RFD').blur(function(){
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
  
$('#CAll').click(function(){
LoadClean();
});

  function SaveLoadClean () {
  $('#live').val('');
  $('#Khand').val('');
  $('#results').empty();
  $('.RFDMonth').val('');
  $('.RFDYear').val('');
  $('.RFD2Month').val('');
  $('.RFD2Year').val('');
  $('.SanctionOrderNo').val('');
  $('.SanctonOrderDay').val('');
  $('.SanctonOrderMonth').val('');
  $('.SanctonOrderYear').val('');
  $('.ARN').val('');
  $('.ARNDay').val('');
  $('.ARNMonth').val('');
  $('.ARNYear').val('');
  $('.CGST').val('');
  $('.IGST').val('');
  $('.Cess').val('');
  $('.RFD').val('');
}

// Search Result 
  $('#live').focus(function(event){
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
// Range Result 
  $('#Area').focus(function(event){
    event.preventDefault();
           $.ajax ({
             url:"RangeSelectList.php",
             method:"post",
             dataType:"text",
             success:function(data)
            {
              $('#AreaCode').html(data);
            }

          });
   });
///////// */
// Select Range Name
  $('.area').change(function(event){
    event.preventDefault();
    var txt = $(this).val();
   // alert("Check Your Range and Division");
    if ( txt !='') {
    $.ajax ({
      url:"RangeFetch.php",
       method:"post",
       data:{search:txt},
       dataType:"json", 
       success:function(data)
      {
         $('#Sector').val(data.Sector);  
         $('#Rangee').val(data.Rangee);  
         $('#Division').val(data.Division); 
         
          $('#Khand1').focus();
      }

    });
}
  });
/////////

// Select Party Name
  $('.live').change(function(event){
    event.preventDefault();
    var txt = $(this).val();
    if ( txt !='') {
    $.ajax ({
      url:"fetch1.php",
       method:"post",
       data:{search:txt},
       dataType:"text",
       success:function(data)
      {
        $('#results').html(data);
        //  $('.live').val('');
      }

    });
}
  });
/////////

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
                     $('#ContactPerson').val(data.ContactPerson);
                     $('#Area').val(data.Area);
                     $('#Rangee').val(data.Rangee);
                     $('#Division').val(data.Division); 
                     $('#Khand1').val(data.Khand);  
                     $('#BankAc').val(data.BankAc);
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

//* Update REcord 2
      $(document).on('click', '.edit_data2', function(){  
           var assessee_id2 = $(this).attr("id");   
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{assessee_id2:assessee_id2},  
                dataType:"json",  
                success:function(data){  
                    $('#GSTIN1').val(data.GSTIN);
                    $('#NameOfParty1').val(data.NameOfParty);
                    $('#Address1').val(data.Address);
                    $('#Division1').val(data.Division);
                    $('#NodalFile1').val(data.NodalFile);
                    $('#NodalDate1').val(data.NodalDate);
                    $('#CGSTRDate1').val(data.CGSTRDate);
                    $('#Khand2').val(data.Khand);
                    $('#RFD1').val(data.RFD);
                    $('#RFDMonth1').val(data.RFDMonth);
                    $('#RFDYear1').val(data.RFDYear);
                    $('#RFD2Month1').val(data.RFD2Month);
                    $('#RFD2Year1').val(data.RFD2Year);
                    $('#SanctionOrderNo1').val(data.SanctionOrderNo);
                    $('#SanctionOrderDate1').val(data.SanctionOrderDate);
                    $('#CGST1').val(data.CGST);
                    $('#IGST1').val(data.IGST);
                    $('#Cess1').val(data.Cess);
                    $('#ARN1').val(data.ARN);
                    $('#ARNDate1').val(data.ARNDate);
                    $('#assessee_id2').val(data.SlNo);  
                    $('#insert').val("Update");
                    $('#headingg').text("Update Records");  
                    $('#add_data_Modal2').modal('show');  
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
                          alert(data); 
                          //$('#result1').html(data);  
                     }  
                });  
       
      });  

  //Update Record Insert into Data Base

      $('#insert_form2').on("submit", function(event){  
           event.preventDefault(); 

                $.ajax({  
                     url:"insert_edit.php",  
                     method:"POST",  
                     data:$('#insert_form2').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val('Inserting');  
                     },   
                     success:function(data){  
                          $('#insert_form2')[0].reset();  
                          $('#add_data_Modal2').modal('hide'); 
                          alert(data); 
                          fetch_item_data (); 
                     }  
                });  
       
      }); 
//Add Multi column
       var count = 1;
 $('#add_multi').click(function(){
 
 count = count + 1;

  var html_code = "<tr class='bg-info'  id='row"+count+"'>";
   
    html_code += "<td><input type='text'  class='form-con trol SanctionOrderNo' placeholder='1234' size='3' maxlength='4' name='SanctionOrderNo'></td>";
    html_code += "<td><input type='text'  class='form-con trol  SanctonOrderDay' placeholder='DD' size='2' maxlength='2' name='SanctonOrderDay'>";
    html_code += "<input type='text'  class='form-con trol SanctonOrderMonth'  placeholder='MM' size='2' maxlength='2' name='SanctonOrderMonth' required>";
    html_code += "<input type='text'  class='form-con trol  SanctonOrderYear' placeholder='YY' size='2' maxlength='2' name='SanctonOrderYear'></td>";
    html_code += "<td><input type='text'  class='form-con trol CGST' placeholder='In Rs.' maxlength='8' size='8' name='CGST'></td>";
    html_code += "<td><input type='text'  class='form-con trol IGST' placeholder='In Rs.' maxlength='8' size='8' name='IGST'></td>";
    html_code += "<td><input type='text'  class='form-con trol Cess' placeholder='In Rs.' maxlength='8' size='8' name='Cess'></td>";
    html_code += "<td><input type='text'  class='form-cont rol RFD' placeholder='4/6' maxlength='1' size='2' name='RFD'></td>";    
    
    html_code += "<td><input type='text' class='form-con trol RFDMonth' placeholder='MM' maxlength='2' size='2' name='RFDMonth' required>";
    html_code += "<input type='text'  class='form-con trol RFDYear' placeholder='YY' maxlength='2' size='2' name='RFDYear'></td>";
    html_code += "<td><input type='text'  class='form-con trol RFD2Month' placeholder='MM' maxlength='2' size='2' name='RFD2Month' required>";
    html_code += "<input type='text'  class='form-con trol RFD2Year' placeholder='YY' maxlength='2' size='2' name='RFD2Year'></td>";
    html_code += "<td><input type='text' class='ARN' placeholder='ARN Number' size='18' maxlength='15' name='ARN'></td>";
    html_code += "<td><input type='text' class='form-con trol  ARNDay' placeholder='DD' size='2' maxlength='2' name='ARNDay'>";
    html_code += "<input type='text'  class='form-con trol ARNMonth'  placeholder='MM' size='2' maxlength='2' name='ARNMonth' required>";
    html_code += "<input type='text'  class='form-con trol  ARNYear' placeholder='YY' size='2' maxlength='2' name='ARNYear'></td>";
    
  html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
     html_code += "</tr>"; 

 $('#crud_table').append(html_code);
 check_form ();
});

//remove
    $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
    });


//save
 $('#save').click(function(){

            var RFDMonth = [];
            var RFDYear = [];
            var RFD2Month = [];
            var RFD2Year = [];
            var SanctionOrderNo = [];
            var SanctonOrderDay = [];
            var SanctonOrderMonth = [];
            var SanctonOrderYear = [];
            var ARN = [];
            var ARNDay = [];
            var ARNMonth = [];
            var ARNYear = [];
            var CGST = [];
            var IGST = [];
            var Cess = [];
            var RFD = [];
            var GSTIN = $('#GSTIN1').val();
            var NameOfParty = $('#NameOfParty1').val();
            var Division = $('#Division1').val();
            var Address = $('#Address1').val();
            var NodalFile = $('#NodalFile').val();
            var NodalDate = $('#NodalDate').val();
            var CGSTRDate = $('#CGSTRDate').val();
            var Khand = $('#Khand').val();
            
          $('.RFDMonth').each(function(){
           RFDMonth.push($(this).val()); });
          $('.RFDYear').each(function(){
           RFDYear.push($(this).val());});
          $('.RFD2Month').each(function(){
           RFD2Month.push($(this).val()); });
          $('.RFD2Year').each(function(){
           RFD2Year.push($(this).val());});
          $('.SanctionOrderNo').each(function(){
           SanctionOrderNo.push($(this).val());});
          $('.SanctonOrderDay').each(function(){
           SanctonOrderDay.push($(this).val());});
          $('.SanctonOrderMonth').each(function(){
           SanctonOrderMonth.push($(this).val());});
          $('.SanctonOrderYear').each(function(){
           SanctonOrderYear.push($(this).val());});
          $('.ARN').each(function(){
           ARN.push($(this).val());});
          $('.ARNDay').each(function(){
           ARNDay.push($(this).val());});
          $('.ARNMonth').each(function(){
           ARNMonth.push($(this).val());});
          $('.ARNYear').each(function(){
           ARNYear.push($(this).val());});
          $('.CGST').each(function(){ 
            CGST.push($(this).val());});
          $('.IGST').each(function(){ 
            IGST.push($(this).val()); });
          $('.Cess').each(function(){ 
            Cess.push($(this).val()); });
          $('.RFD').each(function(){ 
            RFD.push($(this).val()); });

          $.ajax({
                url:"fetch2.php",
                method:"POST",
                data:{
                      GSTIN:GSTIN,
                      NameOfParty:NameOfParty,
                      Address:Address,
                      Division:Division,
                      NodalFile:NodalFile,
                      NodalDate:NodalDate,
                      CGSTRDate:CGSTRDate,
                      Khand:Khand,
                      RFDMonth:RFDMonth,
                      RFDYear:RFDYear,
                      RFD2Month:RFD2Month,
                      RFD2Year:RFD2Year,
                      SanctionOrderNo:SanctionOrderNo,
                      SanctonOrderDay:SanctonOrderDay,
                      SanctonOrderMonth:SanctonOrderMonth,
                      SanctonOrderYear:SanctonOrderYear,
                      ARN:ARN,
                      ARNDay:ARNDay,
                      ARNMonth:ARNMonth,
                      ARNYear:ARNYear,
                      CGST:CGST,
                      IGST:IGST,
                      Cess:Cess,
                      RFD:RFD
                      },
                  dataType:"html",
                success:function(data){
                  console.log(data);
                  alert (data);
                  
                  fetch_item_data();

               if ($.trim(data) == "Item Data Inserted") {

                  SaveLoadClean(); 
                  for(var i=2; i<= count; i++)
                        {
                          $('#row'+i+'').remove();
                        } 
                      }
                                   }
      });
 });
      function fetch_item_data ()
      {
        var search_id = $('#NodalFile').val();
        $.ajax ({
          url:"fetch3.php",
          method:"POST",
          data : {search_id:search_id},
          success:function(data)
          {
            $('#insert_item_data').html(data);
          }
        });
      }
      fetch_item_data ();

 $(document).on('click', '.delete_data2', function(){
  var delete_id2 = $(this).attr("id");
 // var image_name = $(this).data("image_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{delete_id2:delete_id2},
    success:function(data)
    {
     alert("Data Removed");
     fetch_item_data ();
    }
   });
  }
 });
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
