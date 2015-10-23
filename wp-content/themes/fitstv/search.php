<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="home-videos full-w">	
    <div class="inner-w">
    	<div class="videoLeft">
			<h2><?php printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h2>
            <!--<section class="rightCol">
                <a href="javascript:void(0);" title="Recent" class="active">Recent</a>
                <a href="javascript:void(0);" title="Alphabetical">Alphabetical</a>
                <a href="javascript:void(0);" title="Highest Rating">Highest Rating</a>
            </section>-->
            
            <div class="searchBar">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" placeholder="Search Bar" name="s" id="s" value="<?php echo get_search_query();?>" />
					<input type="hidden" id="type" name="type" value="<?php echo (isset($_REQUEST['type']))?$_REQUEST['type']:'video' ;?>" />
					<button onclick="javascript:$('#searchform').submit();"><img width="40" height="40" alt="Search" src="<?php echo get_template_directory_uri(); ?>/images/searchbtn.png"></button>
				</form>
            </div>
            <input type="hidden" name="search" id="search" value="<?php echo get_search_query();?>" />
        	
            <div class="boxCol full-w mrgTop20">
                <h3>Results</h3>
				<section class="tabColumnsR cateG sortTabbers">
					<ul class="search-data">
						<?php
						$args = array( 
							'posts_per_page' => 9
						);
						$args['s'] = get_search_query();
						$args['post_type'] = 'video';
						if(isset($_REQUEST['type'])){
							if($_REQUEST['type'] == 'all'){
								$args['post_type'] = array('video','news','episode');
							}else{
								$args['post_type'] = $_REQUEST['type'];
							}
						}
						$lastposts = get_posts( $args );
						if(count($lastposts)){
							unset($args['posts_per_page']);
							$the_query = new WP_Query( $args );
							$totalPosts = $the_query->found_posts;
							$limit = 9;
							$page = 1;
							$totalPage = ceil($totalPosts/$limit);
							?>
							<input type="hidden" id="search-page" value="1" />
							<input type="hidden" id="search-totalpage" value="<?php echo $totalPage; ?>"/>
							<input type="hidden" id="search-limit" value="<?php echo $limit; ?>"/>
							<?php
							foreach ( $lastposts as $post ) :
							  setup_postdata( $post ); ?>
								<li class="item">
									<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true)); ?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
										<figure class="icnPlay">
											<img src="<?php echo get_template_directory_uri(); ?>/images/transPlay.png" width="69" height="69" alt="Play">
										</figure>
									<?php else: ?>
										<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true)); ?>" width="306" height="212" alt="<?php echo $post->post_title; ?>">
									<?php endif; ?>
									<h4>Cross Fit Workouts</h4>
									<section class="blackTrans">
									<span><?php echo date('M d, Y',strtotime($post->post_date)); ?></span>
									<h3><?php the_title(); ?></h3>
									<?if(get_post_meta($post->ID,'wpcf-when',true)){ echo '<span>Coming soon ...</span>';}else{ ?>
										<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt; ?><a href="<?php the_permalink(); ?>">Read More</a></span>
									<? } ?>
									</section>
								</li>
							<?php endforeach; 
							wp_reset_postdata();
						}else{
						?>
							<li><center><strong>OOPS!! No Result found for this search.</strong></center></li>
						<?php
						}
						?>
					</ul>
					<div class="clear"></div>
					<div class="loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div>
					<?php if($page < $totalPage){ ?>
						<center><button id="search-loadmore" data-type="sub-category" class="loadmore" class="btn btn-default">Load More</button></center>
					<?php } ?>
				</section>                
            </div>
      <!-- /videoLeft --></div>
        
        <div class="videoRight">
        	<div class="about_data">
                    	<div class="about_title">
                        	<h3>About Fitse The Host</h3>
                        	<?php $the_slug =  get_post('mike-hansen-ceo-fitse-tv');
									$args = array(
									  'name'        => $the_slug,
									  'post_type'   => 'post',
									  'post_status' => 'publish',
									  'numberposts' => 1
									);
									$my_posts = get_posts($args);
									if( $my_posts ) :
									  $title =  $my_posts[0]->post_title;
									  $excerpt = $my_posts[0]->post_excerpt;
									  $PostId = $my_posts[0]->ID;
									  $thumb = get_the_post_thumbnail ( $PostId , array(139,97));
									 // print_r($thumb); die;
									endif;
									
                        	?>
                        </div>
                        <div class="about_contant">
                        	<div class="ab_left"><?php echo $thumb;?></div>
                            <div class="ab_right"><h2><?php echo $title;?></h2>
                             <p><?php echo $excerpt;?><a href="<?php echo get_permalink($PostId);?>">Read More<span><img src="<?php echo get_template_directory_uri();?>/images/arrow.png" width="10" height="10" alt="Arrow"></span></a></p>
                            </div>
                            
                        </div>
                       
                    </div>
            <?php if ( is_active_sidebar( 'home-side-news' ) ) {
				dynamic_sidebar( 'home-side-news' ); 
			  }
		?>
		

        <!-- /videoRight --></div>
    </div>
</section>

<?php
get_footer();
