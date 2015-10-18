<?php

function subCategory($category){
	$args = array('child_of'=>getCatergoryID('news-category',$category));
	$subCategories = get_terms('news-category',$args);
?>
	<div class="full-w">
		<?php foreach($subCategories as $subCategory){ ?>
			<div class="full-w gymsAround">
				<h2>News From <?php echo $subCategory->name;?></h2>
				<section class="sortColumn">
					<span>Sort By:</span>
					<select>
					<option>Date</option>
					<option>Test 1</option>
					<option>Test 2</option>
					<option>Test 3</option>
					</select>
				</section>
			</div>
			<div class="news_slider_info">
		<?php
		$args = array( 
				'posts_per_page' => 4, 
				'post_type' => 'news',
				'tax_query' => array(
					array(
						'taxonomy' => 'news-category',
						'field' => 'slug',
						'terms' => $subCategory->slug,
					)
				)
			);
		$lastposts = get_posts( $args );
		if(count($lastposts)){
			unset($args['posts_per_page']);
			$the_query = new WP_Query( $args );
			$totalPosts = $the_query->found_posts;
			$limit = 4;
			$page = 1;
			$totalPage = ceil($totalPosts/$limit);
			?>
			<input type="hidden" id="<?php echo $subCategory->slug;?>-page" value="1" />
			<input type="hidden" id="<?php echo $subCategory->slug;?>-totalpage" value="<?php echo $totalPage;?>"/>
			<input type="hidden" id="<?php echo $subCategory->slug;?>-limit" value="<?php echo $limit;?>"/>
			<?php
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post );?>
				<div class="newsLi">
					<div class="news_img">
						<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
							<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true));?>" width="306" height="212" alt="<?php echo $post->post_title;?>">
							<figure class="icnPlay">
								<img src="<?php echo get_template_directory_uri();?>/images/green-play.png" width="69" height="69" alt="Play">
							</figure>
						<?php else: ?>
							<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true));?>" width="306" height="212" alt="<?php the_title();?>">
						<?php endif; ?>
					</div>
					<div class="news_ret">
						<ul>
							<?php 
								$rating = get_post_meta($post->ID,'wpcf-rating',true);
								for($i=1;$i<=5;$i++){
									if($i<=$rating){ ?>
										<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
									<?php }else{ ?>
										<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
									<?php
									}
								}
							?>
						</ul>
					</div>
					<div class="news_around_text">
						<h6><?php echo $post->post_title;?></h6>
						<p><?php echo (strlen($post->post_excerpt)>45)?substr($post->post_excerpt,0,45).'...':$post->post_excerpt;?> <a class="spa" href="#">Read more &gt;</a></p>
					</div>
				</div>
			<?php endforeach; 
				wp_reset_postdata();
			}?>
			
			</div>
		<?php } ?>
		<div class="boxCol full-w videoSlider mrgTop20">
			<div class="full-w">
			<h3>Highlights </h3>
			<a class="viewMore" href="javascript:void(0);">View All</a>
			</div>
			<div class="mrgTop20 full-w">
				<ul class="basicSliders2">
				<li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
				<section>Episode #89 - The Fitse Video 
				<span>After an amazing run that...</span>
				</section>
				<div class="news_ret">
					<ul>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
					</ul>
				</div>
				</li>
				<li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
				<section>Episode #89 - The Fitse Video 
				<span>After an amazing run that...</span>
				</section>
				<div class="news_ret">
					<ul>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
					</ul>
				</div>
				</li>
				<li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
				<section>Episode #89 - The Fitse Video 
				<span>After an amazing run that...</span>
				</section>
				<div class="news_ret">
					<ul>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
					</ul>
				</div>
				</li>
				<li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
				<section>Episode #89 - The Fitse Video 
				<span>After an amazing run that...</span>
				</section>
				<div class="news_ret">
					<ul>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
					</ul>
				</div>
				</li>
				<li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
				<section>Episode #89 - The Fitse Video 
				<span>After an amazing run that...</span>
				</section>
				<div class="news_ret">
					<ul>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
						<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
					</ul>
				</div>
				</li>
				</ul>
			</div>
		</div>
	</div>
<?php
}


function showCategory($category){
?>
	<ul class="data-<?php echo $category;?>">
		<?php
		$args = array( 
				'posts_per_page' => 8, 
				'post_type' => 'news',
				'tax_query' => array(
					array(
						'taxonomy' => 'news-category',
						'field' => 'slug',
						'terms' => $category,
					)
				)
			);
		$lastposts = get_posts( $args );
		if(count($lastposts)){
			unset($args['posts_per_page']);
			$the_query = new WP_Query( $args );
			$totalPosts = $the_query->found_posts;
			$limit = 8;
			$page = 1;
			$totalPage = ceil($totalPosts/$limit);
			?>
			<input type="hidden" id="<?php echo $category;?>-page" value="1" />
			<input type="hidden" id="<?php echo $category;?>-totalpage" value="<?php echo $totalPage;?>"/>
			<input type="hidden" id="<?php echo $category;?>-limit" value="<?php echo $limit;?>"/>
			<?php
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post );?>
				<li class="tabSlide">
					<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
						<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-image');?>" width="306" height="212" alt="new01">
						<figure class="icnPlay">
							<img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play">
						</figure>
					<?php else: ?>
						<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-image');?>" width="306" height="212" alt="new01">
					<?php endif; ?>
					<section><?php the_title(); ?> -  
					<span><?php echo (strlen($post->post_excerpt)>25)?substr($post->post_excerpt,0,25).'...':$post->post_excerpt;?></span>
					</section>
					<div class="news_ret">
						<ul>
							<?php 
								$rating = get_post_meta($post->ID,'wpcf-rating',true);
								for($i=1;$i<=5;$i++){
									if($i<=$rating){ ?>
										<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
									<?php }else{ ?>
										<li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
									<?php
									}
								}
							?>							
						</ul>
					</div>
				</li>
			<?php endforeach; 
			wp_reset_postdata();
		}else{
		?>
			<li><center><strong>OOPS!! No Post found under this category.</strong></center></li>
		<?php
		}
		?>
	</ul>
	<div class="clear"></div>
	<div class="<?php echo $category;?>-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
	<button class="loadmore" data-category="<?php echo $category;?>" class="btn btn-default">Load More</button>
<?php
	subCategory($category);
}
?>
