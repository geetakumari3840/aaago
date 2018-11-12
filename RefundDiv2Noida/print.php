<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
<script>
	function PrintContent (el) {
		var restorepage = document.body.innerHTML;
		var PrintContent = document.getElementById(el).innerHTML;
		document.body.innerHTML = PrintContent;
		window.print();
		document.body.innerHTML = restorepage;

	}
</script>
</head>
<body>
<h1>My Page</h1>
<div id="div1">Div 1 Content ....</div>
<button onclick="PrintContent('div1')">Print Content 1 div</button>
<div id="div2">Div 2 Content ....</div>
<button onclick="PrintContent('div2')">Print Content 2 div</button>
<div id="p1">Paragraph Content ....</div>
<button onclick="PrintContent('p1')">Print Content 1 Para</button>
</body>
</html>