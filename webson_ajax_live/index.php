<?php  
 $connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");  
 $query = "SELECT * FROM assesseemaster ORDER BY SlNo DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Live Ajax Data</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <!-- offline -->
        <script src="jquery.min.js"></script>  
        <link rel="stylesheet" href="bootstrap.min.css" />  
        <script src="bootstrap.min.js"></script>  
           <script src="myjs.js"></script>  
      </head>  
      <body style="margin: 0px;padding: 0px;">  
           <br /><br />  
           <div class="container" style="width:100%;">  
                <h3 align="center" class="text-danger">Central Goods & Service Tax, Division-II, Noida</h3>
                <h2 align="center"  class="text-blue">Refund Branch</h2>   
                <br />  
                <div class="table-responsive">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-danger">Add</button>  
                     </div>  
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr class="bg-info">                                          
                                    <th>Sl.No.</th>
                                    <th align="center">GSTIN <br>Authority</th>
                                    <th>Name of Party<br>Address</th>
                                    <th>Range</th>
                                    <th>Bank Account</th>
                                    <th>Bank Name</br>Bank Branch</th>
                                    <th>IFSC</br>MICR</th>
                                    <th>Action</th> 
                                    <th>Action</th> 
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["SlNo"]; ?></td>
                                    <td><?php echo $row["GSTIN"]; ?></br>
                                    <p class="text-danger" align="center"><?php echo $row["Authority"]; ?></p></td>
                                    <td><?php echo $row["TradeName"]; ?></br>
                                    <?php echo $row["Address"]; ?></td>
                                    <td><?php echo $row["RangeNo"]; ?></td>
                                    <td><?php echo $row["BankAc"]; ?></td>
                                    <td><?php echo $row["BankName"]; ?></br>
                                    <?php echo $row["BankBranch"]; ?></td>
                                    <td><?php echo $row["IFSC"]; ?></br>
                                    <?php echo $row["MICR"]; ?></td>

                               <?php       
                                  if ($row["BankAc"] !="" and $row["GSTIN"] !="") {
                   echo  '<td><button  id="'.$row["SlNo"].' " type="button" class="nex_t btn btn-success btn-block btn-xs">Next</button></td>';
                              }
                              else {
                    echo  '<td><input type="button" name="view" value="Edit" class="btn btn-warning btn-xl edit_data" id="'.$row["SlNo"].'"/></td>';
                                  }
                   
                          echo '<td><input type="button" name="view" value="view" class="btn btn-info btn-xs view_data" id="'.$row["SlNo"].'"/></td></tr>';
                               }  

                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
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
                <div class="modal-body" id="employee_detail">  
                </div>  
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
                     <h4 class="modal-title">PHP Ajax Update MySQL Data Through Bootstrap Modal</h4>  
                </div>  
                <div class="modal-body  bg-danger">  
                     <form method="post" id="insert_form">  
                           
      <input  type="text" class="form-control"
                name="GSTIN" placeholder="GSTIN" required/> 
        <input  type="text" class="form-control"
                name="TradeName" placeholder="Name of the Party" required/>
        <th ><input  type="text" class="form-control"
                name="Address" placeholder="Address" required/>
        <input  type="text" class="form-control"
                name="Mobile" placeholder="Mobile No." />
        <input  type="text" class="form-control"
                name="Email" placeholder="Email Id" />
        
<select name="RangeNo" type="text" class="form-control" required>
                  <option value="" disabled selected>Range</option>
                  <option value="6">Range 6</option>
                  <option value="7">Range 7</option>
                  <option value="8">Range 8</option>
                  <option value="9">Range 9</option>
                  <option value="10">Range 10</option>
                 </select>

        <input  type="text" class="form-control"
                name="BankAc" placeholder="Bank Account No." required/>
        <input  type="text" class="form-control"
                name="BankName" placeholder="Bank'Name" required/>
       <input  type="text" class="form-control"
                name="BankBranch" placeholder="Bank Branch" required/>

        <input  type="text" class="form-control"
                name="IFSC" placeholder="IFS Code" required/>
        <input  type="text" class="form-control"
                name="MICR" placeholder="MICR" required/>
                <div class="w3-center"><br>  
        <input type="hidden" name="SlNo" id="SlNo" />  
        <input type="submit" name="insert" i d="insert" value="Insert" class="btn btn-danger" />    </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div> 
 <!-- Add Data Model End --> 


 