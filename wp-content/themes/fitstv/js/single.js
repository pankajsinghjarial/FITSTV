$(document).ready(function(){
	if($('#nextPost').length){
		$('.episodesBanner .bx-prev').click(function(){
			window.location.href = $('#nextPost').val();
		});
	}else{
		$('.episodesBanner .bx-prev').hide();
	}
	if($('#prevPost').length){
		$('.episodesBanner .bx-next').click(function(){
			window.location.href = $('#prevPost').val();
		});	
	}else{
		$('.episodesBanner .bx-next').hide();
	}
});
