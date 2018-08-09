//
//$(document).ready(function () {
//    console.log("ready!");
//    var slideIndex = 1;
//    showSlides(slideIndex);
//
//    // Next/previous controls
//    function plusSlides(n) {
//      showSlides(slideIndex += n);
//    }
//
//    // Thumbnail image controls
//    function currentSlide(n) {
//      showSlides(slideIndex = n);
//    }
//
//    function showSlides(n) {
//      var i;
//      var slides = document.getElementsByClassName("card-bkg");
//      var dots = document.getElementsByClassName("dot");
//      if (n > slides.length) {slideIndex = 1} 
//      if (n < 1) {slideIndex = slides.length}
//      for (i = 0; i < slides.length; i++) {
//          slides[i].style.display = "none"; 
//      }
//      for (i = 0; i < dots.length; i++) {
//          dots[i].className = dots[i].className.replace(" active", "");
//      }
//      slides[slideIndex-1].style.display = "block"; 
//      dots[slideIndex-1].className += " active";
//    }
//});


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