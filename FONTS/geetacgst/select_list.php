
  <?php
//echo "hellow";
//if(isset($_POST['search'])) {
//session_start();
  include "pfiles/connect.php";
    $output ='';
    //$search = $_POST['search'];
   // echo $search;
    $sql = "SELECT PartyName FROM stateassesseemaster ORDER BY PartyName";
    $result = mysqli_query($connect,$sql);
        if (mysqli_num_rows($result)>0)
        {
      
            while($row = mysqli_fetch_array($result))
            {
              $output .='<option value="'.$row["PartyName"].'">';
            
            }
            echo $output;
        }
        else
            {
    ?>
         <div align="center">  
              <input type="button" name="add" value="Add Assessee Details" 
              id="add" class="btn btn-danger btn-xl add" />
          </div> 

    <?php
            }
//}
?>