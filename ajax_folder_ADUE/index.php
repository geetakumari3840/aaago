
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="jquery_css_file/jquery-3.3.1.js"></script>
  <script src="jquery_css_file/myjs.js"></script>
   <link rel="stylesheet" href="jquery_css_file/w3.css"> 
   <link rel="stylesheet" href="jquery_css_file/mycss.css">   
   
</head>
<body>

<div class="w3-container">
   <h3 class="w3-text-green w3-xxlarge w3-center zoom" 
   style="text-shadow:3px 3px 0 #111;margin:0px;padding:0px;">
   Live Add Edit Delete Datatables Records using PHP Ajax</h3><br />
  <div class="w3-right">

  <button type="button" name="add" id="add" class="w3-button w3-blue 
  w3-round" >Add Record</button>
  </div>
  <br>  <br> 
  <div id="image_data">   </div>
</div>
</body>
</body>
</html> 



<!-- Add Image Modal -->

<div id="imageModal" class="w3-modal" >
  <div class="w3-modal-content w3-card-4"  style="width:40%">
    <header class="w3-container w3-white w3-card-4">
      <span class="close w3-button w3-text-red w3-xlarge w3-display-topright">&times;</span>
      <h4 class="w3-xlarge modal_title">Add Image</h4>
    </header>
    <div class="w3-container">
      <form id="image_form" method="post">
        <p><label>Select Image</label>
          <input type="file" name="image" id="image"/></p><br />
          <input type="hidden" name="action" id="action" value="insert" />
          <input type="hidden" name="image_id" id="image_id" />
          <input type="submit" name="insert" id="insert" value="insert" 
          class="w3-btn w3-red w3-round" />

      </form>
      <br>
    </div>
<!--    <footer class="w3-container w3-teal">
      <p>Power by Ajay</p>
    </footer> -->
  </div>
</div>

<!-- End Add Image Modal -->
