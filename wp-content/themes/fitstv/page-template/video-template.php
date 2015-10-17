<?php
/**
 * Template Name: Video Listing Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */
get_header(); ?>
<div class="full-w newsHead">
	<div class="inner-w">
		<?php if ( is_active_sidebar( 'video-top' ) ) {
				dynamic_sidebar( 'video-top' ); 
			  }
		?>
	</div>    
</div>


<div class="episodesChain full-w">
	<div class="inner-w">
    
   		<h2>NEWS</h2>
        <section class="sortColumn">
        <span>Sort By:</span>
        <select>
        <option>Date</option>
        <option>Test 1</option>
        <option>Test 2</option>
        <option>Test 3</option>
        </select>
        </section>
    	<div class="searchBar">
            <input type="text" placeholder="Search Bar">
            <button><img width="40" height="40" alt="Search" src="<?php echo get_template_directory_uri();?>/images/searchbtn.png"></button>
        </div>
        
        <div class="sortTabber full-w">
          <ul>
            <li class="cl1"><a href="#tabs-1"><span>Featured</span> </a></li>
            <li class="cl2"><a href="#tabs-2"><span>On Demand</span> </a></li>
            <li class="cl8"><a href="#tabs-3"><span>News</span> </a></li>
            <li class="cl9"><a href="#tabs-4"><span>Reviews</span> </a></li>
            <li class="cl5"><a href="#tabs-5"><span>Wordouts</span> </a></li>
          </ul>
          <div id="tabs-1">
          	<h3>Top Stories</h3>
            <section class="sideNav">
            	<h4>Categories</h4>
            	<ul>
                <li><a href="javascript:void(0);">On Demand</a></li>
                <li><a href="javascript:void(0);">News</a></li>
                <li><a href="javascript:void(0);">Reviews</a></li>
                <li><a href="javascript:void(0);">Workouts</a></li>
                <li><a href="javascript:void(0);">Gyms</a></li>
                <li><a href="javascript:void(0);">Classes</a></li>
                <li><a href="javascript:void(0);">Instructors</a></li>
                <li><a href="javascript:void(0);">Studio</a></li>
                <li><a href="javascript:void(0);">Activites</a></li>
                <li><a href="javascript:void(0);">On Demand</a></li>
                <li><a href="javascript:void(0);">News</a></li>
                <li><a href="javascript:void(0);">Reviews</a></li>
                <li><a href="javascript:void(0);">Workouts</a></li>
                </ul>
            </section>
            <section class="tabColumnsR cateG">
            <ul>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="new01">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section> 
             
            </li>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="new02">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section>  
            
            </li>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="new04">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section> 
             
            </li>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="new01">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section> 
             
            </li>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="new02">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section>  
            
            </li>
            <li class="item">
            <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="new04">
            <figure class="icnPlay"><img src="<?php echo get_template_directory_uri();?>/images/transPlay.png" width="69" height="69" alt="Play"></figure>
            <h4>Cross Fit Workouts</h4>
            <section class="blackTrans">
              <span>August 23, 2011</span>
              <h3>Breaking News: Russian Jets</h3>
              <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
            </section> 
             
            </li>
            </ul>
            <div class="clear"></div>
            <div class="loadMore"><img width="110" height="30" alt="load more" src="<?php echo get_template_directory_uri();?>/images/load-more.png"></div>
            </section>
          </div>
          <div id="tabs-2">
          	<ul>
            	<li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
            <section>Episode #89 - The Fitse Video 
            <span>After an amazing run that...</span>
            </section>
            <div class="news_ret">
                <ul>
                    <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                    <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                    <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                    <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                    <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                </ul>
            </div>
            </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                </ul> 
          </div>
          <div id="tabs-3">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                </ul> 
          </div>
          <div id="tabs-4">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                </ul> 
          </div>
          <div id="tabs-5">
          <ul>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                <li class="tabSlide"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="news01">
                <section>Episode #89 - The Fitse Video 
                <span>After an amazing run that...</span>
                </section>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star-active.png" width="16" height="16" alt="Star"></a></li>
                        <li><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/star.png" width="16" height="16" alt="Star"></a></li>
                    </ul>
                </div>
                </li>
                </ul> 
          </div>
          
          
          <div class="clear"></div>   
          
        </div>
        
        
                         
    </div>
</div>

<?php
get_footer();
