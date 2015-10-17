<?php
/*
Plugin Name: Fits tv widgets
Description: Custom plugin for fitstv theme
Author: Innovative minds
Version: 1.0
*/
/**
 * Adds News_Top_Widget widget.
 */
class News_Top_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'News_Top_Widget', // Base ID
			__( 'News Top Widget', 'text_domain' ), // Name
			array( 'description' => __( 'Choose News Listing Page Top News', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$postId = $instance['topNews'];
		$post = get_post($postId);
		$post_excerpt = $post->post_excerpt;//get_post_meta($postId);
		$thumb = get_post_meta($postId,'wpcf-thumbnail',true);
		$video_url = get_post_meta($postId,'wpcf-video',true);
		$title = get_the_title();
		$description = get_the_title();
		?>
		<div class="breking_news">
			<div class="newsLft">
				<div class="breking_news_img breaking_news_img_padding">
				<?php  displayVideo('breking_news_img',$thumb, $video_url, 394 , 222, $title, $description);?>
				</div>
				
			</div>
			<div class="newsRht">
				<div class="breking_news_data">
					<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
					<?php echo $post->post_content;?>
					<h1><?php echo $post->post_title;?></h1>
					<a class="spa" href="<?php echo get_permalink($postId);?>">Read more &gt;</a></p>
					<h6 class="shere"><b>Share:</b><img src="<?php echo get_template_directory_uri();?>/images/share-links.png" width="234" height="20" alt="share"></h6>
				</div>
			</div>
		</div>

	<?php
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$topNews = ! empty( $instance['topNews'] ) ? $instance['topNews'] : 0;
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'topNews' ); ?>"><?php _e( 'Choose Top news:' ); ?></label> 
		</p>
		<p>
		<?php generate_post_select($this->get_field_id( 'topNews' ),$this->get_field_name( 'topNews' ),'news',$topNews); ?>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['topNews'] = $new_instance['topNews'];

		return $instance;
	}

} 

/**
 * Adds News_Top_Widget widget.
 */
class Video_Top_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Video_Top_Widget', // Base ID
			__( 'Videos Top Widget', 'text_domain' ), // Name
			array( 'description' => __( 'Choose Videos Listing Page Top Video', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$postId = $instance['topVideo'];
		$post = get_post($postId);
		$post_excerpt = $post->post_excerpt;//get_post_meta($postId);
		$thumb = get_post_meta($postId,'wpcf-thumbnail',true);
		$video_url = get_post_meta($postId,'wpcf-video',true);
		
		$title = get_the_title();
		$description = get_the_title();
		//print_r($title);  die;
		//print_r($video_url);
		 //die;
		?>
		<div class="breking_news">
			<div class="newsLft">
				<div class="breking_news_img breaking_news_img_padding">
				<?php  displayVideo('breking_news_img',$thumb, $video_url, 394 , 222, $title, $description);?>
				</div>
				</div>
				
			<div class="newsRht">
				<div class="breking_news_data">
					<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
					<?php echo $post_excerpt;?>
					<h1><?php echo $post->post_title;?></h1>
					<a class="spa" href="<?php echo get_permalink($postId);?>">Read more &gt;</a></p>
					<h6 class="shere"><b>Share:</b><img src="<?php echo get_template_directory_uri();?>/images/share-links.png" width="234" height="20" alt="share"></h6>
				</div>
			</div>
		</div>

	<?php
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$topNews = ! empty( $instance['topVideo'] ) ? $instance['topVideo'] : 0;
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'topVideo' ); ?>"><?php _e( 'Choose Top news:' ); ?></label> 
		</p>
		<p>
		<?php generate_post_select($this->get_field_id( 'topVideo' ),$this->get_field_name( 'topVideo' ),'video',$topNews); ?>
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['topVideo'] = $new_instance['topVideo'];

		return $instance;
	}

} 



function fitstv_custom_widgets_init(){
	register_widget( 'News_Top_Widget' );
	register_widget( 'Video_Top_Widget' );
}

add_action( 'widgets_init', 'fitstv_custom_widgets_init' );

function generate_post_select($select_id,$select_name, $post_type, $selected = 0) {
        $post_type_object = get_post_type_object($post_type);
        $label = $post_type_object->label;
        $posts = get_posts(array('post_type'=> $post_type, 'post_status'=> 'publish', 'suppress_filters' => false, 'posts_per_page'=>-1));
        echo '<select name="'. $select_name .'" id="'.$select_id.'">';
        echo '<option value = "" >Choose '.$label.' </option>';
        foreach ($posts as $post) {
            echo '<option value="', $post->ID, '"', $selected == $post->ID ? ' selected="selected"' : '', '>', $post->post_title, '</option>';
        }
        echo '</select>';
    }
