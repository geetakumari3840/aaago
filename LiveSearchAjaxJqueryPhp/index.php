<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LiveSearchAjaxSqlPhp</title>
    
    <link rel="stylesheet" href="jquery_css_file/w3.css" type="text/css" />
    <link rel="stylesheet" href="jquery_css_file/mycss.css" type="text/css" />
    
    <script src="jquery_css_file/jquery-3.3.1.js"></script>
    <script src="jquery_css_file/myjs.js"></script>
    
  </head>
<body>
    <div class="w3-container w3-center">
      <h1 >Live Search Data - Ajax SQL PHP Jquery HTML</h1>
      <input type="text" id="live"  name="live" placeholder="Type Some word" />
    </div>
    <button  class="Add w3-red w3-button">Aaago</button>
  <div id="result"></div>
  <div id="result2"></div>
</body>
</html>
<!-- http://localhost/aaago/LiveSearchAjaxJqueryPhp/index.html -->

<div id="AddBankf" class="w3-modal" >
  <div class="w3-modal-content w3-card-4"  style="width:40%">
    <header class="w3-container w3-white w3-card-4">
      <span class="close w3-button w3-text-red w3-xlarge w3-display-topright">&times;</span>
      <h4 class="w3-xlarge modal_title">Add Bank Details</h4>
    </header>
    <div class="w3-container"><br>
      <form id="AddBankM" method="post">
          
        <input class="w3-input w3-border w3-round" type="text" 
                name="BankAc" placeholder="Bank Account No." required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="BankName" placeholder="Bank'Name" required/>
       <input class="w3-input w3-border w3-round" type="text" 
                name="BankBranch" placeholder="Bank Branch" required/>

        <input class="w3-input w3-border w3-round" type="text" 
                name="IFSC" placeholder="IFS Code" required/>
        <input class="w3-input w3-border w3-round" type="text" 
                name="MICR" placeholder="MICR" required/>
                <br>
      <tr class="w3-center"> <input type="submit2" name="insert2" id="insert2" value="Insert" 
          class="w3-btn w3-red w3-round w3-center" />
         
          
      </form>
      <br>
    </div>
<!--    <footer class="w3-container w3-teal">
      <p>Power by Ajay</p>
    </footer> -->
  </div>
</div>