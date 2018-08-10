$(document).ready(function() {
$('#switcher-default').addClass('w3-green')
$('#switcher-large, #switcher-small, #switcher-test').addClass('w3-purple')
//$('#switcher-small').addClass('w3-purple')
$('#appHtml').append('<p>Hello</p>');
$('#switcher button').on('click', function() {
  $('.speech').removeClass('large narrow');
$('#switcher button').addClass('w3-purple');
$(this).removeClass('w3-purple').addClass('w3-green');
});


$('#switcher-large').on('click', function() {
  $('.speech').addClass('large');
});
  

$('#switcher-small').on('click', function() {
  $('.speech').addClass('narrow');
});

// end navigatin bar

// start h3 heading

$('#switcher h3').click(function() {
$('#switcher button').toggleClass('hidden'); 
});

$('#switcher h3').hover(function() {
$(this).addClass('hover'); 
}, function(){

$(this).removeClass('hover'); 
});

});
// font size big or small 
$(document).ready(function(){

var $speech = $('div.speech');
var defultSize = $speech.css('fontSize');
$('#switcher button').click(function(){
  var num = parseFloat($speech.css('fontSize'));
  switch (this.id) {
    case 'switcher-large':
    num *=1.4;
    break;
    case 'switcher-small':
    num /=1.4;
    break;
    default :
    num = parseFloat(defultSize);
                  }
  $speech.css('fontSize',num + 'px');
    });
});
// End font size big or small 


// read more 
$(document).ready(function() {
var $firstPara = $('p').eq(1);
$firstPara.hide();
$('a.more').click(function(event) {
event.preventDefault();
$firstPara.animate({
opacity: 'toggle',
height: 'toggle'
}, 'slow');
var $link = $(this);
if ($link.text() == 'read more') {
$link.text('read less');
} else {
$link.text('read more');
}
});
});
// end read more

// open html file on button click 

$(document).ready(function(){

  $('#switcher-default').click(function(event) {
    event.preventDefault();
    $('#appHtml').load('other_files/1html.html');
  });

$('#switcher-large').click(function(event) {
    event.preventDefault();
    $('#appHtml').load('other_files/2html.html');
  });

  
  $('#switcher-small').click(function(event) {
    event.preventDefault();
    $('#appHtml').load('other_files/3html.html');
  });
});
// end open html file on button click 

$(document).ready(function() {
$('#switcher-test').click(function() {
var paraWidth = $('#appHtml').outerWidth();
var $switcher = $(this).parent();
var switcherWidth = $switcher.outerWidth();
$switcher
.css({position: 'relative'})
.fadeTo('fast', 0.5)
.animate({
left: paraWidth - switcherWidth
}, {
duration: 'slow',
queue: false
})
.fadeTo('slow', 1.0)
.slideUp(9000)
.queue(function(next) {
$switcher.css({backgroundColor: '#f00'});
next();
})
.slideDown(9000);   
//$(this).hide();
});
});

// border
$(document).ready(function() {
$('p').eq(6)
.css('border', '1px solid #333')
.click(function() {
$(this).next().slideDown('slow', function() {
$(this).slideUp('slow');
});
});
$('p').eq(7).css('backgroundColor', '#ccc').hide();

});