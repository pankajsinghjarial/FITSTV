<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Fitse.tv
 * @subpackage Twenty_Fourteen
 * @since Fitse.tv 1.0
 */
?>

<div class="episodesBanner full-w">
	<div class="tvSlider">
    	<div class="tvSliderIn">
    	<ul class="bxsliderTv">
        	<li>
				<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1){ ?>
					<video width="100%" src="<?php echo get_post_meta($postId,'wpcf-video',true);?>" id="player1" poster="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true),'fitstv-medium');?>" controls="controls" preload="none">
					</video>
				<?php }else{ ?>
					<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true),'fitstv-medium');?>" width="745" height="416" alt="<?php echo $post->post_title; ?>">
				<?php } ?>
            </li>
        </ul>
        </div>
        <div class="slider_contant">
        	<ul>
            <!--<li class="yoga"> Category; Yoga</li>
            <li><span><img src="< ?php echo get_template_directory_uri();?>/images/nav-sep.jpg" width="1" height="7" alt="sep"></span></li>-->
            <li class="comments">
				<?php 
					if ( have_comments() ) { 
						printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'fitstv' ),
							number_format_i18n( get_comments_number() ) );
					}else{
						echo 'No Comments';
					} 
				?>
            </li>
            </ul>
            <span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
          <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <section><b>Share:</b><?php get_ssb();?></section>
        </div>
    </div>
<!-- /aboutBanner --></div>

<div class="videoDetails full-w">
	<div class="inner-w">
    	<?php the_content();?>

<section><b>Share:</b><?php get_ssb();?></section>
<div class="clear"></div>
<section>
<?php the_tags('<b>Tags:</b>'); ?>
<?php 
	$nextPost =  get_next_post();
	if($nextPost){ ?>
		<input type="hidden" id="nextPost" value="<?php echo $nextPost->guid;?>"/>
	<?php }
?>
<?php 
	$prevPost =  get_previous_post();
	if($prevPost){ ?>
		<input type="hidden" id="prevPost" value="<?php echo $prevPost->guid;?>"/>
	<?php }
?>
</section>


<div class="boxCol full-w videoSlider">
    <div class="full-w">
    <h3>Related Episodes </h3>
    <!--<a class="viewMore" href="javascript:void(0);">View All</a>-->
    </div>
    <?php
    $args=array(
	'post_type' => get_post_type(),
	'post__not_in' => array($post->ID),
	'posts_per_page'=>10
	);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {?>
    <div class="mrgTop20 full-w">
        <ul class="basicSliders2">	
			<?php
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li class="slide">
					<?php if(get_post_meta(get_the_ID(),'wpcf-attachment-type',true) == 1): ?>
						<img src="<?php echo getImage(get_post_meta(get_the_ID(),'wpcf-thumbnail',true));?>" width="201" height="149" alt="<?php echo $post->post_title; ?>">
					<?php else: ?>
						<img src="<?php echo getImage(get_post_meta(get_the_ID(),'wpcf-image',true));?>" width="210" height="149" alt="<?php echo $post->post_title; ?>">
					<?php endif; ?>
					<section><a href="<?php echo get_permalink();?>"><?php the_title();?></a> 
					<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?></span>
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
			<?php
				endwhile;
			?>
		</ul>
    </div>
    <?php
	}
	wp_reset_query();
	?>

</div>
</div>
<!-- /videoDetails --></div>
