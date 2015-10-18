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
		$video_title = GetAttachmentAttributesByUrl($video_url,'title');
		$video_description = GetAttachmentAttributesByUrl($video_url,'description');
		?>
		<div class="breking_news">
			<div class="newsLft">
				<div class="breking_news_img breaking_news_img_padding">
				<?php  displayVideo('breking_news_img',$thumb, $video_url, 394 , 222, $video_title, $video_description);?>
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
		$video_title = GetAttachmentAttributesByUrl($video_url,'title');
		$video_description = GetAttachmentAttributesByUrl($video_url,'description');
		
		?>
		<div class="breking_news">
			<div class="newsLft">
				<div class="breking_news_img breaking_news_img_padding">
				<?php  displayVideo('breking_news_img',$thumb, $video_url, 394 , 222, $video_title, $video_description);?>
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

class Home_Episode_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Home_Episode_Widget', // Base ID
			__( 'Home Episode Widget', 'text_domain' ), // Name
			array( 'description' => __( 'Choose Episodes to display on home page', 'text_domain' ), ) // Args
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
		$postIds = $instance['homeEpisodes'];

		echo '<div class="bxMoveSlider full-w"><ul id="owl-demo">';
		foreach($postIds as $postId){
			
			$post = get_post($postId);
			$post_excerpt = $post->post_excerpt;//get_post_meta($postId);
			$Episode_title = $post->post_title;
			$Episode_created = $post->post_date;
			$thumb = get_post_meta($postId,'wpcf-thumbnail',true);
			$video_url = get_post_meta($postId,'wpcf-video',true);
			$video_title = GetAttachmentAttributesByUrl($video_url,'title');
			$video_description = GetAttachmentAttributesByUrl($video_url,'description');
		
		?>	
			<li class="item">
				<?php  //displayVideo('',$thumb, $video_url, 288 , 148, $video_title, $video_description);?>
				<img src="<?php echo $thumb;?>" width="288" height="148" alt="slide04">
				<div class="moveTrans">
				<h4>Cross Fit Workouts</h4>
					<a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					<div class="clear"></div>
          <section class="blackTrans">
            <span><?php echo date('F d, Y',strtotime($Episode_created));?></span>
            <h3><?php echo $Episode_title ?></h3>
            <span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?></span>
          </section>  
        </div>
        </li>
	<?php		
		}
		
		echo "</ul></div>";
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$homeEpisodes = ! empty( $instance['homeEpisodes'] ) ? $instance['homeEpisodes'] :array();
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'homeEpisodes' ); ?>"><?php _e( 'Select Episodes:' ); ?></label> 
		</p>
		<p>
		<?php generate_multiple_post_select($this->get_field_id( 'homeEpisodes' ),$this->get_field_name( 'homeEpisodes' ),'episode',$homeEpisodes); ?>
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
		
		//print_r($new_instance);
		//print_r($old_instance);
		//die;
		$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['homeEpisodes'] = $new_instance['homeEpisodes'];

		return $instance;
	}

} 





class Home_Side_News_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Home_Side_News_Widget', // Base ID
			__( 'Home Side News Widget', 'text_domain' ), // Name
			array( 'description' => __( 'Choose Side News to display on home page', 'text_domain' ), ) // Args
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
		$postIds = $instance['homeSideNews'];
		echo '<div class="recent_news">
                    	<div class="recent_news_title">
                        	<h3>Recent News</h3>
                        </div>
                        <div class="recent_news_contant">
                        	<ul>';
		foreach($postIds as $postId){
			
			$post = get_post($postId);
			$post_excerpt = $post->post_excerpt;//get_post_meta($postId);
			$Episode_title = $post->post_title;
			$Episode_created = $post->post_date;
			if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1){
				
				$thumb = get_post_meta($postId,'wpcf-thumbnail',true);
			}else{
					$thumb = get_post_meta($postId,'wpcf-image',true);
			}
			
			//$video_url = get_post_meta($postId,'wpcf-video',true);
			//$video_title = GetAttachmentAttributesByUrl($video_url,'title');
			//$video_description = GetAttachmentAttributesByUrl($video_url,'description');
		
		?>	
		
		<li>
            <div class="rece_data">
               	<div class="rece_left"><img src="<?php echo $thumb; ?>" width="54" height="48" alt="pic1"></div>
                     <div class="rece_right">
                      	<h4><?php echo $Episode_title;?></h4>
                     </div>
                     <p><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,40).'...':$post->post_excerpt;?><a href="<?php ?>">Read More<span><img src="<?php echo get_template_directory_uri();?>/images/arrow.png" width="10" height="10" alt="Arrow"></span></a></p>
                 </div>
        </li>
        
	<?php		
		}
		
		echo '</ul>
                 <div class="view_data">
                       	<a href="#">View All<span class="big"><img src="<?php echo get_template_directory_uri();?>/images/arrow.png" width="10" height="10" alt="Arrow"></span></a>
                 </div>
               </div>
          </div>';
          
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$homeSideNews = ! empty( $instance['homeSideNews'] ) ? $instance['homeSideNews'] :array();
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'homeSideNews' ); ?>"><?php _e( 'Select Episodes:' ); ?></label> 
		</p>
		<p>
		<?php generate_multiple_post_select($this->get_field_id( 'homeSideNews' ),$this->get_field_name( 'homeSideNews' ),'news',$homeSideNews); ?>
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
		
		//print_r($new_instance);
		//print_r($old_instance);
		//die;
		$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['homeSideNews'] = $new_instance['homeSideNews'];

		return $instance;
	}

} 

class Episode_Slider_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Episode_Slider_Widget', // Base ID
			__( 'Episode Slider Widget', 'text_domain' ), // Name
			array( 'description' => __( 'Choose Episodes to display on episode main slider', 'text_domain' ), ) // Args
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
		$postIds = $instance['topEpisodes'];
		?>
		<div class="tvSlider">
    	<div class="tvSliderIn">
    	<ul class="bxsliderTv">
		<?php
		foreach($postIds as $key=>$postId){
			$post = get_post($postId);
			$post_excerpt = $post->post_excerpt;//get_post_meta($postId);
			$Episode_title = $post->post_title;
			$Episode_created = $post->post_date;
			$attachmentType = get_post_meta($postId,'wpcf-attachment-type',true);
			if($attachmentType == 1){
				$thumb = getImage(get_post_meta($postId,'wpcf-thumbnail',true),'fitstv-medium');
			}else{
				$thumb = getImage(get_post_meta($postId,'wpcf-image',true),'fitstv-medium');
			}
			$video_url = get_post_meta($postId,'wpcf-video',true);
			$video_title = GetAttachmentAttributesByUrl($video_url,'title');
			$video_description = GetAttachmentAttributesByUrl($video_url,'description');
		
		?>	
			<li>
				<?php 
				if($attachmentType == 1){ 
					displayVideo('episode-slide-'.$key,$thumb,$video_url,745, 416,$video_title,$video_description);
				}else{ ?>
					<img src="<?php echo $thumb;?>" width="745" height="416" alt="<?php echo $Episode_title;?>">
				<?php } ?>
            </li>
	<?php		
		}
	?>
	</ul>
        </div>
        <div class="slider_contant">
        	<!--<ul>
            <li class="yoga"> Category; Yoga</li>
            <li><span><img src="< ?php echo get_template_directory_uri();?>/images/nav-sep.jpg" width="1" height="7" alt="sep"></span></li>
            <li class="comments"> 5 Comments</li>
            </ul>-->
            <!--<span>August 23, 2011</span>
          <h2><a href="video-details.html">Episode #89 &ndash; The Fitse Video</a></h2>
            <p>After an amazing run that spanned more than half a decadeRead <a href="javascript:void(0);">more ></a></p>-->
            <section><b>Share:</b><img src="<?php echo get_template_directory_uri();?>/images/share-links.png" width="234" height="20" alt="share"></section>
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
		$homeEpisodes = ! empty( $instance['topEpisodes'] ) ? $instance['topEpisodes'] :array();
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'topEpisodes' ); ?>"><?php _e( 'Select Episodes:' ); ?></label> 
		</p>
		<p>
		<?php generate_multiple_post_select($this->get_field_id( 'topEpisodes' ),$this->get_field_name( 'topEpisodes' ),'episode',$homeEpisodes); ?>
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
		
		//print_r($new_instance);
		//print_r($old_instance);
		//die;
		$instance = array();
		//$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['topEpisodes'] = $new_instance['topEpisodes'];

		return $instance;
	}

} 


function fitstv_custom_widgets_init(){
	register_widget( 'News_Top_Widget' );
	register_widget( 'Video_Top_Widget' );
	register_widget( 'Home_Episode_Widget' );
	register_widget( 'Episode_Slider_Widget' );
	register_widget( 'Home_Side_News_Widget' );
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

function generate_multiple_post_select($select_id,$select_name, $post_type, $selected ) {
	    $post_type_object = get_post_type_object($post_type);
        $label = $post_type_object->label;
        $posts = get_posts(array('post_type'=> $post_type, 'post_status'=> 'publish', 'suppress_filters' => false, 'posts_per_page'=>-1));
        echo '<select multiple="multiple" name="'. $select_name .'[]" id="'.$select_id.'">';
        echo '<option value = "" >Choose '.$label.' </option>';
        foreach ($posts as $post) {
            echo '<option value="', $post->ID, '"',in_array( $post->ID ,$selected) ? ' selected="selected"' : '', '>', $post->post_title, '</option>';
        }
        echo '</select>';
}
