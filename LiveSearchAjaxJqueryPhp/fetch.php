
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
            //$output .= '<h4 align="center">Search Result</h4>';
            $output .= '</br><table class="w3-table-all w3-hoverable">
                            <tr class="w3-red">
                            <th>Sl.No.</th>
                            <th>GSTIN</th>
                            <th>Name of Party</th>
                            <th>Address</th>
                            <th>Range</th>
                            <th>Authority</th>
                            <th style="width:10%">Bank Name</th>
                            <th style="width:10%">Bank Account</th>
                            <th style="width:6%">Action</th>
                            </tr>';
            while($row = mysqli_fetch_array($result))
                {
                    $output .= '
                   <tr> <td>'.$row["SlNo"].'</td>
                    <td>'.$row["GSTIN"].'</td>
                    <td>'.$row["TradeName"].'</td>
                    <td>'.$row["Address"].'</td>
                    <td>'.$row["RangeNo"].'</td>
                    <td>'.$row["Authority"].'</td>
                    <td>'.$row["BankName"].'</td>
                    <td>'.$row["BankAc"].'</td>';

                if ($row["BankAc"] !="" and $row["GSTIN"] !="") {
                    $output .=  '<td><button  id="'.$row["SlNo"].' " type="button" class="nex_t btn btn-success btn-block btn-xs">Next</button></td>';
                }
                else {
                    $output .=  '<td><button type="button" class="btn btn-block btn-warning btn-xs edit11" id="'.$row["SlNo"].'">Edit</button></td>';
                }
                     $output .='</tr>';
                
                
            }
                $output .= '</table>';
            echo $output;
        }
        else
            {
    ?>
    <div class="w3-center">
      <br>
     <button type="button" class="btn btn-block btn-danger btn-lg" data-toggle="modal" data-target="#Addform">Add Assessee Profile</button>
</div>
 
 <p id="test1">This is a paragraph.</p>
<p id="test2">This is another paragraph.</p>
<p>Input field: <input type="text" id="test3" value="Mickey Mouse"></p>

<button id="btn1">Set Text</button>
<button id="btn2">Set HTML</button>
<button id="btn3">Set Value</button>

    <?php
            }
}
?>

<script >
    
$(document).ready(function(){

    $("#btn1").click(function(){
        $("#test1").text("Hello world!");     });
    $("#btn2").click(function(){
        $("#test2").html("<b>Hello world!</b>");      });
    $("#btn3").click(function(){
        $("#test3").val("Dolly Duck");     });                            

/*/ Add bank Account
  $(document).on('click', '.edit11', function(){
  var Bank_id = $(this).attr("id");
  $.ajax({
   url:"AddBank.php",
   method:"post",
   data:{Bank_id:Bank_id},
   dataType:"json",
   success:function(data)
   {
    $('#Addform2').modal('show');
    $('#Bank_id').val(Bank_id);
    $('#BankName').val(data.BankName);
    $('#BankAc').val(data.BankAc);
    $('#IFSC').val(data.IFSC);
    $('#MICR').val(data.MICR);
   }
  });
 });
*/

$(".edit11").click(function(event){
     event.preventDefault();
     
           var Bank_id = $(this).attr("id");
        $('#SlNo').val(Bank_id);
         //$('#result2').text(Bank_id).show(2000);
           //$('#Addform2').modal('show');
              $.ajax({
               url:"AddBank.php",
               method:"post",
               data:{Bank_id:Bank_id},
               dataType:"json",
               success:function(data)
               {
                $('#result2').text(Bank_id).show(2000);
                $('#Addform2').modal('show');
                //$('#result2').addClas('w3-red');
                $('#SlNo').val(Bank_id);
                $('#BankName').val(data.BankName);
                $('#BankAc').val(data.BankAc);
                $('#IFSC').val(data.IFSC);
                $('#MICR').val(data.MICR);
               }
              });
                   
    });
});
</script>