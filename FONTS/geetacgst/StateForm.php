
<!-- SGST Letter Head Details -->
  <div class="table-responsive">
    <table align="center" class="table table-bordered" style="width: 100%;">
      <tr align="center" class="bg-warning">
        <td style="width: 14%;">
          <label>SGST Office Dispatch No.</label>
          <input type="text" id="NodalFile" 
          placeholder="Dispatch No." name="NodalFile" maxlength="4" 
          style="text-align: center;" va lue="1234"  autofocus required>
        </td>
        <td >
          <label>SGST Dispatch Date</label>
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

        <td  style="width: 54%">
          <label>Name of Assessee</label><br>
          <input type="text"  list="browers" id="live" name="NameOfParty"
          placeholder="Name of Party" class="form-con trol live"  
          style="text-align: left;" size="90" required>
          <datalist id="browers"><div id="result"></div></datalist>
        </td>

      </tr>
    </table>
</div>
<div id="results"></div>
<div id="alert1" style="color:transparent;">ajay</div>
  <!-- Party Details -->
    
 <!--   <input type="hidden" id="Bank" name="Bank" va lue="ICICI Bank"> -->
 <div id="ta ble-responsive">
    <table  id="crud_table"  align="center"  class="tab le t able-bordered" style="width: 100%;">
  <tr class="bg-danger">
    <th colspan="2" style="text-align: center;">Sanction Order</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">C.G.S.T.</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">I.G.S.T.</th>
    <th style="width: 7%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">Cess </th>
    <th style="width: 3%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">R.F.D.</th>
    <th colspan="2" style="text-align: center;">Refund Claim Period</th>
    <th rowspan="2" style="text-align: center;">ARN No.</th>
    <th rowspan="2" style="text-align: center;">ARN Date</th>
    <th style="width: 3%;text-align: center;margin: 0px;padding: 0px;" 
    rowspan="2">Action</th>
  </tr>
       <tr class="bg-danger">
        <td style="width: 6%;text-align: center;" >No.</td>
        <td style="width: 15%;text-align: center;" >Date</td>
        <td style="width: 10%;text-align: center;" >From</td>
        <td style="width: 10%;text-align: center;" >To</td>
       
        
  </tr>
  <tr class="bg-info">

    <td><input type="text"  class="SanctionOrderNo"   size="3" va lue="12" 
        placeholder="1234" maxlength="4" name="SanctionOrderNo"></td>
    <td><input type="text"  class="SanctonOrderDay"   size="2" va lue="12" 
      placeholder="DD" maxlength="2" name="SanctonOrderDay" required>
    <input type="text"  class="SanctonOrderMonth"   size="2" va lue="12" 
    placeholder="MM" maxlength="2" name="SanctonOrderMonth" required>
    <input type="text"  class="SanctonOrderYear"   size="2" va lue="17" 
    placeholder="YY" maxlength="2" name="SanctonOrderYear" required></td>
  <td><input type="text"  class="CGST"   size="8" va lue="12" 
        placeholder="In Rs." maxlength="9" name="CGST" required></td>
    <td><input type="text"  class="IGST"   size="8" va lue="12" 
        placeholder="In Rs." maxlength="9" name="IGST" required></td>
    <td><input type="text"  class="Cess"   size="8" va lue="0" 
        placeholder="In Rs." maxlength="9" name="Cess" required></td>
    <td><input type="text"  class="RFD"   size="2" va lue="4" 
        placeholder="4/6" maxlength="1" name="RFD" required></td>

    <td><input class="RFDMonth" placeholder="MM" type="text"  maxlength="2" 
        size="2" va lue="1" required>
    <input type="text"  class="RFDYear" placeholder="YY" maxlength="2" 
        name="RFDYear"  size="2" va lue="17" required></td>
    <td><input type="text"  class="RFD2Month"  va lue="12" 
        placeholder="MM" maxlength="2" name="RFD2Month"  size="2" required>
    <input type="text"  class="RFD2Year"  va lue="18" 
        placeholder="YY" maxlength="2" name="RFD2Year"   size="2" required></td>
    <td><input type="text"  class="ARN"   size="18" 
        placeholder="Application No." maxlength="15" name="ARN" required></td>
    <td><input type="text"  class="ARNDay"   size="2" 
      placeholder="DD" maxlength="2" name="ARNDay" required>
    <input type="text"  class="ARNMonth"   size="2" 
    placeholder="MM" maxlength="2" name="ARNMonth" required>
    <input type="text"  class="ARNYear"   size="2" 
    placeholder="YY" maxlength="2" name="ARNYear" required></td>
  
    <td align="right">
        <button type="button" name="add_multi" id="add_multi" 
        class="btn btn-success btn-xs">+</button></td>
  </tr>
      
</table>
  <br>
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
  <button type="button" class="close btn-success" data-dismiss="modal">Close</button>  
       <h4 class="modal-title" id="headingg">Add Assessee Details</h4>  
            </div> 
  <div class="modal-body  bg-danger">  
    <form method="post" id="insert_form">
      <div class="form-inline">
      <div  class="form-group">
      <input  type="text" class="form-control"  size="15" 
              name="GSTIN" id="GSTIN" placeholder="GSTIN" required/></div> 
      <div  class="form-group">        
      <input  type="text" class="form-control"  size="46" 
              name="PartyName" id="PartyName" placeholder="Name of the Party" required/></div>
      </div>
      <input  type="text" class="form-control"
              name="Address" id="Address" placeholder="Address" required/>
      <div class="form-inline">
      <div  class="form-group">
      <input  type="text" class="form-control"  size="15" 
              name="Mobile" id="Mobile" placeholder="Mobile No." /></div>
       <div  class="form-group">     
        <input  type="text" class="form-control"  size="46" 
              name="ContactPerson" id="ContactPerson" placeholder="Person Name" />
        </div>
      </div>
      <br><br>
      <div class="form-inline">
      <div  class="form-group"> 
      <input  type="text" list="browers1" class="form-control area"
              size="12" name="Area" id="Area" placeholder="Area Id" />
          <datalist id="browers1"><div id="AreaCode"></div></datalist></div>
             <div  class="form-group">  
       <input  type="text" class="form-control" size="12" 
              name="Rangee" id="Rangee" placeholder="Range" /></div>
             <div  class="form-group">  
        
 <select name="Division" id="Division"  type="text" class="form-control" required>
                  <option value="" disabled selected>Division</option>
                  <option value="1">Division-I</option>
                  <option value="2">Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
 </select>
</div>
             <div  class="form-group">  
      <input  type="text" class="form-control" size="12" 
              name="Khand1" id="Khand1" placeholder="Khand" required/></div>
             </div>
             <br><br>
  <div class="form-inline">
      <div  class="form-group"> 
      <input  type="text" class="form-control" name="BankAc" id="BankAc" placeholder="Bank Account No." requ ired  size="20" /></div>
      <div  class="form-group"> 
      <input  type="text" class="form-control" name="BankName" id="BankName" placeholder="Bank'Name"  size="40" requir eded/></div>
    </div>
      <input  type="text" class="form-control" name="BankBranch" id="BankBranch" placeholder="Bank Branch" require ded/>
      <div class="form-inline">
      <div  class="form-group"> 
      <input  type="text" class="form-control" name="IFSC" id="IFSC" placeholder="IFS Code" requir eded/></div>
      <div  class="form-group"> 
      <input  type="text" class="form-control" name="MICR" id="MICR"  placeholder="MICR" requir eded/></div>
      </div>
              
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
      <div class="modal-dialog ">  
       <div class="modal-content">  
       <div class="modal-header btn-warning">  
      <button type="button" class="close" data-dismiss="modal">&times;</button>  
      <h4 class="modal-title" id="headingg">SGST Data View /
                     Edit / Update</h4>  </div> 
  <div class="modal-body  bg-warning">  

  <form method="post" id="insert_form2">  
      <div class="form-inline">
      <div  class="form-group">
        <p style="margin: 0;padding: 0px;"><b>GSTIN</b></p>
       <input  type="text" class="form-control"  size="18" 
              name="GSTIN1" id="GSTIN1" required/></div> 
      <div  class="form-group">
       <p style="margin: 0;padding: 0px;"><b>Name of the Party</b></p>   
      <input  type="text" class="form-control"  size="50" 
              name="NameOfParty1" id="NameOfParty1" required/></div>
      </div>
      <div class="form-inline">
        <p style="margin: 0;padding: 0px;"><b>Address</b></p> 
              <input type="text" class="form-control" name="Address1" size="77" id="Address1" required/>
</div><br>
 <div class="form-inline">
   <div  class="form-group">
  <p style="margin: 0;padding: 0px;"><b>Division</b></p> 
     <select name="Division1" id="Division1"  type="text" class="form-control" required>
                  <option value="" disabled selected>Division</option>
                  <option value="1">Division-I</option>
                  <option value="2">Division-II</option>
                  <option value="3">Division-III</option>
                  <option value="4">Division-IV</option>
                  <option value="5">Division-V</option>
                  <option value="6">Division-VI</option>
      </select></div>
       <div  class="form-group">
      <p style="margin: 0;padding: 0px;"><b>Khand</b></p> 
<input  type='text' class='form-control' name='Khand2' size="6" id='Khand2'/></div>
 <div  class="form-group">
  <p style="margin: 0;padding: 0px;"><b>Nodal File</b></p> 
      <input  type="text" class="form-control" size="6" 
              name="NodalFile1" id="NodalFile1" requireded/></div>
   <div  class="form-group">
  <p style="margin: 0;padding: 0px;"><b>Nodal Date</b></p> 
      <input  type="text" class="form-control" size="10" 
              name="NodalDate1" id="NodalDate1"  /></div>
   <div  class="form-group">
    <p style="margin: 0;padding: 0px;"><b>SGST Date</b></p> 
      <input  type='text' class='form-control' size="10" name='CGSTRDate1' 
              id='CGSTRDate1' /> </div>            
    </div><br>
 <div class="form-inline">
  <div  class="form-group">
    <p style="margin: 0;padding: 0px;"><b>Month</b></p> 
       <input  type='text' class='form-control' size="4" name='RFDMonth1' id='RFDMonth1' placeholder='RFDMonth' /></div>
       <div  class="form-group">
        <p style="margin: 0;padding: 0px;"><b>Year</b></p> 
      <input  type='text' class='form-control' size="4" name='RFDYear1' id='RFDYear1' placeholder='RFDYear' /></div>
      <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>Month</b></p> 
      <input  type='text' class='form-control' size="4" name='RFD2Month1'         id='RFD2Month1'/></div>
      <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>Year</b></p> 
      <input  type='text' class='form-control' size="4" name='RFD2Year1' 
      id='RFD2Year1'/></div>
      <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>Order No</b></p> 
      <input  type='text' class='form-control' size="6.5" 
      name='SanctionOrderNo1' id='SanctionOrderNo1' /></div>
      <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>Order Date</b></p> 
      <input  type='text' class='form-control' size="10" 
            name='SanctionOrderDate1' id='SanctionOrderDate1'/></div>
      
 </div><br>
 <div class="form-inline">
  <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>CGST</b></p> 
  <input  type='text' class='form-control' size="15" name='CGST1' id='CGST1'/>
    </div>
      <div  class="form-group">
      <p style="margin: 0;padding: 0px;"><b>IGST</b></p> 
    <input  type='text' class='form-control' size="15" name='IGST1' id='IGST1'/></div>
           <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>Cess</b></p> 
    <input  type='text' class='form-control' size="15" name='Cess1' id='Cess1'  /></div>
      <div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>RFD</b></p> 
      <input  type='text' class='form-control' size="5" name='RFD1' id='RFD1' placeholder='RFD' /></div>
  </div><br>
 <div class="form-inline"><div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>ARN</b></p> 
<input  type='text' class='form-control' size="15" name='ARN1' id='ARN1'/></div>
<div  class="form-group">
          <p style="margin: 0;padding: 0px;"><b>ARN Date</b></p> 
<input  type='text' class='form-control' size="15" name='ARNDate1' id='ARNDate1'/>
 </div></div>
              
<div><br>
  <div align="center" ><input type="hidden" name="assessee_id2" id="assessee_id2"/>  
      <button  type="submit" name="insert" id="insert" 
              class="btn btn-warning xl" >Insert</button>
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