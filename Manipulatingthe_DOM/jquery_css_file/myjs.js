$(document).ready(function() {
  // Use attr() to add an id, rel, and title.
//$("#h-title").addClass("w3-green");
$('#container').append('<p class="w3-jumbo w3-amber">Hello</p>');

$('#h-title').on('click', function(){
$('.title').addClass('w3-green');
$('.atitle').addClass('w3-purple');
});

});
