$(document).ready(function(){
	
//Add -A- add a.html 
	$('#letter-a a').click(function(event){
		event.preventDefault();
		$('#dictionary').load('OthersFiles/a.html');
		alert('Loaded!');
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

//Add -C- add a.html 
	$('#letter-c a').click(function(event){
		event.preventDefault();
		$.getScript('OthersFiles/c.js')
	});




});