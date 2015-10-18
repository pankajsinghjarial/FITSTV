<?php 
function displayTerm($term){ ?>
	<ul class="tabColumnsR cateG epsid <?php echo $term;?>-data">
		<?php
		$args = array( 
				'posts_per_page' => 8, 
				'post_type' => 'episode',
				'tax_query' => array(
					array(
						'taxonomy' => 'episode-type',
						'field' => 'slug',
						'terms' => $term,
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
			<input type="hidden" id="<?php echo $term;?>-page" value="1" />
			<input type="hidden" id="<?php echo $term;?>-totalpage" value="<?php echo $totalPage;?>"/>
			<input type="hidden" id="<?php echo $term;?>-limit" value="<?php echo $limit;?>"/>
			<?php
			foreach ( $lastposts as $post ) :
			  setup_postdata( $post );?>
				<li class="item">
					<?php if(get_post_meta($post->ID,'wpcf-attachment-type',true) == 1): ?>
						<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-thumbnail',true));?>" width="306" height="212" alt="new01">
						<figure class="icnPlay">
							<img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play">
						</figure>
					<?php else: ?>
						<img src="<?php echo getImage(get_post_meta($post->ID,'wpcf-image',true));?>" width="306" height="212" alt="new01">
					<?php endif; ?>
					<h4>Cross Fit Workouts</h4>
					<section class="blackTrans">
					<span><?php echo date('M d, Y',strtotime($post->post_date));?></span>
					<h3><?php echo $post->post_title; ?></h3>
					<span><?php echo (strlen($post->post_excerpt)>20)?substr($post->post_excerpt,0,20).'...':$post->post_excerpt;?><a href="<?php echo get_the_permalink($post->ID); ?>">Read More</a></span>
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
	<div class="<?php echo $term;?>-loadMore loadMore displayNone"><img alt="load more" src="<?php echo get_template_directory_uri();?>/images/loader.gif"></div> 
<?php } ?>
