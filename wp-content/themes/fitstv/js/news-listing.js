$(document).ready(function(){
	$('button.loadmore').click(function(){
		var category = $(this).attr('data-category');
		var limit = $('#'+category+'-limit').val();
		var page = $('#'+category+'-page').val();
		var totalpage = $('#'+category+'-totalpage').val();
		var datatype = $(this).attr('data-type');
		var search = $('#sort-'+category).val();
		$('.'+category+'-loadMore').show();
		data = {};
		data['action'] = 'loadMorePost';
		data['page'] = page;
		data['limit'] = limit;
		data['type'] = 'news';
		data['tab'] = datatype;
		data['taxonomy'] = 'news-category';
		data['term'] = category;
		data['search'] = search;
		$.ajax({
			url:ajaxurl,
			type:"POST",
			data:data,
			success: function(response){
				var posts = $.parseJSON(response);
				html = '';
				if(datatype == 'category'){ 
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
				}else{
					$(posts.data).each(function(index,post){
						html += '<div class="newsLi"><div class="news_img"><img src="'+post.image+'" width="306" height="212" alt="'+post.title+'">';
						if(post.attachment_type == 1){
							html += '<figure class="icnPlay"><img src="'+templateUrl+'/images/green-play.png" width="69" height="69" alt="Play"></figure>';
						}
						html += '</div><div class="news_ret"><ul>';
						for($i=1;$i<=5;$i++){
							if($i<=post.rating){
								html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star-active.png" width="16" height="16" alt="Star"></a></li>';
							}else{
								html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star.png" width="16" height="16" alt="Star"></a></li>';
							}
						}
						html += '</ul></div><div class="news_around_text"><h6>'+post.title+'</h6><p>'+post.excerpt+'<a class="spa" href="'+post.link+'">Read more &gt;</a></p></div></div>';
					});
				}
				$('.data-'+category).append(html);
				page = parseInt(page) + 1;
				$('#'+category+'-page').val(page);		
				$('#'+category+'-totalpage').val(posts.count);		
				$('.'+category+'-loadMore').hide();
				if(page == totalpage){
					$('#'+category+'-loadmore').hide();
				}
			}
		});
	});

	$('.sortColumn select').on('change',function(){
		var page = 0;
		var category = $(this).attr('data-category');
		var limit = $('#'+category+'-limit').val();
		var totalpage = $('#'+category+'-totalpage').val();
		var datatype = $(this).attr('data-type');
		var search = $(this).val();
		if(datatype == 'sub-category'){
			$('.data-'+category+' div.newsLi').remove();
		}
		$('.'+category+'-loadMore').show();
		data = {};
		data['action'] = 'loadMorePost';
		data['page'] = page;
		data['limit'] = limit;
		data['type'] = 'news';
		data['tab'] = datatype;
		data['taxonomy'] = 'news-category';
		data['term'] = category;
		data['search'] = search;
		$.ajax({
			url:ajaxurl,
			type:"POST",
			data:data,
			success: function(response){
				var posts = $.parseJSON(response);
				html = '';
				if(datatype == 'category'){ 
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
				}else{
					$(posts.data).each(function(index,post){
						html += '<div class="newsLi"><div class="news_img"><img src="'+post.image+'" width="306" height="212" alt="'+post.title+'">';
						if(post.attachment_type == 1){
							html += '<figure class="icnPlay"><img src="'+templateUrl+'/images/green-play.png" width="69" height="69" alt="Play"></figure>';
						}
						html += '</div><div class="news_ret"><ul>';
						for($i=1;$i<=5;$i++){
							if($i<=post.rating){
								html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star-active.png" width="16" height="16" alt="Star"></a></li>';
							}else{
								html += '<li><a href="javascript:void(0);"><img src="'+templateUrl+'/images/star.png" width="16" height="16" alt="Star"></a></li>';
							}
						}
						html += '</ul></div><div class="news_around_text"><h6>'+post.title+'</h6><p>'+post.excerpt+'<a class="spa" href="'+post.link+'">Read more &gt;</a></p></div></div>';
					});
				}
				$('.data-'+category).append(html);
				page = parseInt(page) + 1;
				$('#'+category+'-page').val(page);		
				$('#'+category+'-totalpage').val(posts.count);		
				$('.'+category+'-loadMore').hide();
				if(page == posts.count){
					$('#'+category+'-loadmore').hide();
				}
			}
		});
	});

});
