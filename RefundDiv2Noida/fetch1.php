
  <?php
//  session_start();
include "pfiles/connect.php";
//echo "hellow";
if(isset($_POST['search'])) {
//$connect = mysqli_connect("localhost", "2027387_salary", "b4513.4513z", "refunddivii");

    $output = "";
    $search = $_POST['search'];
   // echo $search;
$sql = "SELECT * FROM stateassesseemaster WHERE PartyName LIKE '%".$search."%'";
    $result = mysqli_query($connect,$sql);
        if (mysqli_num_rows($result)>0)
        {
             $output .= '
            <div class="table-responsive">  
                <table  align="center" class="table table-bordered" 
            style="width: 100%;">  
            <tr class="bg-success">                                          
              <th colspan="3"  style="width: 45%;text-align: center;">Assessee Details </th>
              <th colspan="3"  style="width: 40%;text-align: center;"> Bank details </th>
              <th  style="width: 15%;text-align: center;">Action</th> 
            </tr>';
            while($row = mysqli_fetch_array($result))
                {

              $output .=" 
  <input type='hidden' name='GSTIN1' id='GSTIN1' value='".$row["GSTIN"]."'/>
  <input type='hidden' name='NameOfParty' id='NameOfParty1' value='".$row["PartyName"]."'/>
  <input type='hidden' name='Address' id='Address1' value='".$row["Address"]."'/>
  <input type='hidden' name='Division1' id='Division1' value='".$row["Division"]."'/>

                  <tr>  
                  
                  <td style='width: 12%;'>".$row["GSTIN"]."</td>
                  <td style='width: 29%;text-align:left;'>".$row["PartyName"].",
                      ".$row["Address"]."</td>
                  <td style='width: 4%;color:red;'>Div-".$row["Division"]."</td>
                  <td style='width: 12%;'>".$row["BankAc"]."</td>
                  <td style='width: 23%;'>".$row["BankName"]."</br>
                      ".$row["BankBranch"]."</td>
                  <td style='width: 10%;'>".$row["IFSC"]."</br>
                      ".$row["MICR"]."</td>
     

                <td align='center'>
                <div   class='btn-group btn-group-sm'>
            <button type='button' class='btn btn-warning edit_data' 
              id='".$row['SlNo']."'>Edit </button>
              <button type='button' class='btn btn-danger delete_data' 
              id='".$row['SlNo']."'>Delete</button>
                    </div>
                          </td>
                          </tr>
                    ";                      
                      
                   
                    
            }
                $output .= '</table>';
            echo $output;
        }
        else
            {
    echo '
    <div align="center">  
<button type="button" class="btn btn-info btn-xl" id="add">Add Assessee Details</button> </div> ';

    
            }
}
?>
<script>
$(document).ready(function(){

 // Show Add Modal 
      $('#add').click(function(event){
            event.preventDefault();
           $('#insert').val("Insert"); 
           $('#headingg').text("Insert Records"); 
           $('#add_data_Modal').modal();
           $('#insert_form')[0].reset();  
      });  

// Update REcord 
      $(document).on('click', '.edit_data', function(){  
           var assessee_id = $(this).attr("id");   
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{assessee_id:assessee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#GSTIN').val(data.GSTIN);  
                     $('#Party').val(data.PartyName);  
                     $('#Address').val(data.Address);  
                     $('#Mobile').val(data.Mobile);  
                     $('#Area').val(data.Area);
                     $('#Div').val(data.Div);  
                     $('#BankAc').val(data.BankAc);
            //         $('#Authority').val(data.Authority);  
                     $('#BankName').val(data.BankName);  
                     $('#BankBranch').val(data.BankBranch);  
                     $('#IFSC').val(data.IFSC);    
                     $('#MICR').val(data.MICR);  
                     $('#assessee_id').val(data.SlNo);  
                     $('#insert').val("Update");
                     $('#headingg').text("Update Records");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
// Delete Records
 $(document).on('click', '.delete_data', function(){
  var delete_id = $(this).attr("id");
 // var image_name = $(this).data("image_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{delete_id:delete_id},
    success:function(data)
    {
   //  load_image_data();
     alert("Data Removed");
    }
   });
  }
 });

var GSTIN = $('#GSTIN1').val();
 if (GSTIN !='')
{
   $('#GSTIN1').css('background-color','red');
}
else
{
    alert ("Please Edit the Assessee Profile, GSTIN No. Blank");
}

  
var divval = $('#Division1').val();

if (divval == '2')
{
  $('.arnhiden').show();
}
else
{
   $('.arnhiden').hide();
}
//eng tag 
}); 
</script>
