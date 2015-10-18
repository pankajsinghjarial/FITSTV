<?php
/**
 * Template Name: Home page Template
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fitstv
 * @since Fitstv 1.0
 */

get_header(); ?>

<section class="home-videos full-w">	
    <div class="inner-w">
    	<div class="videoLeft">
            <h2>Videos</h2>
            
            <section class="rightCol">
                <a href="javascript:void(0);" title="Recent" class="active">Recent</a>
                <a href="javascript:void(0);" title="Alphabetical">Alphabetical</a>
                <a href="javascript:void(0);" title="Highest Rating">Highest Rating</a>
            </section>
            
            <div class="searchBar">
                <input type="text" placeholder="Search Bar">
                <button><img src="<?php echo get_template_directory_uri();?>/images/searchbtn.png" width="40" height="40" alt="Search"></button>
            </div>
        	
            <?php if ( is_active_sidebar( 'home-slider-news' ) ) {
				dynamic_sidebar( 'home-slider-news' ); 
			  }
		?>
		<?php if ( is_active_sidebar( 'home-slider-reviews' ) ) {
				dynamic_sidebar( 'home-slider-reviews' ); 
			  }
		?>
		<?php if ( is_active_sidebar( 'home-slider-workout' ) ) {
				dynamic_sidebar( 'home-slider-workout' ); 
			  }
		?>
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
