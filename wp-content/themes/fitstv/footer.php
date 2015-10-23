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
            <?php //echo do_shortcode('[contact-form-7 id="89" title="Subscribe Form Footer"]');?>
      </div>
    </div>
    </div>
</div>

<footer>
    <div class="footer_bg">
    <div class="inner-w">
    	
        <div class="socialAreaSlider full-w">
        	<h3><img src="<?php echo get_template_directory_uri();?>/images/s-twitter.png" width="30" height="21" alt="Twitter"> Tweets</h3>
        	
			  <?php if ( is_active_sidebar( 'footer-twitter-slides' ) ) {
				dynamic_sidebar( 'footer-twitter-slides' ); 
			  }?>
			
            <div class="clear"></div>
            <figure class="sTweets"><a href="https://twitter.com/fitsetv" class="twitter-follow-button" data-show-count="false">Follow @fitsetv</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<a href="https://twitter.com/fitsetv" class="twitter-share-button" data-via="fitsetv">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></figure>
        </div>
        <div class="footer_menu">
            
            <?php wp_nav_menu( array( 'container' => '', 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ,'before' => '','after' => '','link_before' => '','link_after' => '','items_wrap' => '%3$s','depth' => 0,	'walker' => '') ); ?>
        </div>
        <div class="footer_bootam">
            <ul>
                <li><span class="fo1">Copyright © 2015</span><span class="fo2"> All Rights Reserved<i class="lll"></i> Fitse.tv</span> </li>
                <li><a  target="_blank" href="https://www.facebook.com/FitseTV#"><img src="<?php echo get_template_directory_uri();?>/images/fb.png" alt="FB"></a></li>
                <li><a  target="_blank" href="https://twitter.com/fitsetv"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt=""/></a></li>
                <li><a  target="_blank" href="https://www.pinterest.com/FitseTV/"><img src="<?php echo get_template_directory_uri();?>/images/pin_icon.png" alt=""/></a></li>
              
                <li><a target="_blank" href="https://instagram.com/fitsetv/"><img src="<?php echo get_template_directory_uri();?>/images/in2_icom.png" alt=""/></a></li>
                
            </ul>
        </div>
    </div>
    </div>
    
</footer>
<?php wp_footer(); ?>
</body>
</html>
