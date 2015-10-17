
$(document).ready(function(){

/*pop-up*/
	$('.my_modal_open').click(function(){
		$('.my_modal').fadeIn('slow');
	});
	$('.my_modal_close').click(function(){
		$('.my_modal').fadeOut('slow');	
	});
	
	$(".menu").click(function(){
		$("nav").slideToggle();	
	});
	
	$(".sideNav h4").click(function(){
		$(".sideNav ul").slideToggle();	
	});
	
/*Ask a Question*/
	$('.askAQtn').click(function(){
		$('.askAQtnPop, .overlayBg').fadeIn('slow');
	});
	$('.my_modal_close').click(function(){
		$('.askAQtnPop, .overlayBg').fadeOut('slow');	
	});
	
	
	var offset = $("#sidebar").offset();
	var topPadding = 15;
	$(window).scroll(function() {
		if ($(window).scrollTop() > offset.top) {
			$("#sidebar").stop().animate({
				marginTop: $(window).scrollTop() - offset.top + topPadding
			});
		} else {
			$("#sidebar").stop().animate({
				marginTop: 0
			});
		};
	});
	
/******************************
 portSlideIn*******************/
  if($(".bxsliderbasic").length){	
  $('.bxsliderbasic').bxSlider({
	 infiniteLoop: false,
	 hideControlOnEnd: true,
	 auto: true,
	 speed: 1000
  });
  }
/******************************
 basicSliders*******************/	
 if($(".basicSliders").length){	
  $('.basicSliders').bxSlider({
	 minSlides: 1,
	 maxSlides: 4,
	 slideWidth: 201,
	 slideMargin: 10,
	 moveSlides:1,
	 pager:false
  });  
 }
/******************************
 basicSlidersAuto*******************/
  if($(".basicSlidersAuto").length){	
  $('.basicSlidersAuto').bxSlider({
	 minSlides: 1,
	 maxSlides: 4,
	 slideWidth: 201,
	 slideMargin: 10,
	 moveSlides:1,
	 pager:false,
	 auto: false,
	 speed: 1000,
	 pause: 1000
  });
  }
  
/******************************
 basicSliders2*******************/	
 if($(".basicSliders2").length){
  $('.basicSliders2').bxSlider({
	 minSlides: 1,
	 maxSlides: 5,
	 slideWidth: 201,
	 slideMargin: 20,
	 moveSlides:1,
	 pager:false
  });
 }
 
/******************************
 bxsliderTv*******************/	
  if($(".bxsliderTv").length){
 $('.bxsliderTv').bxSlider({
	 infiniteLoop: false,
	 hideControlOnEnd: true,
	 pager:false
  }); 
  }
 
/******************************
 bxsliderTv*******************/
if($(".thumbSlider").length){  
$('.thumbSlider').bxSlider({
  pagerCustom: '#bx-pager',
  captions: true
});
}


/******************************
 portSlideIn*******************/  
  var owl = $("#owl-demo");

  owl.owlCarousel({ 

  items : 5, //10 items above 1000px browser width
  itemsDesktop : [1000,5], //5 items between 1000px and 901px
  itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
  itemsTablet: [600,2], //2 items between 600 and 0;
  itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  
  });

  // Custom Navigation Events
  /*$(".next").click(function(){
	owl.trigger('owl.next');
  })
  $(".prev").click(function(){
	owl.trigger('owl.prev');
  })
  $(".play").click(function(){
	owl.trigger('owl.play',1000);
  })
  $(".stop").click(function(){
	owl.trigger('owl.stop');
  })*/


/******************************
 Episodes Tab*******************/
 if($(".sortTabber").length){ 	
   $( ".sortTabber" ).tabs();	
 }
 

 
 
});


$(document).ready(function(){
	var submitIcon = $('.searchbox-icon');
	var inputBox = $('.searchbox-input');
	var searchBox = $('.searchbox');
	var isOpen = false;
	submitIcon.click(function(){
		if(isOpen == false){
			searchBox.addClass('searchbox-open');
			inputBox.focus();
			isOpen = true;
		} else {
			searchBox.removeClass('searchbox-open');
			inputBox.focusout();
			isOpen = false;
		}
	});  
	 submitIcon.mouseup(function(){
			return false;
		});
	searchBox.mouseup(function(){
			return false;
		});
	$(document).mouseup(function(){
			if(isOpen == true){
				$('.searchbox-icon').css('display','block');
				submitIcon.click();
			}
		});
});
function buttonUp(){
		var inputVal = $('.searchbox-input').val();
		inputVal = $.trim(inputVal).length;
		if( inputVal !== 0){
			$('.searchbox-icon').css('display','none');
		} else {
			$('.searchbox-input').val('');
			$('.searchbox-icon').css('display','block');
		}
}
