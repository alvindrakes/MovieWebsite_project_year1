$(function(){
	initBanner();
	bookSeating();
});

function initBanner(){
	$('.hero-tout').magnificPopup({
		delegate: '.hero-img',
		type: 'iframe',
		iframe:
		{
			 markup:
			 '<div class="mfp-iframe-scaler">'+
		    '<div class="mfp-close"></div>'+
		    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
		 '</div>'
		},
		callbacks: {
			open: function() {
				$('.content').addClass('blur');
			},
			close: function() {
				$('.content').removeClass('blur');
			}
		}
	});
	$('.sub-hero-tout').magnificPopup({
		delegate: '.hero-img',
		type: 'iframe',
		iframe:{
			 markup:
			 '<div class="mfp-iframe-scaler">'+
		    '<div class="mfp-close"></div>'+
		    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
		 '</div>'
		},
		callbacks: {
			open: function() {
				$('.content').addClass('blur');
			},
			close: function() {
				$('.content').removeClass('blur');
			}
		}
	});
}
function initMoviesDate(){
	
}
var adult;
var children;
function bookSeating(){
	$('.adult').on('changed.bs.select', function (e) {
		adult = $(this).val();
	});
	$('.children').on('changed.bs.select', function (e) {
		children = $(this).val();
	});
	$('.seating-container .seat').on('click', function(){
		$(this).toggleClass('choose');
		console.log(adult);
			console.log(children);
			console.log(children+adult);
	})
}

