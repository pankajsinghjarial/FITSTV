$(document).ready(function(){
	var isload = true;
	$('button.loadmore').click(function(){
		var category = $(this).attr('data-category');
		page = 0;
		var limit = $('#'+category+'-limit').val();
		$('.'+category+'-loadMore').show();
		data = {};
		data['action'] = 'loadMorePost';
		data['page'] = page;
		data['limit'] = limit;
		data['type'] = 'news';
		data['tab'] = category;
		data['taxonomy'] = 'news-category';
		data['term'] = category;
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
