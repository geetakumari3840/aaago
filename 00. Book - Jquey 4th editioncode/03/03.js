// This is the custom JavaScript file referenced by index.html. You will notice
// that this file is currently empty. By adding code to this empty file and
// then viewing index.html in a browser, you can experiment with the example
// page or follow along with the examples in the book.
//
// See README.txt for more information.
$(document).ready(function() {
var $speech = $('div.speech');
$('#switcher button').click(function() {
	var num = parseFloat($speech.css('fontSize'));
if (this.id == 'switcher-large') {
num *= 1.4;
} else if (this.id == 'switcher-small') {
num /= 1.4;
}
$speech.css('fontSize', num + 'px');
});
});