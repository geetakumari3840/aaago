<?php
session_start();
include "pfiles/connect.php";
$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Div_id = $_POST['Div_id'];
$count = 0;
$output ='';
$query ="SELECT stateorderrefundii.GSTIN,
                stateorderrefundii.NameOfParty,
                stateassesseemaster.Address, 
                stateorderrefundii.Khand, 
                stateorderrefundii.SanctionOrderNo, 
                 stateorderrefundii.SanctionOrderDate, 
                stateorderrefundii.CGST, 
                stateorderrefundii.IGST, 
                stateorderrefundii.Cess, 
                stateorderrefundii.RFD, 
                stateorderrefundii.Division,
                stateorderrefundii.ARN,
                stateorderrefundii.RFDMonth, 
                stateorderrefundii.RFDYear,
                stateorderrefundii.RFD2Month, 
                stateorderrefundii.RFD2Year     
                FROM stateorderrefundii 
                INNER JOIN stateassesseemaster ON 
                stateorderrefundii.GSTIN=stateassesseemaster.GSTIN
                WHERE stateorderrefundii.SlNo BETWEEN $From_id AND $To_id 
               AND stateorderrefundii.Division  = $Div_id
                ORDER BY stateorderrefundii.SlNo DESC";
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result))
{
$count = $count + 1;
?>
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
      Payment Advice No: - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      /AC/Div-II/CGST/Noida/18-19<br>
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
  <?php      
}

?>

