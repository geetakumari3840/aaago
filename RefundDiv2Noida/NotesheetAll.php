<?php
session_start(); 
  if(isset($_SESSION["username"]))
    {
?>
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
   <script src="pfiles/printThis.js"></script>
  <style>
    body {
      font-family: "Times New Roman", Times, serif;
      font-style: normal;
      font-size: 13px;
      font-wei ght: bold;
      font-variant: normal;
      wid th: 900px;
      margin: 0 auto;
     
    }


table {

    width: 100%;
    text-align: center;
}
th, td {
      padding: 2px;
      margin: 0px;
      text-align: center;
  }
  th {
    font-size: 15px;
  }
  
  </style>

</head>

<body class="container">
  
  <div><br>
  <div class="table-responsive" 
  style="text-align: center;background-color: grey;width: 900px; margin: 0px auto;">
    <form id="form_note">
<table>
  <tr style="text-align: center;"> 
    <td style="width: 10%;"><input type="number" class="form-control" 
        name="From_id" value="1" id="From_id" required>
    </td>
    <td style="width: 10%;"><input type="number" class="form-control" 
        name="To_id"  value="50" id="To_id" required>
    </td>
    <td style="width: 15%;"><select name="Div_id" id="Div_id" 
        type="number" class="form-control" required>
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


    </tr>
</table>
</form>
</div><br>
<!--<a href="javascript:;" id="print">Open</a>-->
 <div class="print" style="display: none;text-align: center;">
<button type="button" class="btn btn-danger btn-xl" id="printn">Print</button>
  </div>
<div id="page1" >
  <!-- Header 1 -->
<div class="header" style="display: none;wid th: 900px;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following refund sanction orders received from State Goods & Service Tax are being forwarded to concerned jurisdictional officer for necessary action at their end:
</div>
<!-- Header 2 -->
<div class="header2" style="display: none;">

<table border="0" style="width: 900px;">
  <tr>
    <td style="background: #ffffff url("/images/logo.jpg") no-repeat;">
      <img src="http://localhost/aaago/RefundDiv2Noida/images/logo.jpg" alt="ashok">
    </td>
    <td>
<span style="font-size: 18px;">कार्यालय सहायक आयुक्त </span><br>               
<span style="font-size: 18px;">OFFICE OF THE ASSISTANT COMMISSIONER</span> <br>              
<span style="font-size: 18px;">केन्द्रीय कर (वस्तु एवं सेवाकर और केन्द्रीय उत्पाद) मण्डल-II, नोएडा      </span>  <br>     
<span style="font-size: 18px;">CENTRAL TAX (GST & CENTRAL EXCISE) DIVISION-II, NOIDA </span><br>  
 <span style="font-size: 16px;">C-56/42, RENU TOWER, SECTOR-62, NOIDA / सी.-56/42, रेनू टावर, सेक्टर-६२, नोएडा  </span>               
    </td>
    <td>
      <img src="http://localhost/aaago/RefundDiv2Noida/images/gst.jpg" alt="GST">
    </td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: left;"><br>C.No. V(18)Ref/ CGST/Misc./StateOrder/N/D-II/207/17-18<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>  Dated:</td>
  </tr>
</table> 
<table border="0" style="wid th: 900px;">
  <tr>
    <td><br>To,</td> <td><br></td>
  </tr>
  <tr>
    <td></td>
    <td style="text-align: left;">
      The Deputy / Assistant Commissioner<br>
      Central Goods & Service Tax,<br>
      <span id="DivFID">Division-I/II/III/IV/V Noida</span>
      <br>

    </td>
  </tr>
  
      <tr>
    <td></td>
    <td style="text-align: left;font-size:17px;"><br><i><u>Subject:- Forwarding of Provisional Refund Orders received from State Goods & Service Tax -C/reg</u></i></td>
  </tr>
        <tr>
   
    <td colspan="2" style="text-align:justify"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Following refund sanction orders received from State Goods & Service Tax are being forwarded to concerned jurisdictional officer for necessary action at their end:</td>
  </tr>
</table>
</div>
<!-- Main  -->
<div id="NoteSheetAll"></div>



<!-- Footer 1 -->
<div class="footer" style="display: none;wi dth:900px;">
    <br>
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In above context, Letters addressing to the above said Divisions are put up for kind perusal, approval & signature please.</div>
 <br><br><br><br>
    <table><tr>
    <td style="text-align: left;">Inspector(R/R)</td>
    <td style="text-align: left;">Nodal Officer(CGST)</td></tr>
     </table>
</div>
<!-- Footer 2 -->
<div class="footer2" style="display: none;">
    <table border="0" style="wi dth: 900px;">
    </tr><tr>
    <td colspan="2" style="text-align: justify;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The above mentioned Provisional / Final refund orders are being forwarded (signed in original) to you for the payment of CGST/IGST/Cess amount, sanctioned from the State Goods & Service Tax. </td>
    <tr>
      <td style="text-align: left;width: 70%;">
        Encl: As above 
      </td>
      <td style="text-align: center;width: 30%;">
          Yours faithfully,<br><br><br><br>
           Assistant Commissioner (Nodal Officer)<br>
           Central GST (Manual Refund)<br>
           Commissionerate, Noida
      </td>
    </tr>
   
     </table>
</div>
</div>
</div>
</div>
</body>
</html>
<script>
 $(document).ready(function(){  

$("#printn").on('click',function(e){
    $("#page1").printThis({
            debug: true,
            importCSS: true,
            importStyle: true,
            //loadCSS: "/Data.css",
            pageTitle: false,
        });
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
  var dfid = $('#Div_id').val();
//alert (dfid);
 if (dfid==1) {
    dfidn = "I"
 }
 else if (dfid==2){
   dfidn = "II"
 }
  else if (dfid==3){
   dfidn = "III"
 }
  else if (dfid==4){
   dfidn = "IV"
 }
  else if (dfid==5){
   dfidn = "V"
 }
  else if (dfid==6){
   dfidn = "VI"
 }
 else
 {
   dfidn = "I to VI"
 }

$('#DivFID').text('Division-'+dfidn+' Noida');
  $.ajax({
         method: 'POST',
         url:  'NoteAll.php',
         data:$('#form_note').serialize(), 
         success:function (data) {
          $('#NoteSheetAll').html(data);

         }
      });
          });
//end tag
	});
</script>

<?php
    } 
  else
    {
    $yourURL="login1.php";
      echo ("<script>location.href='$yourURL'</script>");
    }
?>
 
