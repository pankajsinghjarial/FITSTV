<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <!--[if IE]><script src="<?php echo get_template_directory_uri();?>/js/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	<script>
$(document).ready(function(){
var wResize = $(window).width();
if (wResize < 767) {
	$(function(){
	var overlay = $('<div id="overlay"></div>');
	overlay.show();
	overlay.appendTo(document.body);
	$('.my_modal').show();
	$('.close').click(function(){
	$('.my_modal').hide();
	overlay.appendTo(document.body).remove();
	return false;
	});
	
	$('.x').click(function(){
	$('.my_modal').hide();
	overlay.appendTo(document.body).remove();
	return false;
	});
	});
}
});
</script>
	</head>

	<body>

	<div class="popup_data">
		<a href="javascript:void(0);" class="my_modal_open" id="sidebar"><img src="<?php echo get_template_directory_uri();?>/images/green.png" width="66" height="66" alt="Green"></a>
		<div class="popup_info my_modal">
		  <!-- Modal -->
		  <button type="button" class="close my_modal_close"><span aria-hidden="true">&times;</span></button>
		  <div class="pop_heading">
				<span><img src="<?php echo get_template_directory_uri();?>/images/img6.png" alt=""/></span>
				<h4>Subscribe To Fitse TV</h4>
			</div>
		  <div class="pop_con">
				<p>After an amazing run that his retirement from producing.</p>
				<?php echo do_shortcode('[contact-form-7 id="88" title="Contact Form for Subscription"]');?>
			</div>         
		</div>
	</div>
	<section class="<?php if(is_home() || is_front_page() || is_page('home')){echo 'home';}else{echo 'about';}?> full-w postionR">
			<div class="inner-w">
					<header>
					  <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/fitse-logo.png" width="127" height="40" alt="FITSE"></a></div>
					  <div class="menu"><img src="<?php echo get_template_directory_uri();?>/images/menu.png" width="42" height="33" alt="menu"></div>
					  <nav>
						<ul>
							<?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ,'before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '%3$s','depth' => 0,	'walker' => '') ); ?>
							<li class="searchIcn">
							<div id="sb-search" class="sb-search">
							<form class="searchbox">
								<input type="search" placeholder="Search......" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
								<input type="submit" class="searchbox-submit" value="">
								<span class="searchbox-icon">GO</span>
							</form>
							</div>
							</li>
							<li class="facebook socialIcns"><a href="https://www.facebook.com/FitseTV#">Facebook</a></li>
							<li class="twitter socialIcns"><a href="https://twitter.com/fitsetv">Twitter</a></li>
							<li class="pinterset socialIcns"><a href="https://www.pinterest.com/FitseTV/">Pinterset</a></li>
							
							<li class="book socialIcns"><a href="https://instagram.com/fitsetv/">Book</a></li>
						</ul>
						</nav>
					</header>
				</div>
			<div class="clear"></div>
            <?php if(is_home() || is_front_page() || is_page('home')){ get_template_part('home-header','additional'); } ?>
	</section>
