<?php
/**
 * Template Name: Video Listing Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */
get_header(); ?>
<div class="full-w newsHead">
	<div class="inner-w">
		<?php if ( is_active_sidebar( 'video-top' ) ) {
				dynamic_sidebar( 'video-top' ); 
			  }
		?>
	</div>    
</div>

<div class="episodesChain full-w">
	<div class="inner-w">
    
   		<h2>VIDEOS</h2>
        <!--<section class="sortColumn">
        <span>Sort By:</span>
        <select>
        <option>Date</option>
        <option>Test 1</option>
        <option>Test 2</option>
        <option>Test 3</option>
        </select>
        </section>
    	<div class="searchBar">
            <input type="text" placeholder="Search Bar">
            <button><img width="40" height="40" alt="Search" src="<?php echo get_template_directory_uri();?>/images/searchbtn.png"></button>
        </div>-->
        
        <div class="sortTabber full-w">
          <ul>
            <li class="cl1" data-type="videos"><a href="#tabs-1"><span>Videos</span> </a></li>
            <li class="cl2" data-type="on-demand"><a href="#tabs-2"><span>On Demand</span> </a></li>
            <li class="cl8" data-type="news"><a href="#tabs-3"><span>News</span> </a></li>
            <li class="cl9" data-type="reviews"><a href="#tabs-4"><span>Reviews</span> </a></li>
            <li class="cl5" data-type="workouts"><a href="#tabs-5"><span>Workouts</span> </a></li>
          </ul>
			<?php 

				$args = array(
				'type'                     => 'post',
				'child_of'                 => 0,
				'parent'                   => '',
				'orderby'                  => 'name',
				'order'                    => 'ASC',
				'hide_empty'               => 1,
				'hierarchical'             => 1,
				'exclude'                  => '',
				'include'                  => '',
				'number'                   => '',
				'taxonomy'                 => 'videotype',
				'pad_counts'               => false 

				); 
				$categories = get_categories( $args );
			?>
          <div id="tabs-1">
          	<h3>Top Stories</h3>
            <section class="sideNav">
            	<h4>Categories</h4>
            	<ul class="categories">
					<?php 
						foreach($categories as $category){ ?>
							<li data-term="<?php echo $category->slug;?>" class="<?php if($category->slug=='featured'){echo "active";} ?>"><a href="javascript:void(0);"><?php echo $category->cat_name;?></a></li>
						<? } ?>
                </ul>
            </section>
            <section class="tabColumnsR cateG">
            <ul class="videos-data">
				<?php
				$args = array( 
						'posts_per_page' => 6, 
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'videotype',
								'field' => 'category_nicename',
								'terms' => getCatergoryID('videotype','featured'),
							)
						)
					);
				$lastposts = get_posts( $args );
				if(count($lastposts)){
					unset($args['posts_per_page']);
					$the_query = new WP_Query( $args );
					$totalPosts = $the_query->found_posts;
					$limit = 6;
					$page = 1;
					$totalPage = ceil($totalPosts/$limit);
					?>
					<input type="hidden" id="videos-page" value="1" />
					<input type="hidden" id="videos-totalpage" value="<?php echo $totalPage;?>"/>
					<input type="hidden" id="videos-limit" value="<?php echo $limit;?>"/>
					<?php
					foreach ( $lastposts as $post ) :
					  setup_postdata( $post );?>
						<li class="item">
							<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
								<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true));?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
								<figure class="icnPlay">
									<img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play">
								</figure>
							<?php else: ?>
								<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true));?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
							<?php endif; ?>
							<h4>Cross Fit Workouts</h4>
							<section class="blackTrans">
							<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
							<h3><?php the_title(); ?></h3>
							<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?><a href="<?php the_permalink(); ?>">Read More</a></span>
							</section>
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
            <div class="videos-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
            </section>
          </div>
          <div id="tabs-2">
          	<ul class="on-demand-data">
				<?php
				$args = array( 
						'posts_per_page' => 8, 
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'videotype',
								'field' => 'category_nicename',
								'terms' => getCatergoryID('videotype','on-demand'),
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
					<input type="hidden" id="on-demand-page" value="1" />
					<input type="hidden" id="on-demand-totalpage" value="<?php echo $totalPage;?>"/>
					<input type="hidden" id="on-demand-limit" value="<?php echo $limit;?>"/>
					<?php
					foreach ( $lastposts as $post ) :
					  setup_postdata( $post );?>
						<li class="tabSlide">
								<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
									<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-image');?>" width="306" height="212" alt="<?php echo $post->post_title;?>">
									<figure class="icnPlay">
										<img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play">
									</figure>
								<?php else: ?>
									<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-image');?>" width="306" height="212" alt="<?php echo $post->post_title;?>">
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
            <div class="on-demand-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
          </div>
          <div id="tabs-3">
            <ul class="news-data">
				<?php
				$args = array( 
						'posts_per_page' => 8, 
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'videotype',
								'field' => 'category_nicename',
								'terms' => getCatergoryID('videotype','news'),
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
					<input type="hidden" id="news-page" value="1" />
					<input type="hidden" id="news-totalpage" value="<?php echo $totalPage;?>"/>
					<input type="hidden" id="news-limit" value="<?php echo $limit;?>"/>
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
            <div class="news-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
          </div>
          <div id="tabs-4">
			<ul class="reviews-data">
				<?php
				$args = array( 
						'posts_per_page' => 8, 
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'videotype',
								'field' => 'category_nicename',
								'terms' => getCatergoryID('videotype','reviews'),
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
					<input type="hidden" id="reviews-page" value="1" />
					<input type="hidden" id="reviews-totalpage" value="<?php echo $totalPage;?>"/>
					<input type="hidden" id="reviews-limit" value="<?php echo $limit;?>"/>
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
            <div class="reviews-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
          </div>
          <div id="tabs-5">
			<ul class="workouts-data">
				<?php
				$args = array( 
						'posts_per_page' => 8, 
						'post_type' => 'video',
						'tax_query' => array(
							array(
								'taxonomy' => 'videotype',
								'field' => 'category_nicename',
								'terms' => getCatergoryID('videotype','workouts'),
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
					<input type="hidden" id="workouts-page" value="1" />
					<input type="hidden" id="workouts-totalpage" value="<?php echo $totalPage;?>"/>
					<input type="hidden" id="workouts-limit" value="<?php echo $limit;?>"/>
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
            <div class="workouts-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
          </div>
          <div class="clear"></div>   
        </div>                  
    </div>
</div>
<?php
get_footer();
