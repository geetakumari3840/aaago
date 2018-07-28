/* /* this or current 
$(document).ready(function(){
$("p").click(function () {
	$(this).hide();
});
});

//button 
$(document).ready(function(){
$("button").click(function () {
	$("p").hide();
});
});


//button ID
$(document).ready(function(){
$("button").click(function () {
	$("#demo").hide();
});
});

//button class
$(document).ready(function(){
$("button").mouseleave	(function () {
	$(".demo").hide();
});
});

//alert
$(document).ready(function(){
    $(".demo").mouseenter(function(){
        alert("You entered p1!");
    });
});

//hover
$(document).ready(function(){
    $(".demo").hover(function(){
        alert("You entered p1!");
    },
    function(){
        alert("Bye! You now leave p1!");
    }); 
})

$(document).ready(function(){
    $("p").on("click", function(){
        $(this).hide();
    });
});

*/
//focus
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
        $(this).css("background-color", "red");
    });
});


$(document).ready(function(){
    $("p").on({
        mouseenter: function(){
            $(this).css("background-color", "lightgray");
        },  
        mouseleave: function(){
            $(this).css("background-color", "lightblue");
        }, 
        click: function(){
            $(this).css("background-color", "yellow");
        }  
    });
});