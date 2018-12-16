
<!-- SGST Letter Head Details -->
  <div class="table-responsive">
    <table align="center" class="table table-bordered" style="width: 100%;">
      <tr align="center" class="bg-warning">
        <td style="width: 14%;">
          <label>SGST Office File</label>
          <input type="text" id="NodalFile" 
          placeholder="File No." name="NodalFile" maxlength="4" 
          style="text-align: center;" va lue="1234"  autofocus required>
        </td>
        <td >
          <label>SGST Dispath Date</label>
          <input type="date"  id="NodalDate" 
          placehold er="File Date" name="NodalDate"  
          style="text-align: center;" va lue="3-2-2012" required>
        </td>
        <td>
          <label>CGST Receiving Date</label>
          <input type="date"  id="CGSTRDate" 
          placehol der="Forwarding Date" name="CGSTRDate" 
          style="text-align: center;" va lue="2012-3-2" required>
        </td>

        <td  style="width: 47%">
          <label>Name of Assessee</label><br>
          <input type="text"  list="browers" id="live" name="NameOfParty"
          placeholder="Name of Party" class="form-con trol live"  
          style="text-align: left;" size="70" required>
          <datalist id="browers"><div id="result"></div></datalist>
        </td>
        <td style="width: 7%;">
          <label>Khand</label>
          <input type="text"   id="Khand" va lue="12" 
          placeholder="No." maxlength="2" name="Khand" 
          style="text-align: center;" size="3" min=1 max=36 required></td>
      </tr>
    </table>
</div>
<div id="results"></div>
<div id="alert1" style="color:transparent;">ajay</div>
  <!-- Party Details -->
    
 <!--   <input type="hidden" id="Bank" name="Bank" va lue="ICICI Bank"> -->
 <div id="table-responsive">
    <table  id="crud_table"  align="center"  class="table table-bordered" style="width: 100%;">
  <tr class="bg-danger">
    <th colspan="2" style="text-align: center;">Refund Claim Period</th>
    <th colspan="2" style="text-align: center;">Sanction Order</th>
    <th rowspan="2" style="text-align: center;">ARN No.</th>
    <th rowspan="2" style="text-align: center;">ARN Date</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">C.G.S.T. <br>(In Rs.)</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">I.G.S.T. <br>(In Rs.)</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">Cess <br>(In Rs.)</th>
    <th style="width: 3%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">R.F.D. <br>Form</th>
    <th style="width: 3%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">Action</th>
  </tr>
       <tr class="bg-danger">
        <td style="width: 10%;text-align: center;" >From</td>
        <td style="width: 10%;text-align: center;" >To</td>
       
        <td style="width: 6%;text-align: center;" >No.</td>
        <td style="width: 15%;text-align: center;" >Date</td>
  </tr>
  <tr class="bg-info">
    <td><input class="RFDMonth" placeholder="MM" type="text"  maxlength="2" 
        size="2" va lue="1" required>
    <input type="text"  class="RFDYear" placeholder="YY" maxlength="2" 
        name="RFDYear"  size="2" va lue="17" required></td>
    <td><input type="text"  class="RFD2Month"  va lue="12" 
        placeholder="MM" maxlength="2" name="RFD2Month"  size="2" required>
    <input type="text"  class="RFD2Year"  va lue="18" 
        placeholder="YY" maxlength="2" name="RFD2Year"   size="2" required></td>
    <td><input type="text"  class="SanctionOrderNo"   size="3" va lue="12" 
        placeholder="1234" maxlength="4" name="SanctionOrderNo"></td>
    <td><input type="text"  class="SanctonOrderDay"   size="2" va lue="12" 
      placeholder="DD" maxlength="2" name="SanctonOrderDay" required>
    <input type="text"  class="SanctonOrderMonth"   size="2" va lue="12" 
    placeholder="MM" maxlength="2" name="SanctonOrderMonth" required>
    <input type="text"  class="SanctonOrderYear"   size="2" va lue="17" 
    placeholder="YY" maxlength="2" name="SanctonOrderYear" required></td>
    <td><input type="text"  class="ARN"   size="18" 
        placeholder="Application No." maxlength="15" name="ARN" required></td>
    <td><input type="text"  class="ARNDay"   size="2" 
      placeholder="DD" maxlength="2" name="ARNDay" required>
    <input type="text"  class="ARNMonth"   size="2" 
    placeholder="MM" maxlength="2" name="ARNMonth" required>
    <input type="text"  class="ARNYear"   size="2" 
    placeholder="YY" maxlength="2" name="ARNYear" required></td>
    <td><input type="text"  class="CGST"   size="8" va lue="12" 
        placeholder="In Rs." maxlength="9" name="CGST" required></td>
    <td><input type="text"  class="IGST"   size="8" va lue="12" 
        placeholder="In Rs." maxlength="9" name="IGST" required></td>
    <td><input type="text"  class="Cess"   size="8" va lue="0" 
        placeholder="In Rs." maxlength="9" name="Cess" required></td>
    <td><input type="text"  class="RFD"   size="2" va lue="4" 
        placeholder="4/6" maxlength="1" name="RFD" required></td>
    <td align="right">
        <button type="button" name="add_multi" id="add_multi" 
        class="btn btn-success btn-xs">+</button></td>
  </tr>
      
</table>
  
    <div class="row">
    <div class="col-lg-2"><button type="button" name="Party" id="Party" 
        class="btn btn-danger btn-sm disabled">Party</button></div>
    <div class="col-lg-8"><button id="save" type="submit" 
        class="btn btn-info btn-block">Save</button></div>
    <div class="col-lg-2" align="right"><button type="button" name="CAll" id="CAll" 
        class="btn btn-success btn-sm" >All Clear</button></div>
    </div>

      <br>
</div>
    <div id="insert_item_data"></div>
</div>
</div>
</body>  
</html>  
<!--////////////////////////////END HTML /////////////////////////////////-->

<!-- Add Data Model  --> 
 <div id="add_data_Modal" class="modal fade" >  
  <div class="modal-dialog">  
   <div class="modal-content">  
   <div class="modal-header btn-danger">  
  <button type="button" class="close" data-dismiss="modal">&times;</button>  
       <h4 class="modal-title" id="headingg">Add Assessee Details</h4>  
            </div> 
  <div class="modal-body  bg-danger">  
      <form method="post" id="insert_form">  
      <input  type="text" class="form-control"
              name="GSTIN" id="GSTIN" placeholder="GSTIN" required/> 
      <input  type="text" class="form-control"
              name="PartyName" id="PartyName" placeholder="Name of the Party" required/>
      <input  type="text" class="form-control"
              name="Address" id="Address" placeholder="Address" required/>
      <input  type="text" class="form-control"
              name="Mobile" id="Mobile" placeholder="Mobile No." />
      <input  type="text" list="browers1" class="form-control area"
              name="Area" id="Area" placeholder="Area Id" />
          <datalist id="browers1"><div id="AreaCode"></div></datalist>
       <input  type="text" class="form-control"
              name="Rangee" id="Rangee" placeholder="Range" />
        
 <select name="Division" id="Division" type="text" class="form-control" required>
                  <option value="" disabled selected>Division</option>
                  <option value="1">Division-I</option>
                  <option value="2">Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
 </select>

      <input  type="text" class="form-control"
              name="BankAc" id="BankAc" placeholder="Bank Account No." requ ired/>
      <input  type="text" class="form-control"
              name="BankName" id="BankName" placeholder="Bank'Name" requir eded/>
      <input  type="text" class="form-control"
              name="BankBranch" id="BankBranch" placeholder="Bank Branch" require ded/>
      <input  type="text" class="form-control"
              name="IFSC" id="IFSC" placeholder="IFS Code" requir eded/>
      <input  type="text" class="form-control"
              name="MICR" id="MICR"  placeholder="MICR" requir eded/>
              
<div><br>
  <div align="center"><input type="hidden" name="assessee_id" id="assessee_id"/>  
      <button  type="submit" name="insert" id="insert" 
              class="btn btn-danger" >Insert</button>
  </div>
  
     </div>
    </form>  
   </div>  
  </div>  
 </div> 
</div> 

<!-- CGST File Data Edit / View / Update -->
<!-- Add Data Model  --> 
 <div id="add_data_Modal2" class="modal fade" >  
      <div class="modal-dialog">  
       <div class="modal-content">  
       <div class="modal-header btn-danger">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title" id="headingg">SGST Data View /
                     Edit / Update</h4>  
                </div> 
  <div class="modal-body  bg-danger">  
  <form method="post" id="insert_form2">  
      <input  type="text" class="form-control"
              name="GSTIN" id="GSTIN1" placeholder="GSTIN" required/> 
      <input  type="text" class="form-control" name="NameOfParty1" id="NameOfParty1" placeholder="Name of the Party" required/>
      
        
 <select name="Division1" id="Division1" type="text" class="form-control" required>
                  <option value="" disabled selected>Division</option>
                  <option value="1">Division-I</option>
                  <option value="2">Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
 </select>
      <input  type="text" class="form-control"
              name="NodalFile" id="NodalFile1" placeholder="NodalFile" requireded/>
      <input  type="date" class="form-control"
              name="NodalDate" id="NodalDate1" placeholder="NodalDate" />
      <input  type='date' class='form-control' name='CGSTRDate' id='CGSTRDate1' placeholder='CGSTRDate' />
      <input  type='text' class='form-control' name='Khand' id='Khand1' placeholder='Khand' />
      <input  type='text' class='form-control' name='RFD' id='RFD1' placeholder='RFD' />
      <input  type='text' class='form-control' name='RFDMonth' id='RFDMonth1' placeholder='RFDMonth' />
      <input  type='text' class='form-control' name='RFDYear' id='RFDYear1' placeholder='RFDYear' />
      <input  type='text' class='form-control' name='SanctionOrderNo' id='SanctionOrderNo1' placeholder='SanctionOrderNo' />
      <input  type='date' class='form-control' name='SanctonOrderDay' id='SanctonOrderDate1' placeholder='Sancton Order Date' />
      <input  type='text' class='form-control' name='CGST' id='CGST1' placeholder='CGST' />
      <input  type='text' class='form-control' name='IGST' id='IGST1' placeholder='IGST' />
      <input  type='text' class='form-control' name='Cess' id='Cess1' placeholder='Cess' />

              
<div><br>
  <div align="center" ><input type="hidden" name="assessee_id" id="assessee_id"/>  
      <button  type="submit" name="insert" id="insert" 
              class="btn btn-danger xl" >Insert</button>
  </div>
       <!-- <div align="right">
    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> 
      </div> -->
     </div>
    </form>  
   </div>  
  </div>  
 </div> 
 <script src="pfiles/myjs.js"></script>  