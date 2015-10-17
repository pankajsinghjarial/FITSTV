<?php
/**
 * Template Name: News Listing Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */

get_header(); ?>
<div class="full-w newsHead">
	<div class="inner-w">
		<?php if ( is_active_sidebar( 'news-top' ) ) {
				dynamic_sidebar( 'news-top' ); 
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
            <li class="cl3"><a href="#tabs-3"><span>Gyms</span> </a></li>
            <li class="cl4"><a href="#tabs-4"><span>Classes</span> </a></li>
            <li class="cl5"><a href="#tabs-5"><span>Instructors</span> </a></li>
            <li class="cl6"><a href="#tabs-6"><span>Studio</span> </a></li>
            <li class="cl7"><a href="#tabs-7"><span>Activities</span> </a></li>
          </ul>
          <div id="tabs-1">
          	<h3>Top Stories</h3>
            	<section class="tabColumnsL">
                	<div class="tabSlide">
                        <img src="<?php echo get_template_directory_uri();?>/images/newsLarge.jpg" width="499" height="442" alt="news">
                        <section class="blackTrans">
                            <span>August 23, 2011</span>
                            <h3>Breaking News: Russian Jets 'Bombing</h3>
                            <p>After an amazing run that spanned more than half a decade, 
        Gary Vaynerchuk today announces his... <a href="javascript:void(0);">Read More</a></p>
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
                    </div>
                </section>
                <section class="tabColumnsR">
                <ul>
    			<li class="item">
                <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="new01">
                <section class="blackTrans">
               	  <span>August 23, 2011</span>
                  <h3>Breaking News: Russian Jets</h3>
                  <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
                </section> 
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div> 
	            </li>
                <li class="item">
                <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="new02">
                <section class="blackTrans">
               	  <span>August 23, 2011</span>
                  <h3>Breaking News: Russian Jets</h3>
                  <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
                </section>  
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
	            </li>
                <li class="item">
                <img src="<?php echo get_template_directory_uri();?>/images/news03.jpg" width="306" height="212" alt="new03">
                <section class="blackTrans">
               	  <span>August 23, 2011</span>
                  <h3>Breaking News: Russian Jets</h3>
                  <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
                </section> 
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div> 
	            </li>
                <li class="item">
                <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="new04">
                <section class="blackTrans">
               	  <span>August 23, 2011</span>
                  <h3>Breaking News: Russian Jets</h3>
                  <span>After an amazing run...<a href="javascript:void(0);">Read More</a></span>
                </section> 
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div> 
	            </li>
                </ul>
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
          <div id="tabs-6">
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
          <div id="tabs-7">
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
        
        
        <div class="full-w">
        	<div class="full-w gymsAround">
            	<h2>News From The Gyms Around</h2>
                <section class="sortColumn">
                    <span>Sort By:</span>
                    <select>
                    <option>Date</option>
                    <option>Test 1</option>
                    <option>Test 2</option>
                    <option>Test 3</option>
                    </select>
                </section>
            </div>
            <div class="news_slider_info">
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news03.jpg" width="306" height="212" alt="news"> 
                <a><img src="<?php echo get_template_directory_uri();?>/images/green-play.png" width="69" height="69" alt="Play"></a>
                </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="news"> 
                <a><img src="<?php echo get_template_directory_uri();?>/images/green-play.png" width="69" height="69" alt="Play"></a>
                </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
            </div>
            
            <div class="full-w gymsAround">
            	<h2>News From The Instructors Around</h2>
                <section class="sortColumn">
                    <span>Sort By:</span>
                    <select>
                    <option>Date</option>
                    <option>Test 1</option>
                    <option>Test 2</option>
                    <option>Test 3</option>
                    </select>
                </section>
            </div>
            <div class="news_slider_info">
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news03.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
            </div>
            
            <div class="full-w gymsAround">
            	<h2>News From The Studios Around</h2>
                <section class="sortColumn">
                    <span>Sort By:</span>
                    <select>
                    <option>Date</option>
                    <option>Test 1</option>
                    <option>Test 2</option>
                    <option>Test 3</option>
                    </select>
                </section>
            </div>
            <div class="news_slider_info">
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news03.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
            </div>
            
            <div class="full-w gymsAround">
            	<h2>Activites</h2>
                <section class="sortColumn">
                    <span>Sort By:</span>
                    <select>
                    <option>Date</option>
                    <option>Test 1</option>
                    <option>Test 2</option>
                    <option>Test 3</option>
                    </select>
                </section>
            </div>
            <div class="news_slider_info">
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news03.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news02.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
                <div class="newsLi">
                <div class="news_img">
                <img src="<?php echo get_template_directory_uri();?>/images/news04.jpg" width="306" height="212" alt="news"> </div>
                <div class="news_ret">
                    <ul>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star-active.png"></a></li>
                        <li><a href="javascript:void(0);"><img width="16" height="16" alt="Star" src="<?php echo get_template_directory_uri();?>/images/star.png"></a></li>
                    </ul>
                </div>
                <div class="news_around_text">
                    <h6>Breaking News: <br>
                    Russian Jets 'Bombing</h6>
                    <p>After an amazing run that spanned 
                    more than half a decade, 
                    Gary Vaynerchuk today 
                    announces his. <a class="spa" href="#">Read more &gt;</a></p>
                </div>
                </div>
            </div>
            
            <div class="boxCol full-w videoSlider mrgTop20">
                <div class="full-w">
                <h3>Highlights </h3>
                <a class="viewMore" href="javascript:void(0);">View All</a>
                </div>
                <div class="mrgTop20 full-w">
                    <ul class="basicSliders2">
                    <li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
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
                    <li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
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
                    <li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
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
                    <li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
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
                    <li class="slide"><img src="<?php echo get_template_directory_uri();?>/images/news01.jpg" width="201" height="149" alt="news01">
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
            </div>
            
        </div>                 
    </div>
</div>

<?php
get_footer();
