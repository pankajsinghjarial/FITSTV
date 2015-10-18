<?php
/**
 * Fitstv functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Fitstv
 * @since Fitstv 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see fitstv_content_width()
 *
 * @since Fitstv 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

if ( ! function_exists( 'fitstv_setup' ) ) :
/**
 * Fitstv setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 * @since Fitstv 1.0
 */
function fitstv_setup() {


	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 306, 212, true );
	add_image_size( 'fitstv-large-thumb', 1351, 603, true );
	add_image_size( 'fitstv-tv-thumb', 394, 222, true );
	add_image_size( 'fitstv-medium', 746, 416, true );
	add_image_size( 'fitstv-image', 287, 148, true );
	add_image_size( 'fitstv-main-thumb', 499, 442, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary'   => __( 'Top primary menu', 'fitstv' ),
		'secondary' => __( 'Secondary menu in left sidebar', 'fitstv' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Add support for featured content.
	add_theme_support( 'featured-content', array(
		'featured_content_filter' => 'fitstv_get_featured_posts',
		'max_posts' => 6,
	) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
}
endif; // fitstv_setup
add_action( 'after_setup_theme', 'fitstv_setup' );

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Fitstv 1.0
 */
function fitstv_content_width() {
	if ( is_attachment() && wp_attachment_is_image() ) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action( 'template_redirect', 'fitstv_content_width' );

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Fitstv 1.0
 *
 * @return array An array of WP_Post objects.
 */
function fitstv_get_featured_posts() {
	/**
	 * Filter the featured posts to return in Fitstv.
	 *
	 * @since Fitstv 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters( 'fitstv_get_featured_posts', array() );
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Fitstv 1.0
 *
 * @return bool Whether there are featured posts.
 */
function fitstv_has_featured_posts() {
	return ! is_paged() && (bool) fitstv_get_featured_posts();
}

/**
 * Register three Fitstv widget areas.
 *
 * @since Fitstv 1.0
 */
function fitstv_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Episode Page Top Slider', 'fitstv' ),
		'id'            => 'episode-top',
		'description'   => __( 'Episode Page Top Slider', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'News Page Top Area', 'fitstv' ),
		'id'            => 'news-top',
		'description'   => __( 'Top News will appear here.', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Video Page Top Area', 'fitstv' ),
		'id'            => 'video-top',
		'description'   => __( 'Top Video will appear here.', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Episodes on Home page', 'fitstv' ),
		'id'            => 'home-episodes',
		'description'   => __( 'Episodes on Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'News Sidebar on Home page', 'fitstv' ),
		'id'            => 'home-side-news',
		'description'   => __( 'News Sidebar Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'News Slider Crousel on Home page', 'fitstv' ),
		'id'            => 'home-slider-news',
		'description'   => __( 'News Slider Crousel Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Reviews Slider Crousel on Home page', 'fitstv' ),
		'id'            => 'home-slider-reviews',
		'description'   => __( 'News Reviews Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Workout Slider Crousel on Home page', 'fitstv' ),
		'id'            => 'home-slider-workout',
		'description'   => __( 'News Workout Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Main Slider on Home page', 'fitstv' ),
		'id'            => 'home-slider-homepage',
		'description'   => __( 'Main Slider on Home page', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'About the CEO', 'fitstv' ),
		'id'            => 'home-about-ceo',
		'description'   => __( 'About the CEO', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer twitter Slider', 'fitstv' ),
		'id'            => 'footer-twitter-slides',
		'description'   => __( 'Footer twitter Slider', 'fitstv' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Breaking news and Alert widget' ),
		'id'            => 'breaking-news-alert',
		'description'   => __( 'Breaking news and Alert widget', 'fitstv' ),
		'before_widget' => '<div class="new_data"><marquee><p>',
		'after_widget'  => '</p></marquee></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'fitstv_widgets_init');

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Fitstv 1.0
 */
function fitstv_scripts() {

	// Add stylesheets.
	wp_enqueue_style( 'fitstv-reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'fitstv-main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'fitstv-owl', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'fitstv-fonts', get_template_directory_uri() . '/css/fonts.css' );
	wp_enqueue_style( 'fitstv-responsive', get_template_directory_uri() . '/css/responsive.css' );

	// Add scripts.
	wp_enqueue_script( 'fitstv-jquery-1.11.2.min', get_template_directory_uri() . '/js/jquery-1.11.2.min.js' );
	wp_enqueue_script( 'fitstv-jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js' );
	wp_enqueue_script( 'fitstv-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js' );
	wp_enqueue_script( 'fitstv-function', get_template_directory_uri() . '/js/function.js' );
	wp_enqueue_script( 'fitstv-jwplayer', get_template_directory_uri() . '/jwplayer/jwplayer.js' );
	
	if(is_page('videos') || is_page('episodes') || is_page('news-index')){
		wp_enqueue_script( 'fitstv-jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js' );
	}
	if(is_page('videos')){
		wp_enqueue_script( 'fitstv-video-listing', get_template_directory_uri() . '/js/video-listing.js' );
	}
	if(is_page('episodes')){
		wp_enqueue_script( 'fitstv-episodes-listing', get_template_directory_uri() . '/js/episodes-listing.js' );
	}
	if(is_page('news-index')){
		wp_enqueue_script( 'fitstv-news-listing', get_template_directory_uri() . '/js/news-listing.js' );
	}
}
add_action( 'wp_enqueue_scripts', 'fitstv_scripts' );

/**
 * Add global javascript variables.
 *
 * @since Fitstv 1.0
 */
function fitstv_js_variables(){ ?>
      <script type="text/javascript">
        jwplayer.key="Z5/cz3knuJeTN6N9l/Xk1hp9CLjRip+tgIJSQA==";
        var templateUrl = "<?php echo get_template_directory_uri();?>";
        var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
      </script><?php
}
add_action ( 'wp_head', 'fitstv_js_variables' );

if ( ! function_exists( 'fitstv_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Fitstv 1.0
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */
function fitstv_paging_nav() {
	global $wp_query, $wp_rewrite;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $wp_query->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'twentyfourteen' ),
		'next_text' => __( 'Next &rarr;', 'twentyfourteen' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentyfourteen' ); ?></h1>
		<div class="pagination loop-pagination">
			<?php echo $links; ?>
		</div><!-- .pagination -->
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

/**
 * Display video using JwPlayer.
 *
 * @since Fitstv 1.0
 *
 * $divId           DivID for Player
 * $thumbnailPath   Thumbnail Path of video
 * $videoPath       Video Path of video
 * $width           Width of container
 * $height          Height of container
 * $title           Title of Video
 * $description     Description of video
 */
function displayVideo($divId = "myPlayer",$thumbnailPath = '',$videoPath = '',$width = 1024, $height = 360,$title = '',$description = ''){ 
    echo '<div id="'.$divId.'">Loading the player...</div>
    <script type="text/javascript">
    var playerInstance = jwplayer("'.$divId.'");
    playerInstance.setup({
        file: "'.$videoPath.'",
        image: "'.$thumbnailPath.'",
        width: "'.$width.'",
        height: "'.$height.'",
        title: "'.$title.'",
        description: "'.$description.'"
    });
    </script>';
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

/*
 * FUNCTION : GetAttachmentAttributesByUrl()
 * function Get attributes of attachment of any custom post type
 * params : Value of the option (url), Attribute Name 
 * If Attribute name is not given then returns the attachment post.
 * 
 * */

	function GetAttachmentAttributesByUrl($value_url=NULL, $attribute_name=NULL)
	{
		If(($value_url != NULL))
		{
				$postID = getIDfromGUID($value_url);
				$post = get_post($postID);
				$post_content = $post->post_content;
				$post_title = $post->post_title;
				$mime_type = $post->post_mime_type;
				if($attribute_name == 'description'){
					return $post_content;
				}else if($attribute_name == 'title'){
					return $post_title;
				}else if($attribute_name == 'mime-type'){
					return $mime_type; 
				}else{
					return $post; 
				}
		}else{
			$error = 'Error : Please give the correct parameters';
				return $error;
		}
			
	}
	
	function getIDfromGUID( $guid ){
		global $wpdb;
		return $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE guid=%s", $guid ) );

	}

	function getImage($imageUrl,$size='thumbnail'){
		$imageId = getIDfromGUID($imageUrl);
		$image = wp_get_attachment_image_src( $imageId, $size );
		return $image = array_shift($image);
	}

	function getCatergoryID($taxonomy,$slug){
		$term = get_term_by('slug',$slug,$taxonomy);
		return $term->term_id;
	}

	function loadMorePost(){
		$postType = $_REQUEST['type'];
		$page = $_REQUEST['page'];
		$limit = $_REQUEST['limit'];
		$taxonomy = $_REQUEST['taxonomy'];
		$term = $_REQUEST['term'];
		$tab = $_REQUEST['tab'];
		$offset = $limit*($page);
		$args = array( 
			'posts_per_page' => $limit,
			'offset' => $offset,
			'post_type' => $postType,
			'tax_query' => array(
				array(
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $term,
				)
			)
		);
		$lastposts = get_posts( $args );
		unset($args['posts_per_page']);
		unset($args['offset']);
		$the_query = new WP_Query( $args );
		$totalPosts = $the_query->found_posts;
		$totalPages = ceil($totalPosts/$limit);
		$response = array();
		foreach($lastposts as $post){
			$data = array();
			$data['id'] = $post->ID;
			$data['title'] = $post->post_title;
			$data['date'] = date('M d, Y',strtotime($post->post_date));
			$data['attachment_type'] = get_post_meta($post->ID,'wpcf-attachment-type',true);
			if($data['attachment_type'] == 1){
				$data['image'] = getImage(get_post_meta($post->ID,'wpcf-thumbnail',true));
				if(($tab != 'videos' && $postType == 'video') || ($tab != 'featured' && $postType == 'news'))
				$data['image'] = getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-image');
				
			}else{
				$data['image'] = getImage(get_post_meta($post->ID,'wpcf-image',true));
				if($tab != 'videos' && $postType == 'video')
				$data['image'] = getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-image');
			}
			$data['rating'] = get_post_meta($post->ID,'wpcf-rating',true);
			$data['excerpt'] = (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;
			$data['link'] = get_permalink($post->ID);
			$response['data'][] = $data;
		}
		$response['count'] = $totalPages;
		echo json_encode($response);
		die;
	}
add_action('wp_ajax_loadMorePost', 'loadMorePost');
add_action('wp_ajax_nopriv_loadMorePost', 'loadMorePost');
