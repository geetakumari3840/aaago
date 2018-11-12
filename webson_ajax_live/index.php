 
 <!DOCTYPE html>  
 <html>  
  <head>  
      <title>Live Ajax Data</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <!-- offline  -->
  <script src="jquery.min.js"></script>  
  <link rel="stylesheet" href="bootstrap.min.css" />  
  <script src="bootstrap.min.js"></script> 
  <script src="jquery-3.3.1.js"></script>
  <script src="myjs.js"></script>  
  </head>  

<body style="margin: 0px;padding: 0px;">  
        
    <div class="container" style="width:100%;">  
          <h3 align="center" class="text-danger">
          Central Goods &amp; Service Tax, Division-II, Noida</h3>
          <h2 align="center"  class="text-blue">Refund Branch</h2>   
    </div> 
<!-- Search Result -->
    <div align="center" class="container">
     <input style ="width:50%;margin:auto;" class="form-control" type="text" id="live"  name="live" placeholder="Type Some word" />
    </div>
<!-- Search Result END --><br>
    <div class="container"  id="result"></div>
<!-- Next Steps -->
    <div class="container" id="next_data" style="display: none;">
        <form class="form-inline" action="/action_page.php">
        <div class="form-group">
        <input type="text" class="form-control" id="khand" placeholder="Khand" name="khand">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="Khand_File" placeholder="File No." 
        name="Khand_File">
        </div>
        <div class="input-group date" data-provide="datepicker">
        <input type="date" class="form-control" name="Khand_Date" id="Khand_Date" placeholder="File Date">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="Division" placeholder="Division No." 
        name="Khand_File">
        </div>
        <div class="input-group date" data-provide="datepicker">
        <input type="date" class="form-control" name="Current_Date" id="Khand_Date" placeholder="Current Date">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" id="RecNo" placeholder="No. of Rows " 
        name="Khand_File">
        </div>
         <div class="form-group">
        <input type="button" id="submit2" value="Months" class="btn btn-default">
         </div>
    
<!-- Next Steps END-->
<!-- Second Steps 
<div class="container" id="second_step" methord="post" action="" style="display:none;">-->
  <table  class="table table-striped">
    <thead>
	<tr>
      <th rowspan="2">Month</th>
      <th rowspan="2">ARN No.</th>
      <th colspan="2">SGST Sanctioned vide</th>
      <th colspan="3">Sanctioned Amount (in Rs.)</th>
    </tr>
    <tr>
      <th>Order No.</th>
      <th>Dated</th>
      <th>IGST</th>
      <th>CGST</th>
      <th>Cess</td>
    </tr>
	</thead>
    <tbody>
	<tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
    </tr>
    <div id="ntable"></div>
  </tbody>
  </table>
   </form>
</div>
<!-- Second Steps End-->

</body>  
</html>  

<!-- Vew purpose -->
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail"> </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
<!-- Vew purpose end  -->

<!-- Add Data Model  --> 
 <div id="add_data_Modal" class="modal fade">  
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
                name="TradeName" id="TradeName" placeholder="Name of the Party" required/>
      <input  type="text" class="form-control"
                name="Address" id="Address" placeholder="Address" requireded/>
      <input  type="text" class="form-control"
                name="Mobile" id="Mobile" placeholder="Mobile No." />
      <input  type="text" class="form-control"
                name="Email" id="Email"placeholder="Email Id" />
        
            <select name="RangeNo" id="RangeNo" type="text" class="form-control" required>
                  <option value="" disabled selected>Range</option>
                  <option value="06">Range 06</option>
                  <option value="07">Range 07</option>
                  <option value="08">Range 08</option>
                  <option value="09">Range 09</option>
                  <option value="10">Range 10</option>
                 </select>

      <input  type="text" class="form-control"
                name="BankAc" id="BankAc" placeholder="Bank Account No." required/>
      <input  type="text" class="form-control"
                name="BankName" id="BankName" placeholder="Bank'Name" requireded/>
      <input  type="text" class="form-control"
                name="BankBranch" id="BankBranch" placeholder="Bank Branch" requireded/>
      <input  type="text" class="form-control"
                name="IFSC" id="IFSC" placeholder="IFS Code" requireded/>
      <input  type="text" class="form-control"
                name="MICR" id="MICR"  placeholder="MICR" requireded/>
              
              <div>
            <br>
          <div align="left"><input type="hidden" name="assessee_id" id="assessee_id"/>  
  <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-danger" />
        </div>
        <div align="right">
    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button> 
      </div>
     </div>
    </form>  
   </div>  
  </div>  
 </div> 
</div> 
 <!-- Add Data Model End --> 


 