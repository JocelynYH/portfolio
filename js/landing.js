$(document).ready(function() {
		$(document).delegate('.open', 'click', function(event){
			$(this).addClass('oppenned');
      $(this).addClass('Xed');
			event.stopPropagation();
		})
		$(document).delegate('body', 'click', function(event) {
			$('.open').removeClass('oppenned');
		})
		$(document).delegate('.Xed', 'click', function(event){
			$('.open').removeClass('oppenned');
      $('.open').removeClass('Xed');
			event.stopPropagation();
		});
	});
$(document).ready(function () {
    var embed = document.getElementById('timeline-embed');
    var options = {
        //            start_at_end: true,
        hash_bookmark: false
        //                timenav_height_percentage: 60
    }
    embed.style.height = getComputedStyle(document.body).height;
    window.timeline = new TL.Timeline('timeline-embed', 'timeline-design.json', options);
    window.addEventListener('resize', function () {
        var embed = document.getElementById('timeline-embed');
        embed.style.height = getComputedStyle(document.body).height;
        timeline.updateDisplay();
    })


});


//       Filter timeline events by role

$(document).ready(function () {
    window.onload = function () {
        //                        $("<div class='btn-container'><h4>Filter by:</h4><button id='arts'> Music & Arts</button><button id='design'> Design</button><button id='dev'> Development</button><button id='marketing'> Marketing</button><button id='leadership'>General Leadership</button><button id='all'>All</button></div>").insertAfter(".tl-storyslider");
        //            console.log("Initializing boop beep boop");
        var allMarkers = [];
        $(".tl-timenav-item-container").find(".tl-timemarker").each(function () {
            allMarkers.push(this.id);
        });

        var musicElems = allMarkers.filter(markername => markername.includes("music") || markername.includes("flute") || markername.includes("conductor") || (markername.includes("symphony") && markername.includes("president") === false) || markername.includes("ensemble"));

        var studgovElems = allMarkers.filter(markername => markername.includes("council") || markername.includes("leadership") || markername.includes("lighting") || markername.includes("representative") || markername.includes("office"));

        var designElems = allMarkers.filter(markername => markername.includes("design") || markername.includes("second") || markername.includes("lighting") || markername.includes("web") || markername.includes("president") || markername.includes("guide"));

        var devElems = allMarkers.filter(markername => (markername.includes("web") && markername.includes("president") === false) || markername.includes("development") || markername.includes("developer"));

        var marketingElems = allMarkers.filter(markername => markername.includes("marketing") || markername.includes("second") || markername.includes("brand"));

        var leadershipElems = allMarkers.filter(markername => markername.includes("director") || markername.includes("president") || markername.includes("conductor") || markername.includes("leadership") || markername.includes("council") || markername.includes("office") || markername.includes("instructor"));


        $('button#arts').click(function () {
            $('.tl-timemarker').hide();
            musicElems.forEach(elem => $("#" + elem).show());
        });

        $('button#studgov').click(function () {
            $('.tl-timemarker').hide();
            studgovElems.forEach(elem => $("#" + elem).show());
        });

        $('button#design').click(function () {
            $('.tl-timemarker').hide();
            designElems.forEach(elem => $("#" + elem).show());
        });

        $('button#dev').click(function () {
            $('.tl-timemarker').hide();
            devElems.forEach(elem => $("#" + elem).show());
        });


        $('button#leadership').click(function () {
            $('.tl-timemarker').hide();
            leadershipElems.forEach(elem => $("#" + elem).show());
        });

    };
});




$(document).ready(function () {
    $('button#all').click(function () {
        $('.tl-timemarker').show();
    });
});


// Create space for filter buttons 

$(document).ready(function () {
    var div = document.createElement("div");
    div.style.width = "100px";
    div.style.height = "100px";
    div.style.background = "red";
    div.style.color = "white";
    div.innerHTML = "Hello";

    $('.tl-storyslider').appendChild(div);
});
