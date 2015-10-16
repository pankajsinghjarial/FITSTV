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
    <h1>Discover Your Fit</h1>
    <p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces
his retirement from producing video content.</p>
	</div>
<!-- /aboutBanner --></div>

<div class="aboutChain full-w">
	<div class="inner-w">
      <div class="full-w mrgTop45">
        	<div class="aboutAdd floatLeft">
            	<h2>Fitse is the No.1Chain of Gyms in, <b>Tampa, US</b></h2>
                <span>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing video content.</span>
				<p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing regular wine video content. After an amazing run that spanned more than half a 
decade, Gary Vaynerchuk today announces his retirement from producing regular wine video content.</p>
				<p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces 
from producing regular wine video content. After an amazing run that spanned more than half a decade, 
Gary Vaynerchuk today announces his retirement from producing regular wine video content. 
After an amazing run tha spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing.</p>
            </div>
            <div class="aboutAddImg floatRight">
   		    <figure><img src="<?php echo get_template_directory_uri();?>/images/about-first-add.jpg" width="361" height="243" alt="about add"></figure>
            <a href="javascript:void(0);" class="playIcn"><img src="<?php echo get_template_directory_uri();?>/images/play.png" width="79" height="79" alt="play"></a>
            </div>
      </div>
      <div class="full-w mrgTop55">
            
            <div class="aboutAddImg floatLeft thumbSliderOut">
                <ul class="thumbSlider">
                  <li><img src="<?php echo get_template_directory_uri();?>/images/large01.jpg" title="- before and after"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/large02.jpg" title="- Hiking"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/large03.jpg" title="- Pool"></li>
                  <li><img src="<?php echo get_template_directory_uri();?>/images/large04.jpg" title="- Running"></li>
                </ul>
                <div id="bx-pager">
                  <a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri();?>/images/thumb01.jpg" width="85" height="85" alt="thumb01"></a>
                  <a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri();?>/images/thumb02.jpg" width="85" height="85" alt="thumb02"></a>
                  <a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri();?>/images/thumb03.jpg" width="85" height="85" alt="thumb03"></a>
                  <a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri();?>/images/thumb04.jpg" width="85" height="85" alt="thumb04"></a>
                </div>
            </div>
            
        	<div class="aboutAdd floatRight">
            	<h2>Mike Hansen, <b>CEO-FITSE TV</b></h2>
                <span>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing video content.</span>
				<p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing regular wine video content. After an amazing run that spanned more than half a 
decade, Gary Vaynerchuk today announces his retirement from producing regular wine video content.</p>
				<p>After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces 
from producing regular wine video content. After an amazing run that spanned more than half a decade, 
Gary Vaynerchuk today announces his retirement from producing regular wine video content. 
After an amazing run tha spanned more than half a decade, Gary Vaynerchuk today announces his 
retirement from producing.</p>
				<a href="javascript:void(0);" class="askAQtn">Ask a Question</a>
                
            </div>
	  </div>
      <div class="full-w mrgTop45">
        	<div class="aboutAdd floatLeft">
            	<h2>Lorem Ipsum is  <b>Simply</b></h2>
                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
				<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class="aboutAddImg floatRight">
   		    <figure><img src="<?php echo get_template_directory_uri();?>/images/about-first-add.jpg" width="361" height="243" alt="about add"></figure>
            <a href="javascript:void(0);" class="playIcn"><img src="<?php echo get_template_directory_uri();?>/images/play.png" width="79" height="79" alt="play"></a>
            </div>
      </div>                    
    </div>
</div>

<?php
get_footer();
