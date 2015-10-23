<?php
/**
 * Template Name: News Listing Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */

get_header();
get_template_part('news','subcategories');?>
<div class="full-w newsHead">
	<div class="inner-w">
		<?php if ( is_active_sidebar( 'news-top' ) ) {
				dynamic_sidebar( 'news-top' ); 
			  }
		?>
	</div>    
</div>


<div class="episodesChain full-w">
	<div class="inner-w">
    
   		<h2 class="news-margin">NEWS</h2>
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
            <li class="cl1" data-type="featured"><a href="#tabs-1"><span>Featured</span> </a></li>
            <li class="cl2" data-type="on-demand"><a href="#tabs-2"><span>On Demand</span> </a></li>
            <li class="cl3" data-type="gyms"><a href="#tabs-3"><span>Gyms</span> </a></li>
            <li class="cl4" data-type="classes"><a href="#tabs-4"><span>Classes</span> </a></li>
            <li class="cl5" data-type="instructors"><a href="#tabs-5"><span>Instructors</span> </a></li>
            <li class="cl6" data-type="studio"><a href="#tabs-6"><span>Studio</span> </a></li>
            <li class="cl7" data-type="activities"><a href="#tabs-7"><span>Activities</span> </a></li>
          </ul>
          <div id="tabs-1">
          	<?php
				$args = array( 
					'offset'=>0,
					'posts_per_page' => 1, 
					'post_type' => 'news',
					'tax_query' => array(
						array(
							'taxonomy' => 'news-category',
							'field' => 'slug',
							'terms' => 'featured',
						)
					)
				);
				$lastposts = get_posts( $args );
				if(count($lastposts)){ ?>
					<h3>Top Stories</h3>
					<?php foreach ( $lastposts as $key=>$post ) :?>
						<?php if(!$key){ ?>
							<section class="tabColumnsL">
								<div class="tabSlide">
									<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-main-thumb');?>" width="499" height="442" alt="<?php echo $post->post_title; ?>">
									<?php else: ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-main-thumb');?>" width="499" height="442" alt="<?php echo $post->post_title; ?>">
									<?php endif; ?>
									<section class="blackTrans">
										<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
										<h3><?php the_title(); ?></h3>
										<p><?php echo (strlen($post->post_excerpt)>80)?substr($post->post_excerpt,0,80).'...':$post->post_excerpt;?> <a href="<?php the_permalink(); ?>">Read More</a></p>
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
								</div>
							</section>
						<?php }?>
					<?php endforeach; wp_reset_postdata();?>
				<?php } ?>
				<?php
					$args['offset']=1;
					$args['posts_per_page']=4;
					$lastposts = get_posts( $args );
					if(count($lastposts)){ ?>
					<section class="tabColumnsR">
						<ul>
							<?php foreach ( $lastposts as $key=>$post ) :?>
								<li class="item">
									<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-medium');?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
									<?php else: ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-medium');?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
									<?php endif; ?>
									<section class="blackTrans">
										<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
										<h3><?php the_title(); ?></h3>
										<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?> <a href="<?php the_permalink(); ?>">Read More</a></span>
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
							<?php endforeach; wp_reset_postdata();?>
						</ul>
					</section>
				<?php } ?>
			<?php subCategory('featured'); ?>
          </div>
          <div id="tabs-2">
			<?php showCategory('on-demand'); ?>          
		  </div>
          <div id="tabs-3">
			<?php showCategory('gyms'); ?>
		  </div>
          <div id="tabs-4">
			  <?php showCategory('classes'); ?>
          </div>
          <div id="tabs-5">
			  <?php showCategory('instructors'); ?>
          </div>
          <div id="tabs-6">
			  <?php showCategory('studio'); ?>
          </div>
          <div id="tabs-7">
			  <?php showCategory('activities'); ?>
          </div>
          <div class="clear"></div>   
          
        </div>
    </div>
</div>

<?php
get_footer();
