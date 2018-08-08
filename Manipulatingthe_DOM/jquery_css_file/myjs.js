$(document).ready(function() {
  // Use attr() to add an id, rel, and title.
//$("#h-title").addClass("w3-green");
$('#container').append('<p class="w3-jumbo w3-amber">Hello</p>');

$('#h-title').on('click', function(){
$('.title').addClass('w3-green');
$('.atitle').addClass('w3-purple');
});

// inter back to top
$('<a href="#top">back to top</a>').insertAfter('div.chapter p');
$('<a id="top"></a>').prependTo('body');
$('span.footnote').insertBefore('#footer')
.wrapAll('<ol id="notes"></ol>')
.wrap('<li></li>');




});
