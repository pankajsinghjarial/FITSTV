<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */

get_header(); ?>
<?php if(is_page('about')){ ?>
	<div class="overlayBg"></div>
<?php } ?>
<div class="aboutBanner full-w">
	<figure><img src="<?php echo get_template_directory_uri();?>/images/about-bg.jpg" width="1440" height="554" alt="About"></figure>
    <div class="aboutTxt">
    

	<?php 
	if(is_active_sidebar('about-page-top-heading')){
		
		dynamic_sidebar('about-page-top-heading');
		
	}
	
	
	?>

	</div>
<!-- /aboutBanner --></div>

<div class="aboutChain full-w">
	<div class="inner-w">
      <div class="full-w mrgTop45">
        	<div class="aboutAdd floatLeft">
            	<?php 
									$args = array(
									  'name'        => 'about-post-up',
									  'post_type'   => 'abouts',
									  'post_status' => 'publish',
									  'numberposts' => 1
									);
									$my_posts = get_posts($args);
									
									if( $my_posts ) :
									  $title =  $my_posts[0]->post_title;
									  $content =  $my_posts[0]->post_content;
									  $excerpt = $my_posts[0]->post_excerpt;
									  $PostId = $my_posts[0]->ID;
									  $post_permalink = get_permalink($PostId);
										if(get_post_meta($PostId,'wpcf-attachment-type',true) == 1){
											
											$thumb = get_post_meta($PostId,'wpcf-thumbnail',true);
											$video_url = get_post_meta($PostId,'wpcf-video',true);
											$video_title = GetAttachmentAttributesByUrl($video_url,'title');
											$video_description = GetAttachmentAttributesByUrl($video_url,'description');
											$video_mime_type = GetAttachmentAttributesByUrl($video_url,'mime-type');
											
											}else{
												$thumb = get_post_meta($PostId,'wpcf-image',true);
											}
										$thumb = getImage($thumb, 'post-thumbnails');
										echo $content; wp_reset_postdata();
									endif;
									
									
                ?>
            </div>
            <div class="aboutAddImg floatRight">
            
   		    <figure>
            <video width="361" height="243" src="<?php echo  $video_url;?>" type="<?php echo  $video_mime_type;?>" 
                id="player11" poster="<?php echo $thumb; ?>" 
                controls="controls" preload="none">
            </video>
            </figure>
            
            </div>
      </div>
      <div class="full-w mrgTop55">
            
            <div class="aboutAddImg floatLeft thumbSliderOut">
                <?php 
									$args = array(
									  
									  'post_type'   => 'gallery-about',
									  'post_status' => 'publish',
									  'numberposts' => 5,
									  'order'=>'ASC'
									);
									$query_posts = new WP_Query($args);
									
									 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 
											//the_content();
										$excerpts[] = get_the_excerpt();
										$th = get_post_thumbnail_id( $post->ID );
										//echo $th;
										$image = wp_get_attachment_url( $th);
									    $small_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),array(85,85));
									    $large_imgs[]  = $image;
										$small_imgs[]  = $small_image;
										
									 endwhile; 
										wp_reset_postdata();
									 else : 
									 _e( 'Sorry, no posts matched your criteria.' );
									  endif;
									 // echo "<pre>";
									//print_r($large_imgs);
									//print_r($small_imgs); die;
				?>
                
                <ul class="thumbSlider">
					<?php foreach ($large_imgs as $key => $li) {?>
                  <li><img src="<?php echo $li;?>" title="<?php echo $excerpts[$key]; ?>"></li>
                  <?php } ?>
                </ul>
                <div id="bx-pager">
					<?php foreach ($small_imgs as $key => $si) {?>
                  <a data-slide-index="<?php echo $key;?>" href=""><img src="<?php echo $si[0];?>" width="85" height="85" alt="thumb01"></a>
                  <?php } ?>
                </div>
            </div>
            
        	<div class="aboutAdd floatRight">
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
									  $content =  $my_posts[0]->post_content;
									  $excerpt = $my_posts[0]->post_excerpt;
									  $PostId = $my_posts[0]->ID;
									  
									  //$content = apply_filters('the_content', $content);
									  //$content = str_replace(']]>', ']]&gt;', $content);
										echo $content;
									  //$thumb = get_the_post_thumbnail ( $PostId , array(139,97));
									  //print_r($content); die;
									  wp_reset_postdata();
									endif;
									
									
                ?>
				<a href="javascript:void(0);" class="askAQtn">Ask a Question</a>
                
            </div>
	  </div>
      <div class="full-w mrgTop45">
        	<div class="aboutAdd floatLeft">
				<?php $the_slug =  'about-bottom-post';
									$args = array(
									  'name'        => $the_slug,
									  'post_type'   => 'abouts',
									  'post_status' => 'publish',
									  'numberposts' => 1
									);
									$my_posts = get_posts($args);
									if( $my_posts ) :
									  $title =  $my_posts[0]->post_title;
									  $content =  $my_posts[0]->post_content;
									  $excerpt = $my_posts[0]->post_excerpt;
									  $PostId = $my_posts[0]->ID;
									  $post_permalink = get_permalink($PostId);
										if(get_post_meta($PostId,'wpcf-attachment-type',true) == 1){
											
											$thumb = get_post_meta($PostId,'wpcf-thumbnail',true);
											$video_url = get_post_meta($PostId,'wpcf-video',true);
											$video_title = GetAttachmentAttributesByUrl($video_url,'title');
											$video_description = GetAttachmentAttributesByUrl($video_url,'description');
											$video_mime_type = GetAttachmentAttributesByUrl($video_url,'mime-type');
											
											}else{
												$thumb = get_post_meta($PostId,'wpcf-image',true);
											}
										$thumb = getImage($thumb, 'post-thumbnails');
										echo $content;
											wp_reset_postdata();
									endif;
									
						
                ?>
            </div>
            <div class="aboutAddImg floatRight">
   		    <figure>
            <video width="361" height="243" src="<?php echo  $video_url;?>" type="<?php echo  $video_mime_type;?>" 
                id="player11" poster="<?php echo $thumb; ?>" 
                controls="controls" preload="none">
            </video>
            </figure>
            
            </div>
            
      </div>                    
    </div>
</div>
<div class="popup_info askAQtnPop" style="display: none;">
                  <button class="close my_modal_close" type="button"><span aria-hidden="true">×</span></button>
                  <div class="pop_con">
                        <p>Ask a Question</p>
                        <?php  echo do_shortcode('[contact-form-7 id="117" title="Contact Form for Contact Query"]');?>
                    </div>         
                </div>
<?php
get_footer();

