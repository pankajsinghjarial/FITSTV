$(document).ready(function(){
	var isload = true;
	$(window).scroll(function(){
		if ($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5 && isload){
			var tab = $('.ui-tabs-active').attr('data-type');
			var page = $('#'+tab+'-page').val();
			var totalpage = $('#'+tab+'-totalpage').val();
			var limit = $('#'+tab+'-limit').val();
			if(totalpage > page){
				isload = false;
				$('.'+tab+'-loadMore').show();
				data = {};
				data['action'] = 'loadMorePost';
				data['page'] = page;
				data['limit'] = limit;
				data['type'] = 'video';
				data['taxonomy'] = 'videotype';
				data['term'] = tab;
				data['tab'] = tab;
				if(tab == 'videos'){
					data['term'] = $('ul.categories li.active').attr('data-term');
				}
				$.ajax({
					url:ajaxurl,
					type:"POST",
					data:data,
					success: function(response){
						var posts = $.parseJSON(response);
						if(tab == 'videos'){
							html = '';
							$(posts.data).each(function(index,post){
								html += '<li class="item"><img src="'+post.image+'" width="306" height="212" alt="'+post.title+'">';
								if(post.attachment_type == 1){
									html += '<figure class="icnPlay"><img src="'+templateUrl+'/images/transPlay.png" width="69" height="69" alt="Play"></figure>';
								}
								html += '<h4>Cross Fit Workouts</h4><section class="blackTrans"><span>'+post.date+'</span><h3>'+post.title+'</h3><span>'+post.excerpt+'<a href="'+post.link+'">Read More</a></span></section></li>';
							});
						}else{
							html = '';
							$(posts.data).each(function(index,post){
								html += '<li class="tabSlide"><img src="'+post.image+'" width="288" height="148" alt="'+post.title+'">';
								if(post.attachment_type == 1){
									html += '<figure class="icnPlay"><img src="'+templateUrl+'/images/transPlay.png" width="69" height="69" alt="Play"></figure>';
								}
								html += '<section>'+post.title+'- <span>'+post.excerpt+'</span></section><div class="news_ret"><ul>';
								for($i=1;$i<=5;$i++){
									if($i<=post.rating){
										html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star-active.png" width="16" height="16" alt="Star"></a></li>';
									}else{
										html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star.png" width="16" height="16" alt="Star"></a></li>';
									}
								}
								html += '</ul></div></li>';
							});
						}
						$('ul.'+tab+'-data').append(html);
						page = parseInt(page) + 1;
						$('#'+tab+'-page').val(page);		
						isload = true;
						$('.'+tab+'-loadMore').hide();
					}
				});
			} 
		}
	});

	$('ul.categories li').click(function(){
		$('ul.categories li.active').removeClass('active');
		$(this).addClass('active');
		page = 0;
		var limit = $('#videos-limit').val();
		$('.videos-loadMore').show();
		data = {};
		data['action'] = 'loadMorePost';
		data['page'] = page;
		data['limit'] = limit;
		data['type'] = 'video';
		data['tab'] = 'videos';
		data['taxonomy'] = 'videotype';
		data['term'] = $('ul.categories li.active').attr('data-term');
		$.ajax({
			url:ajaxurl,
			type:"POST",
			data:data,
			success: function(response){
				var posts = $.parseJSON(response);
				html = '';
				$(posts.data).each(function(index,post){
					html += '<li class="item"><img src="'+post.image+'" width="306" height="212" alt="'+post.title+'">';
					if(post.attachment_type == 1){
						html += '<figure class="icnPlay"><img src="'+templateUrl+'/images/transPlay.png" width="69" height="69" alt="Play"></figure>';
					}
					html += '<h4>Cross Fit Workouts</h4><section class="blackTrans"><span>'+post.date+'</span><h3>'+post.title+'</h3><span>'+post.excerpt+'<a href="'+post.link+'">Read More</a></span></section></li>';
				});
				$('ul.videos-data li.item').remove();
				$('ul.videos-data').append(html);
				page = parseInt(page) + 1;
				$('#videos-page').val(page);		
				$('#videos-totalpage').val(posts.count);		
				$('.videos-loadMore').hide();
			}
		});
	});
});
