<?php
/**
 * Template Name: Contact Us Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */

get_header(); ?>
<div class="aboutBanner full-w">
	<figure><img src="<?php echo get_template_directory_uri();?>/images/contact-bg.jpg" width="1440" height="554" alt="Contact"></figure>
    <div class="aboutTxt">
    <h1>Contact Fitse <span>To Become a<br>Proud Memeber</span></h1>
    
    <p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces
his retirement from producing video content.</p>
	</div>
<!-- /aboutBanner --></div>

<div class="contactChain full-w mrgTop45">
	<div class="inner-w">
		
    	<div class="contactForm">
			<?php echo do_shortcode('[contact-form-7 id="30" title="Contact Us"]');?>
        </div>
        <section class="contactMap"><img src="<?php echo get_template_directory_uri();?>/images/map.png" alt="map" width="516" height="491"></section>                
   	    
  </div>
</div>

<?php
get_footer();
