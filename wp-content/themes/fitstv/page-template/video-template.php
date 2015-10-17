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
        <section class="sortColumn">
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
        </div>
        
        <div class="sortTabber full-w">
          <ul>
            <li class="cl1"><a href="#tabs-1"><span>Featured</span> </a></li>
            <li class="cl2"><a href="#tabs-2"><span>On Demand</span> </a></li>
            <li class="cl8"><a href="#tabs-3"><span>News</span> </a></li>
            <li class="cl9"><a href="#tabs-4"><span>Reviews</span> </a></li>
            <li class="cl5"><a href="#tabs-5"><span>Wordouts</span> </a></li>
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
            	<ul>
					<?php 
						foreach($categories as $category){ ?>
							<li><a href="javascript:void(0);"><?php echo $category->cat_name;?></a></li>
						<? } ?>
                </ul>
            </section>
            <section class="tabColumnsR cateG">
            <ul>
				<?php
				$args = array( 'posts_per_page' => 6, 'post_type' => 'video' );
				$lastposts = get_posts( $args );
				foreach ( $lastposts as $post ) :
				  setup_postdata( $post );?>
					<li class="item">
						<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
							<img src="<?php echo get_post_meta($post->ID,'wpcf-thumbnail',true);?>" width="306" height="212" alt="new01">
							<figure class="icnPlay">
								<img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play">
							</figure>
						<?php else: ?>
							<img src="<?php echo get_post_meta($post->ID,'wpcf-image',true);?>" width="306" height="212" alt="new01">
						<?php endif; ?>
						<h4>Cross Fit Workouts</h4>
						<section class="blackTrans">
						<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
						<h3><?php the_title(); ?></h3>
						<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?><a href="<?php the_permalink(); ?>">Read More</a></span>
						</section>
					</li>
				<?php endforeach; 
				wp_reset_postdata(); ?>
            </ul>
            <div class="clear"></div>
            <div class="loadMore"><img width="110" height="30" alt="load more" src="<?php echo get_template_directory_uri();?>/images/load-more.png"></div>
            </section>
          </div>
          <div id="tabs-2">
          	<ul>
            	<li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
          <div id="tabs-3">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
          <div id="tabs-4">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
          <div id="tabs-5">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
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
          
          
          <div class="clear"></div>   
          
        </div>
        
        
                         
    </div>
</div>

<?php
get_footer();
