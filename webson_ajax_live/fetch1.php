
  <?php

if(isset($_POST['search'])) {
    $servername = "localhost";
    $username = "2027387_salary";
    $password = "b4513.4513z";
    $dbase  = "refunddivii";
    $conn = mysqli_connect($servername, $username, $password, $dbase);

    $output = '';
    $search = $_POST['search'];
   // echo $search;
    $sql = "SELECT * FROM assesseemaster WHERE TradeName LIKE '".$search."%' 
    OR GSTIN LIKE '".$search."%' 
    OR Address LIKE '%".$search."%'
    ORDER BY TradeName";
    $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0)
        {
            
             $output .= '
                      <div class="table-responsive">  
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
                                   
                               </tr>';
            while($row = mysqli_fetch_array($result))
                {

              $output .='  
                          <tr>  
                          <td>'.$row["SlNo"].'</td>
                          <td>'.$row["GSTIN"].'</br>
                          <p class="text-danger" align="center">
                               '.$row["Authority"].'</p></td>
                          <td>'.$row["TradeName"].'</br>
                              '.$row["Address"].'</td>
                          <td>'.$row["RangeNo"].'</td>
                          <td>'.$row["BankAc"].'</td>
                          <td>'.$row["BankName"].'</br>
                              '.$row["BankBranch"].'</td>
                          <td>'.$row["IFSC"].'</br>
                              '.$row["MICR"].'</td>';
                if ($row["BankAc"] !="" and $row["GSTIN"] !="") 
                      {
   //               $output .='<td><input type="button" name="next" value="Next" 
  //                class="btn btn-success btn-xl next_data" id="'.$row["SlNo"].'"/></td>';
    $output .= '<td align="center"><input type="button" name="edit" value="Edit" class="btn btn-warning btn-xl edit_data" id="'.$row["SlNo"].'"/>
          <input type="button" name="next" value="Next" class="btn 
                    btn-info btn-xl next_data" id="'.$row["GSTIN"].'"/></td></tr>
                    ';                       }
                      else 
                      {
                  $output .= '<td><input type="button" name="edit" value="Add Bank Details" class="btn btn-danger btn-xl edit_data" id="'.$row["SlNo"].'"/></td></tr>';
                      }
                   
                    
            }
                $output .= '</table>';
            echo $output;
        }
        else
            {
    ?>
         <div align="center">  
<input type="button" name="add" value="Add ddddddddAssessee Details" id="add" class="btn btn-danger btn-xl add" /> </div> 

    <?php
            }
}
?>
<script>
  
  $(document).ready(function(){

    // Add Employee Data 

      $('.add').click(function(){  
           $('#insert').val("Inserthhhh"); 
           $('#headingg').text("Insert Records"); 
           $('#add_data_Modal').modal('show');
           $('#insert_form')[0].reset();  
      });  

   $('.next_data').click(function(){  
           $('#next_data').show();
             
      });  



  });
</script>