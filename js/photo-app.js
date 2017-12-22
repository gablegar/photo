$(document).ready(function(){

	var photoJson = JSON.parse(photos);
	var html ='';
	for(var i = 0; i< photoJson.length; i++) {
		if(photoJson[i].includes('vertical')){
			html +='<div><img src="./img/matrimonio-Jorge-y-Raquel/' + photoJson[i] + '" class="vertical-photo"></div>';
		} else {
			html +='<div><img src="./img/matrimonio-Jorge-y-Raquel/' + photoJson[i] + '" class="horizontal-photo"></div>';
		}
		
	}
	$('.photo-carousel').html(html);




 /* $('.photo-carousel').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.photo-carousel',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});*/
});

$(window).on("load", function() {
	if($(window).width() >= 992){
		$('.photo-carousel').slick({
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			adaptiveHeight: true,
			responsive: [
		{
			breakpoint: 600,
			settings: "unslick"
		},
		{
			breakpoint: 480,
			settings: "unslick"
		}

		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
		]
		});
	}
	});