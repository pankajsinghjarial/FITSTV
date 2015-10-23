<?php
/**
 * Template Name: Episodes Listing Page
 *
 * @package WordPress
 * @subpackage FITSTV
 * @since Fitstv 1.0
 */

get_header(); 
get_template_part('episode','type');?>
<div class="episodesBanner full-w">
		<?php if ( is_active_sidebar( 'episode-top' ) ) {
				dynamic_sidebar( 'episode-top' ); 
			  }
		?>
<!-- /aboutBanner --></div>

<div class="episodesChain full-w mrgTop45">
	<div class="inner-w">
    
   		<h2>EPISODES</h2>
        <!--<section class="sortColumn">
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
            <button><img width="40" height="40" alt="Search" src="< ?php echo get_template_directory_uri();?>/images/searchbtn.png"></button>
        </div>-->
        
        <div class="sortTabber full-w">
          <ul>
            <li class="cl1" data-type="featured"><a href="#tabs-1"><span>Featured</span> </a></li>
            <li class="cl2" data-type="on-demand"><a href="#tabs-2"><span>On Demand</span> </a></li>
            <li class="cl3" data-type="gyms"><a href="#tabs-3"><span>Gyms</span> </a></li>
            <li class="cl4" data-type="classes"><a href="#tabs-4"><span>Classes</span> </a></li>
            <li class="cl5" data-type="instructors"><a href="#tabs-5"><span>Instructors</span> </a></li>
            <li class="cl6" data-type="studio"><a href="#tabs-6"><span>Studio</span> </a></li>
            <li class="cl7" data-type="activities"><a href="#tabs-7"><span>Activities</span> </a></li>
          </ul>
          <div id="tabs-1">
			<?php displayTerm('featured');?>
		  </div>
          <div id="tabs-2">
			<?php displayTerm('on-demand');?>          
          </div>
          <div id="tabs-3">
			<?php echo displayTerm('gyms');?>          
          </div>
          <div id="tabs-4">
			<?php echo displayTerm('classes');?>          
          </div>
          <div id="tabs-5">
			<?php echo displayTerm('instructors');?>          
          </div>
          <div id="tabs-6">
			 <?php echo displayTerm('studio');?>
          </div>
          <div id="tabs-7">
			<?php echo displayTerm('activities');?>          
		  </div>
        </div>                      
    </div>
</div>

<?php
get_footer();
