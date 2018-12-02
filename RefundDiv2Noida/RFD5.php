<?php
session_start();
include "pfiles/connect.php";
$From_id = $_POST['From_id'];
$To_id = $_POST['To_id'];
$Div_id = $_POST['Div_id'];
$count = 0;
$output ='';
$query ="SELECT printpayment.GSTIN,
                printpayment.NameOfParty,
                stateassesseemaster.Address,
                stateassesseemaster.BankName,
                stateassesseemaster.BankAc,
                stateassesseemaster.BankBranch,
                stateassesseemaster.IFSC,
                stateassesseemaster.MICR,
                printpayment.Khand, 
                printpayment.SanctionOrderNo, 
                printpayment.SanctionOrderDate, 
                printpayment.CGST, 
                printpayment.IGST, 
                printpayment.Cess, 
                printpayment.RFD, 
                printpayment.Division,
                printpayment.ARN,
                printpayment.RFDMonth, 
                printpayment.RFDYear,
                printpayment.RFD2Month, 
                printpayment.RFD2Year     
                FROM printpayment 
                INNER JOIN stateassesseemaster ON 
                printpayment.GSTIN=stateassesseemaster.GSTIN
                WHERE printpayment.SlNo BETWEEN $From_id AND $To_id 
               AND printpayment.Division  = $Div_id
                ORDER BY printpayment.SlNo DESC";
$result = mysqli_query($connect, $query);

while ($row = mysqli_fetch_array($result))
{
$count = $count + 1;
?>
 <script src="pfiles/printThis.js"></script>
<table border="0" style="width: 900px; margin: auto;">
  <tr>
    <td>
      <img src="http://localhost/aaago/RefundDiv2Noida/images/logo.jpg" alt="ashok">
    </td>
    <td style="font-weight: bold;font-size: 13px;">
<span>कार्यालय सहायक आयुक्त </span><br>               
<span>OFFICE OF THE ASSISTANT COMMISSIONER</span> <br>              
<span>केन्द्रीय कर (वस्तु एवं सेवाकर और केन्द्रीय उत्पाद) मण्डल-II, नोएडा      </span>  <br>     
<span>CENTRAL TAX (GST & CENTRAL EXCISE) DIVISION-II, NOIDA </span><br>  
 <span style="font-size: 12px;">C-56/42, RENU TOWER, SECTOR-62, NOIDA / सी.-56/42, रेनू टावर, सेक्टर-६२, नोएडा  </span>               
    </td>
    <td>
      <img src="http://localhost/aaago/RefundDiv2Noida/images/gst.jpg" alt="GST">
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
      <span>Refund Sanction Order No:.</span>
      <?php echo htmlspecialchars($row['SanctionOrderNo']) ?>
      <span>/2018-19/DC</span>
      <?php echo htmlspecialchars($row['Khand']) ?>
      <span>/GST/VAT/NOIDA</span><br>
      <span>GSTIN : </span>
      <?php echo htmlspecialchars($row['GSTIN']) ?><br>
      <?php echo htmlspecialchars($row['NameOfParty']) ?>
      <span>,&nbsp;</span>
      <?php echo htmlspecialchars($row['Address']) ?>
      <br><div style="color:transparent;font-size: 5px;">_</div>
      <span>Refund Amount (as per Order): for the period of</span>
      <?php 
        $chmonth1 = $row['RFDMonth'];
        $chmonth2 = $row['RFD2Month'];
        $chyear1 = $row['RFDYear'];
        $chyear2 = $row['RFD2Year'];
switch ($chmonth1) {
    case "1":
        $chmonth11 = "JAN";
        break;
    case "2":
        $chmonth11 = "FEB";
        break;
    case "3":
        $chmonth11 = "MAR";
        break;
    case "4":
        $chmonth11 = "APR";
        break;
    case "5":
        $chmonth11 = "MAY";
        break;
    case "6":
        $chmonth11 = "JUN";
        break;
    case "7":
        $chmonth11 = "JUL";
        break;
    case "8":
        $chmonth11 = "AUG";
        break;
    case "9":
        $chmonth11 = "SEP";
        break;
    case "10":
        $chmonth11 = "OCT";
        break;
    case "11":
        $chmonth11 = "NOV";
        break;
    case "12":
        $chmonth11 = "DEC";
        break;
    default:
        $chmonth11 = "NA";
}
switch ($chmonth2) {
    case "1":
        $chmonth22 = "JAN";
        break;
    case "2":
        $chmonth22 = "FEB";
        break;
    case "3":
        $chmonth22 = "MAR";
        break;
    case "4":
        $chmonth22 = "APR";
        break;
    case "5":
        $chmonth22 = "MAY";
        break;
    case "6":
        $chmonth22 = "JUN";
        break;
    case "7":
        $chmonth22 = "JUL";
        break;
    case "8":
        $chmonth22 = "AUG";
        break;
    case "9":
        $chmonth22 = "SEP";
        break;
    case "10":
        $chmonth22 = "OCT";
        break;
    case "11":
        $chmonth22 = "NOV";
        break;
    case "12":
        $chmonth22 = "DEC";
        break;
    default:
        $chmonth22 = "NA";
}
$FromP = ($chmonth11.'-'.$chyear1);
$ToP = ($chmonth22.'-'.$chyear2);
    if ($FromP != $ToP)
    {
 echo $FromP.' to '.$ToP;
    }
    else
    {
     echo $FromP;
    }



      ?>


      </td>
      <td style="text-align: left;vertical-align: top;">
      Dated :<br> <br>        
      <div style="color:transparent;font-size: 5px;">_</div>
      <span>Order Dated :&nbsp;</span>
      <?php echo date('d-m-Y', strtotime($row['SanctionOrderDate'])) ?>
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
    <td><?php echo htmlspecialchars($row['IGST']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['IGST']) ?></td>
    <td><?php echo htmlspecialchars($row['CGST']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['CGST']) ?></td>
    <td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td>
    <td><?php echo htmlspecialchars($row['Cess']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['Cess']) ?></td>
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
    <td><?php echo htmlspecialchars($row['IGST']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['IGST']) ?></td>
    <td><?php echo htmlspecialchars($row['CGST']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['CGST']) ?></td>
    <td>0</td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td>0</td>
    <td><?php echo htmlspecialchars($row['Cess']) ?></td>
    <td>0</td><td>0</td><td>0</td><td>0</td>
    <td><?php echo htmlspecialchars($row['Cess']) ?></td>
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
<td style="text-align: left;font-weight: bold;">&nbsp;
<?php echo htmlspecialchars($row['BankAc']) ?></td>
 </tr> 
 <tr>
<td>ii.</td><td style="text-align: left;">
Name of the Bank</td>
<td style="text-align: left;font-weight: bold;">&nbsp;
<?php echo htmlspecialchars($row['BankName']) ?></td>
 </tr>
  <tr>
<td>iii.</td><td style="text-align: left;">Name and Address of the Bank /branch</td>
<td style="text-align: left;font-weight: bold;">&nbsp;
<?php echo htmlspecialchars($row['BankBranch']) ?></td>
 </tr>
  <tr>
<td>iv.</td><td style="text-align: left;">IFSC</td>
<td style="text-align: left;font-weight: bold;">&nbsp;
<?php echo htmlspecialchars($row['IFSC']) ?></td>
 </tr>
  <tr>
<td>v.</td><td style="text-align: left;">MICR</td>
<td style="text-align: left;font-weight: bold;">&nbsp;
<?php echo htmlspecialchars($row['MICR']) ?></td>
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

