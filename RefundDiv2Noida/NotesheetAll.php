<!DOCTYPE html>  
 <html>  
  <head>  
      <title>Refund Branch, CGST Div-II, Noida</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="pfiles/jquery.min.js"></script> 
   <link rel="stylesheet" href="pfiles/mycss.css"> 
   <script src="pfiles/myjs.js"></script>
  <script>
     function PrintContent (el) {
    var restorepage = document.body.innerHTML;
    var PrintContent = document.getElementById(el).innerHTML;
    document.body.innerHTML = PrintContent;
    window.print();
    document.body.innerHTML = restorepage;
  }
  </script>
</head>

<body class="container">
  
  <div><br>
  <div class="table-responsive">
    <form id="form_note">
<table>
  <tr>
    <td><input type="number" class="form-control" name="From_id" 
              value="1" id="From_id" required>
    </td>
    <td><input type="number" class="form-control" name="To_id"  
              value="50" id="To_id" required>
    </td>
    <td><select name="Div_id" id="Div_id" type="number" 
                class="form-control" required>
                  <option value="1">Division-I</option>
                  <option value="2">Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
                  <option value=""  selected>All Division</option>
        </select>
    </td>
    <td>
        <button id="Btn1" type="button" 
                class="btn btn-info btn-xl">Display Notesheet</button>
    </td>
    <td>
        <button id="Btn2" type="button" 
                class="btn btn-success btn-xl">Display Letter</button>
    </td>
   <td>
        <button id="something" type="button" 
                class="btn btn-default btn-xl">Refresh</button>
    </td>
    </tr>
</table>
</form>
</div>
 <div class="print" style="display: none;text-align: center;"><br>
      <button type="button" class="btn btn-danger btn-xl" 
      onclick="PrintContent('page1')">Print</button>
  </div>
<div  id="page1" >
  <!-- Header 1 -->
<div class="header" style="display: none;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following refund sanction orders received from State Goods & Service Tax are being forwarded to concerned jurisdictional officer for necessary action at their end:
</div>
<!-- Header 2 -->
<div class="header2" style="display: none;">
  <table>
  <tr>
    <td>
      <img src="pfiles/logo.jpg" alt="ashok">
    </td>
    <td>
<span><b>कार्यालय सहायक आयुक्त </b></span><br>               
<span>OFFICE OF THE ASSISTANT COMMISSIONER</span> <br>              
<span>केन्द्रीय कर (वस्तु एवं सेवाकर और केन्द्रीय उत्पाद) मण्डल-II, नोएडा      </span>  <br>     
<span>CENTRAL TAX (GST & CENTRAL EXCISE) DIVISION-II, NOIDA </span><br>  
 <span>C-56/42, RENU TOWER, SECTOR-62, NOIDA / सी.-56/42, रेनू टावर, सेक्टर-६२, नोएडा  </span>               
    </td>
    <td>
      <img src="pfiles/gst.jpg" alt="GST">
    </td>
  </tr>
  <tr>
    <td colspan="2"><br>C.No. V(18)Ref/ CGST/Misc./StateOrder/N/D-II/207/17-18</td>
    <td>Dated:</td>
  </tr>
</table> 
<table>
  <tr>
    <td><br>To,</td>
  </tr>
  <tr>
    <td></td>
    <td>The Deputy / Assistant Commissioner</td>
  </tr>
    <tr>
    <td></td>
    <td>Central Goods & Service Tax,</td>
  </tr>
    <tr>
    <td></td>
    <td id="div_no">Division-I/II/III/IV/V Noida</td>
  </tr>
      <tr>
    <td></td>
    <td><br>Subject:- Forwarding of Provisional Refund Orders received from State Goods & Service Tax -C/reg</td>
  </tr>
        <tr>
   
    <td colspan="2"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following refund sanction orders received from State Goods & Service Tax are being forwarded to concerned jurisdictional officer for necessary action at their end:</td>
  </tr>
</table>
</div>
<!-- Main  -->
<div id="NoteSheetAll"></div>
<br><br><br><br>

<!-- Footer 1 -->
<div class="footer" style="display: none;">
    <table><tr>
    <td>Inspector(R/R)</td>
    <td>Nodal Officer(CGST)</td></tr>
     </table>
</div>
<!-- Footer 2 -->
<div class="footer2" style="display: none;">
    <table><tr>
    <td>Inspector(R/R)</td>
    <td>Nodal Officer(CGST)</td></tr>
     </table>
</div>

</div>
</div>
</body>
</html>

<script>
 $(document).ready(function(){  
$('#something').click(function() {
    location.reload();
});

$('#Btn1').click(function (event) {
      event.preventDefault();
      $('.page1').empty();
$('.header, .footer, .print').show();
		$('.header2, .footer2').hide();   
$.ajax({
         method: 'POST',
         url:  'NoteAll.php',
         data:$('#form_note').serialize(), 
         success:function (data) {
         	$('#NoteSheetAll').html(data);

         }
      });
          });

$('#Btn2').click(function (event) {
      event.preventDefault();
       $('.page1').empty();
$('.header2, .footer2, .print').show();
  $('.header, .footer').hide();
  $.ajax({
         method: 'POST',
         url:  'NoteAll.php',
         data:$('#form_note').serialize(), 
         success:function (data) {
          $('#NoteSheetAll').html(data);

         }
      });
          });
	});
</script>