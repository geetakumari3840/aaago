<?php
session_start();
include "inca/connect.php";
if ($_SESSION['auser'] || $_SESSION['buser'] || $_SESSION['cuser']) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Language" content="hi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>New Navigation Bar</title>
        <link rel="stylesheet" href="inca/navbar.css">
        <style type="text/css">
                body {
                background-color: :white;}
        </style>
</head>
<body>

<?php 
 include "inca/header.php";
 include "inca/anavbar.php";
?>
<div id="isi">
	<div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3>HOME</h3>
              <p>Home Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
<div id="menu1" class="tab-pane fade">
     <p>menu1 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Menu 2Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Menu 3Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
		</div>
<?php include "inca/footer.php";?>
</div>

</body>
<?php
} else {
header ("location: index.php");
}
?> 