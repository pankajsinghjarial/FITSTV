
$(document).ready(function(){
	
	
/*
var wResize = $(window).width();

if (wResize < 767) {
	$(function(){
	var overlay = $('<div id="overlay"></div>');
	overlay.show();
	overlay.appendTo(document.body);
	$('.my_modal').show();
	$('.close').click(function(){
	$('.my_modal').hide();
	overlay.appendTo(document.body).remove();
	return false;
	});
	
	$('.x').click(function(){
	$('.my_modal').hide();
	overlay.appendTo(document.body).remove();
	return false;
	});
	});
}*/

/*pop-up*/

	if($('#wpcf7-f88-o1 .wpcf7-response-output').text().length >0)
	{
			$('.my_modal').fadeIn('slow');
	}else{
			$('.my_modal').fadeOut('slow');	
	}

	$('.my_modal_open').click(function(){
		$('.my_modal').fadeIn('slow');
	});
	$('.my_modal_close').click(function(){
		$('.my_modal').fadeOut('slow');	
	});
	
	$(".menu").click(function(){
		$("nav").slideToggle();	
	});
	
	$(".my_modal_open").click(function(){
		//$("nav").hide();	
	});
	
	$(".sideNav h4").click(function(){
		$(".sideNav ul").slideToggle();	
	});
	
	
	if($('#wpcf7-f117-o2 .wpcf7-response-output').text().length >0)
	{
			$('.askAQtnPop, .overlayBg').fadeIn('slow');
	}else{
			$('.askAQtnPop, .overlayBg').fadeOut('slow');	
	}
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
	 infiniteLoop: true,
	 hideControlOnEnd: true,
	 auto: false,
	 speed: 1000
  });
  }
  
  /*bxsliderbasicMob*/
/*
  if($(".bxsliderbasic").length){	
  $('.bxsliderbasic').bxSlider({
	 infiniteLoop: true,
	 hideControlOnEnd: true,
	 auto: false,
	 speed: 1000
  });
  }
  */
/******************************
 basicSliders*******************/	
 if($(".basicSliders").length){	
  $('.basicSliders').bxSlider({
	 minSlides: 1,
	 maxSlides: 6,
	 slideWidth: 201,
	 slideMargin: 10,
	 moveSlides:1,
	 pager:false
  });  
 }
 
 /******************************
 socialAreaSlider*******************/
  if($(".socialAreaSliderIn").length){	
  $('.socialAreaSliderIn').bxSlider({
	 infiniteLoop: true,
	 hideControlOnEnd: true,
	 auto: true,
	 speed: 1000
  });
  }

 
/******************************
 basicSlidersAuto*******************/
  if($(".basicSlidersAuto").length){	
  $('.basicSlidersAuto').bxSlider({
	 minSlides: 1,
	 maxSlides: 6,
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
	 maxSlides: 8,
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
 

$('#btn-subscribe').on('click',function(){
	if($('.msg').length){
		$('.msg').remove();
	}
	var email = $('#subscribe-email').val();
	var $this = $(this);
	if(validateEmail(email)){
		var data = {};
		data['email'] = email;
		data['action'] = 'sendEmail';
		$.ajax({
			url:ajaxurl,
			type:"POST",
			data:data,
			success: function(response){
				if(parseInt(response)){
					$('#subscribe-email').val('');
					$this.after('<font style="clear:both;float:left;" class="msg" color="white">Mail Sent Successfully.</font>');
				}
			}
		});
	}else{
		$(this).after('<font style="clear:both;float:left;" class="msg" color="red">Please enter valid email.</font>');
	}
});
 
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
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
