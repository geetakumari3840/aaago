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
      font-size: 11.5px;
      font-variant: normal;
      margin: 0 auto;
     
    }

table {
    border-collapse: collapse;
    width: 100%;
    text-align: center;
}
th, td {
      padding: 2px;
      margin: 0px;
      text-align: center;
  }

@media print {
    .page-break { 
        height: 0; 
        page-break-before: always; 
        margin: 0; 
        border-top: none; 
    }
}

body, p, a,
span, td { 
    font-size: 9pt;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    margin-left: 2em; 
    margin-right: 2em;
}

#page1 {
    height: 947px;
    padding-top: 5px;
    page-break-after: always;   
    font-family: Arial, Helvetica, sans-serif;
    position: relative;
    border-bottom: 1px solid #000;
}
  </style>

</head>

<body class="container">
  
  <br>
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
                  <option value="2"selected>Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
                  <option value="">All Division</option>
        </select>
    </td>
        <td style="width: 15%;"><input type="text" class="form-control" 
        id="Dis_id" name="Dis_id" placeholder="Dispatch No." required>
    </td>
        <td style="width: 7%;"><input type="date" class="form-control" 
        name="DisD_id"  id="DisD_id" required>
    </td>
    <td>
        <button id="Btn1" type="button" 
                class="btn btn-info btn-xl">Display Notesheet</button>
    </td>
     <td>
        <button id="Btn2" type="button" 
                class="btn btn-primary btn-xl">RFD-05</button>
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
<div class="header" style="display: none;width: 800px;margin: auto;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Placed opposite are Final / Provisional Refund Orders received from the Deputy / Assistant  Commissioner (Nodal Officer), CGST, Noida, vide letter having C.No.<span id="dispach_no"></span> dated <span id="dispach_date"></span> of below mentioned parties and details are as under for your kind perusal please.  <br> <br>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
The detail of amount to be sanctioned (as mentioned in above said letter) is as under:
</div>

<!-- Main  -->
<div id="NoteSheetAll"></div>

<!-- Footer 1 -->
<div class="footer" style="display: none;width:800px;margin: auto;">
    <br>
<div><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Further, as per para 4 of Circular No. 17/17/2017-GST dated 15.11.2017 issued by the GST Policy Wing of CBEC, the payment of the sanctioned refund amount in relation to CT/IT/Cess shall be made by the Central tax authority while payment of the sanctioned refund amount in relation to ST/UT would be made by the State tax/Union territory tax authority.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Therefore, the following documents (all enclosed), are being forwarded to The Pay & Accounts  for necessary action.</p>     
      
<p>(1)&nbsp;&nbsp;&nbsp;The Refund Orders (RFD-04) (mentioned at abvoe) duly attested by the Assistant Commissioner, CGST Div-II, Noida. </p>     
      
<p>(2)&nbsp;&nbsp;&nbsp;Payment Advices (RFD-05), duly signed by the CGST Authority (The Asstt. Commissioner, CGST Div-II, Noida/ Nodal Officer, CGST Noida).  </p>   
      
<p>(3)&nbsp;&nbsp;&nbsp;The sanction ID/Bill generated in PFMS,(signed in ink by the concerned DDO).</p>     
      
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In view of above, if deemed fit, the above mentioned amount may be sanctioned to the above said parties, on provisional basis.</p>      
      
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The same is put up for kind perusal/approval please.</p>      
</div>
 <br><br><br><br>
    <table><tr>
    <td style="text-align: left;">Inspector(R/R)</td>
    <td style="text-align: left;">Superintendent (R/R)</td></tr>
     </table>
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
        $('#NoteSheetAll').show();
      $('.page1').empty();
$('.header, .footer, .print').show();
		$('.rfd5').hide();   
            $.ajax({
                     method: 'POST',
                     url:  'NoteAll2.php',
                     data:$('#form_note').serialize(), 
                     success:function (data) {
                     	$('#NoteSheetAll').html(data);

                     }
                  });
          });

$('#Btn2').click(function (event) {
      event.preventDefault();
       $('.page1').empty();
$('.print').show();
  $('.header, .footer').hide();
  $('#NoteSheetAll').show();

          $.ajax({
                     method: 'POST',
                     url:  'RFD5.php',
                     data:$('#form_note').serialize(), 
                     success:function (data) {
                      $('#NoteSheetAll').html(data);

                     }
                  });
 });



	});
</script>