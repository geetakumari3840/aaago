//http:// localhost/aaago/AjaxExampleSentReceived/index.html

$(document).ready(function(){
	
var $loading = $('<div id="loading">Loading...</div>').insertBefore('#dictionary');

$(document).ajaxStart(function() {
$loading.show();
}).ajaxStop(function() {
$loading.hide();
});

//Add -A- add a.html 
	$('#letter-a a').click(function(event){
		event.preventDefault();
		$('#dictionary').load('OthersFiles/a.html', function() {
		$(this).fradeIn();			
		});
	
	});


//Add -b.json file on B Menu  page 149

	$('#letter-b a').click(function(event){
		event.preventDefault();
		$.getJSON('OthersFiles/b.json', function(data){
			var html='';
			$.each(data,function(entryIndex,entry) {
				html += '<div class="entry">';
				html += '<h3 class="term">' + entry.term + '</h3>';
				html += '<div class="part">' + entry.part + '</div>';
				html += '<div class="definition">';
				html += entry.definition;
				if (entry.quote) {
				html += '<div class="quote">';
				$.each(entry.quote, function(lineIndex, line) {
				html += '<div class="quote-line">' + line + '</div>';
				});
				if (entry.author) {
				html += '<div class="quote-author">' + entry.author + '</div>';
				}
				html += '</div>';
				}
				html += '</div>';
				html += '</div>';
			});
				$('#dictionary').html(html);
		});
	});

//Add -C- add c.html page 152
	$('#letter-c a').click(function(event){
		event.preventDefault();
		$.getScript('OthersFiles/c.js')
	});

//Add -D- d.html page 154

	$('#letter-d a').click(function(event){
		event.preventDefault();
		$.get('OthersFiles/d.xml', function(data){
					$('#dictionary').empty();
				$(data).find('entry').each(function(){
					var $entry = $(this);
					var html = '<div class="entry">';
					html += '<h3 class="term">' + $entry.attr('term') + '</h3>';
					html += '<div class="part">' + $entry.attr('part') + '</div>';
					html += '</div>';
					html += '<div class="definition">' + $entry.find('definition').text();
					var $quote = $entry.find('quote');
					if ($quote.length) {
						html += '<div class="quote">';
						$quote.find('line').each(function() {
							html += '<div class="quote-line">';
							html += $(this).text() + '</div>';
						});
						if ($quote.attr('author')) {
							html += '<div class="quote-author">';
							html += $quote.attr('author') + '</div>';
						}
							html += '</div>';
					}
						html += '</div>';
						html += '</div>';
						$('#dictionary').append($(html));
				});
		});
	});

//Add -E- e.php page 158
	$('#letter-e a').click(function(event){
		event.preventDefault();
		var requestData = {term: $(this).text()};
		$('#dictionary').load('OthersFiles/e.php', requestData);
		

	});

//Add -F- f.php page 163
	$('#letter-f form').submit(function(event){
		event.preventDefault();
		$.get('OthersFiles/f.php', {'term':$('input[name="term"]').val()},
			function(data) {
				$('#dictionary').html(data);
			});
		

	});
// Add -G- ___________ page 166


});

// 171