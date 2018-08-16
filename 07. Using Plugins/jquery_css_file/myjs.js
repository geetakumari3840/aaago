http://localhost/aaago/07.%20Using%20Plugins/index.html

$(document).ready(function(){ 

$('#books').cycle({ timeout: 2000, speed: 200, pause: true });

var $books = $('#books');
var $controls = $('<div id="books-controls"></div>');
$controls.insertAfter($books);

$('<button>Pause</button>').click(function(event) { 
	event.preventDefault(); 
	$books.cycle('pause');
	$.cookie('cyclePaused', 'y');
	}).appendTo($controls);
	$('<button>Resume</button>').click(function(event) {
	event.preventDefault();
	$('ul:paused').cycle('resume');
	$.cookie('cyclePaused', null);
	}).appendTo($controls);

//READ DOCUMENT CLOSE 183

});