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
     return false;
  }
  </script>
  <style>
    body {
      font-family: "Times New Roman", Times, serif;
      font-style: normal;
      font-size: 11.5px;
      font-variant: normal;
      width: 900px;
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
    <td style="width: 7%;"><input type="number" class="form-control" 
        name="From_id" value="1" id="From_id" required>
    </td>
    <td style="width: 7%;"><input type="number" class="form-control" 
        name="To_id"  value="50" id="To_id" required>
    </td>
    <td style="width: 12%;"><select name="Div_id" id="Div_id" 
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
        <td style="width: 10%;"><input type="text" class="form-control" 
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
   <td>
        <button id="something" type="button" 
                class="btn btn-warning btn-xl">Refresh</button>
    </td>
    </tr>
</table>
</form>
</div>
<!--<a href="javascript:;" id="print">Open</a>-->
 <div class="print" style="display: none;text-align: center;"><br>
      <button type="button" class="btn btn-danger btn-xl" 
      onclick="PrintContent('page1')">Print</button>
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




<!---- pAYMENT ADVICE ---->

<div class="rfd5" style="display: none;"><br>
<table border="0" style="width: 900px; margin: auto;">
  <tr>
    <td>
      <img src="pfiles/logo.jpg" alt="ashok">
    </td>
    <td style="font-weight: bold;font-size: 13px;">
<span>कार्यालय सहायक आयुक्त </span><br>               
<span>OFFICE OF THE ASSISTANT COMMISSIONER</span> <br>              
<span>केन्द्रीय कर (वस्तु एवं सेवाकर और केन्द्रीय उत्पाद) मण्डल-II, नोएडा      </span>  <br>     
<span>CENTRAL TAX (GST & CENTRAL EXCISE) DIVISION-II, NOIDA </span><br>  
 <span style="font-size: 12px;">C-56/42, RENU TOWER, SECTOR-62, NOIDA / सी.-56/42, रेनू टावर, सेक्टर-६२, नोएडा  </span>               
    </td>
    <td>
      <img src="pfiles/gst.jpg" alt="GST">
    </td>
  </tr>
  <tr style="text-align: left;font-size: 11px;font-weight: normal;">
    <td colspan="2" style="text-align: left;">C.No. V(18)Ref/ CGST/Misc./StateOrder/N/D-II/207/17-18</td><td style="text-align: left;">  Dated:</td>
  </tr>
  <tr>
    <td colspan="3" style="font-weight: bold;">
      <span style="font-size:16px;"> FORM-GST-   RFD - 05</span><br>
                  [See rule 91(3), 92(4), 92(5) & 94]<br>
                  Payment Advice</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: left;">
      Payment Advice No: -            /AC/Div-II/CGST/Noida/18-19<br>
      To PAO, Central Tax (GST & Central Excise), Sector-62, Noida<br>
      <div style="color:transparent;font-size: 5px;">a</div>
      Refund Sanction Order No:.249/2018-19/DC12/GST/VAT/NOIDA<br>
      GSTIN : 09CZAPS4112C1ZP<br>
      M/s WEBCODE TREE TECHNOLOGY, A-24, sector-59, NOIDA<br>
            <div style="color:transparent;font-size: 5px;">a</div>
      Refund Amount (as per Order): for the month of अगस्त,2017</td>
    <td style="text-align: left;vertical-align: top;">
           Dated :<br> <br>        
           <div style="color:transparent;font-size: 5px;">a</div>
      Order Dated : 29.11.18
    </td>
  </tr>
</table > 
<table  border="1" style="width: 890px;
                          font-size:12px;
                          font-weight: bold;
                          margin: 0px auto;
                          padding: 0px;">
  <tr>
    <td rowspan="2" style="text-align: left;">Description</td>
    <td colspan="6">Integrated Tax </td>
    <td colspan="6">Central Tax</td>
    <td colspan="6">State/UT Tax</td>
    <td colspan="6">Cess</td>
  </tr>
  <tr style="margin: 0px;padding:0px;">
    <td>T</td>
    <td>I</td>
    <td>P</td>
    <td>F</td>
    <td>O</td>
    <td>Total</td>
    <td>T</td>
    <td>I</td>
    <td>P</td>
    <td>F</td>
    <td>O</td>
    <td>Total</td>
    <td>T</td>
    <td>I</td>
    <td>P</td>
    <td>F</td>
    <td>O</td>
    <td>Total</td>
    <td>T</td>
    <td>I</td>
    <td>P</td>
    <td>F</td>
    <td>O</td>
    <td>Total</td>
  </tr>
  <tr>
    <td style="text-align: left;">Net Refund Amount sanctioned</td>
    <td>1234567890</td><td>0</td><td>0</td><td>0</td><td>0</td><td>1234567890</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
  </tr>
    <tr>
    <td style="text-align: left;">Interest on delayed Refund</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
  </tr>
    <tr>
    <td style="text-align: left;">Total</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td>
  </tr>
</table>
<div style="width: 900px;margin: 0px auto;">Note – ‘T’ stands Tax; ‘I’ stands for Interest; ‘P’ stands for Penalty; ‘F’ stands for Fee and ‘O’ stands for Others</div>
<table  border="1" style="width: 600px;
                          font-size:12px;
                          margin: auto;
                          padding: 2px;">
<tr>
  <td colspan="3" style="text-align: center;font-weight: bold;">Details of the Bank</td>
</tr> 
<tr>
<td>i</td><td style="text-align: left;">
Bank Account no as per application</td>
<td style="text-align: left;font-weight: bold;">&nbsp;&nbsp;&nbsp;22222</td>
 </tr> 
 <tr>
<td>ii.</td><td style="text-align: left;">
Name of the Bank</td>
<td style="text-align: left;font-weight: bold;">&nbsp;&nbsp;&nbsp;11111</td>
 </tr>
  <tr>
<td>iii.</td><td style="text-align: left;">Name and Address of the Bank /branch</td>
<td style="text-align: left;font-weight: bold;">&nbsp;&nbsp;&nbsp;H-1A/1ZYGON SQUARE SECTOR 63, NOIDA</td>
 </tr>
  <tr>
<td>iv.</td><td style="text-align: left;">IFSC</td>
<td style="text-align: left;font-weight: bold;">&nbsp;&nbsp;&nbsp;111</td>
 </tr>
  <tr>
<td>v.</td><td style="text-align: left;">MICR</td>
<td style="text-align: left;font-weight: bold;">&nbsp;&nbsp;&nbsp;111111</td>
 </tr>
</table>

<table  border="0" style="width: 900px;margin: 0px auto;">
  <tr>
    <td style="text-align: left;">दिनांक :  <br>स्थान : नोएडा
</td><td style="width: 200px;"><br><br>
  (एन. के. तिवारी)   <br>        
सहायक आयुक्त (नोडल अधिकारी)      <br>    
वस्तु एवं सेवाकर मण्डल-II   <br>       
नोएडा         

</td>
  </tr>
</table>
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
$('.rfd5, .print').show();
  $('.header, .footer').hide();
 });



	});
</script>