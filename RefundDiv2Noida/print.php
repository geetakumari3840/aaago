<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
<!-- <script>
	function PrintContent (el) {
		var restorepage = document.body.innerHTML;
		var PrintContent = document.getElementById(el).innerHTML;
		document.body.innerHTML = PrintContent;
		window.print();
		document.body.innerHTML = restorepage;

	}
</script> -->
</head>
<body>
<p>Click the button to open a new window, and assure that the new window GETS focus (send the new window to the front).</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  var myWindow = window.open("", "", "width=400,height=1000");
  myWindow.document.write("<p>A new window!</p>");
  myWindow.focus();
}
</script>
<!--
<h1>My Page</h1>
<div id="div1">Div 1 Content ....</div>
<button onclick="PrintContent('div1')">Print Content 1 div</button>
<div id="div2">Div 2 Content ....</div>
<button onclick="PrintContent('div2')">Print Content 2 div</button>
<div id="p1">Paragraph Content ....</div>
<button onclick="PrintContent('p1')">Print Content 1 Para</button> -->
</body>
</html>