window.onload = function() {
$("body").addClass("boody");

};

$(document).ready(function(){
$(".aaa1").click(function() {
$("#xyz1").addClass("hr1");
$("#xyz1").html("<h6 class='w3-xxxlarge w3-amber w3-text-blue'>hei dfaj fk sjflj</h6>");
$("<h1>Hi there!</h1>").insertAfter("#followMe");
});

$(".aaa2").click(function() {
$("#xyz2").hide(2000);alert("The paragraph is now hidden");
});

$(".aaa3").click(function() {
$("#xyz3").hide(2000);
});

$(".aaa1").click(function(){
$('img').each(function(n){
this.alt='This is image['+n+'] with an id of '+this.id;
});
});

$(function(){ report(); });

function report() { $('#display').html($('#testSubject').
	width()+'<h1><b>x</b></h1>'+$('#testSubject').height());
}

});

$(document).ready(function() {

$("<div class='foo'>I have foo!</div><div>I don't</div>")
.filter(".foo").click(function() {
alert("I'm foo!");
}).end().appendTo("#someParentDiv");

});


