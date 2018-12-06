
<!-- SGST Letter Head Details -->
 <div style="text-align: center;background-color: pink;padding: 5px;">
      <form method="post" id="Central_form">  
      
      <input  type="text" class="form-contr ol live1" size="30"
              name="CPartyName" list="browers"  id="CPartyName" placeholder="Name of the Party" required/>
               <datalist id="browers"><div id="result"></div></datalist>
      <input  type="text" class="form-contr ol" size="45"
              name="CAddress" id="CAddress" placeholder="Address" required/>
      <input  type="text" class="form-contr ol" size="15"
              name="CGSTIN" id="CGSTIN" placeholder="GSTIN" required/> 
      <input  type="text" class="form-contr ol" size="2"
              name="CDivision" id="CDivision" placeholder="Div" required/>
      <input  type="text" class="form-contr ol" id="DisNo" size="6"
              name="DisNo" placeholder="Dispatch No." required/>
      <input  type="text" class="form-contr ol" size="1"
              name="DisDay" id="DisDay" placeholder="DD" required/>
      <input  type="text" class="form-contr ol" size="1"
              name="DisMonth" id="DisMonth" placeholder="MM" required/>
      <input  type="text" class="form-contr ol" size="1"
              name="DisYear" id="DisYear" placeholder="YY" required/>

      <input  type="text" class="form-contr ol" id="SanNo"  size="6"
              name="SanNo" placeholder="Sanction No." required/>
      <input  type="text" class="form-contr ol" size="1"
              name="SanDay" id="SanDay" placeholder="DD" required/>
      <input  type="text" class="form-contr ol" size="1"
              name="SanMonth" id="SanMonth" placeholder="MM" required/>
      <input  type="text" class="form-contr ol" size="1"
              name="SanYear" id="SanYear" placeholder="YY" required/>

      <input  type="text" class="form-contr ol" size="8"
              name="SGST" id="SGST"  placeholder="Amount" required/>
      <input  type="text" class="form-contr ol" size="1"
              name="RFD" id="RFD"  placeholder="RFD" required/>
     
     <input type="hidden" name="assessee_id" id="assessee_id"/>  
     <button  type="submit" name="insert" id="insert" class="btn btn-info btn-sm">Insert</button>
      </form>  
  </div>
  <br>

   <div id="insert_item_data"></div>
 <script src="pfiles/myjs2.js"></script>  