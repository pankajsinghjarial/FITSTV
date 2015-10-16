<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<div class="footer_top">
	<div class="inner-w">
    <div class="news_letter">
      <label>Subscribe to Our Monthly Newsletter</label>
        <div class="input-group">
            <span><img src="<?php echo get_template_directory_uri();?>/images/masseges.jpg" width="29" height="24" alt="messages"></span>
            <input type="text" class="form-control input-lg" placeholder="Enter your email adress here">
           <button type="button" class="btn btn-primary">SUBSCRIBE</button>
      </div>
    </div>
    </div>
</div>

<footer>
    <div class="footer_bg">
    <div class="inner-w">
    	
        <div class="socialArea full-w">
        	<section class="socialColumn">
       	    	<img src="<?php echo get_template_directory_uri();?>/images/tweets-outr.jpg" width="370" height="356" alt="Tweets">
            </section>
            <section class="socialColumn">
    	    	<img src="<?php echo get_template_directory_uri();?>/images/insta-outr.jpg" width="370" height="356" alt="Instagram">
            </section>
            <section class="socialColumn">
    	    	<img src="<?php echo get_template_directory_uri();?>/images/fb-outr.jpg" width="370" height="356" alt="Facebook">
            </section>
        </div>
        
        <div class="footer_menu">
            <ul class="abc">
                <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ,'before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '%3$s','depth' => 0,	'walker' => '') ); ?>
            </ul>
        </div>
        <div class="footer_bootam">
            <ul>
                <li><span class="fo1">Copyright © 2015</span><span class="fo2"> All Rights Reserved<i class="lll"></i> Fitse.tv</span> </li>
                <li><a href="https://www.facebook.com/FitseTV#"><img src="<?php echo get_template_directory_uri();?>/images/fb.png" alt="FB"></a></li>
                <li><a href="https://www.pinterest.com/FitseTV/"><img src="<?php echo get_template_directory_uri();?>/images/pin_icon.png" alt=""/></a></li>
                <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/in_icon.png" alt=""/></a></li>
                <li><a href="https://instagram.com/fitsetv/"><img src="<?php echo get_template_directory_uri();?>/images/in2_icom.png" alt=""/></a></li>
                <li><a href="https://twitter.com/fitsetv"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt=""/></a></li>
            </ul>
        </div>
    </div>
    </div>
</footer>

</html>
