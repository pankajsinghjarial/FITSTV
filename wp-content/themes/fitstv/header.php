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
				<form>
				  <div class="form-group">
					<input type="email" class="form-control" id="" placeholder="Enter Your E-mail Address">
				  </div>
				  <div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Zip Code">
				  </div>
				  <div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Birthday">
				  </div>
				  <div class="form-group">
					<input type="password" class="form-control" id="" placeholder="Gender">
				  </div>
				  
				  <button type="submit" class="btn btn-default">SUBMIT</button>
				</form>
			</div>         
		</div>
	</div>

	<section class="<?php if(is_home()){echo 'home';}else{echo 'about';}?> full-w postionR">
			<div class="inner-w">
					<header>
					  <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/fitse-logo.png" width="127" height="40" alt="FITSE"></a></div>
					  <div class="menu"><img src="<?php echo get_template_directory_uri();?>/images/menu.png" width="42" height="33" alt="menu"></div>
					  <nav>
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="episodes.html">Episodes</a></li>
							<li><a href="video.html">Videos</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
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
							<li class="pinterset socialIcns"><a href="https://www.pinterest.com/FitseTV/">Pinterset</a></li>
							<li class="linkedin socialIcns"><a href="javascript:void(0);">Linkedin</a></li>
							<li class="book socialIcns"><a href="https://instagram.com/fitsetv/">Book</a></li>
							<li class="twitter socialIcns"><a href="https://twitter.com/fitsetv">Twitter</a></li>
						</ul>
						</nav>
					</header>
				</div>
			<div class="clear"></div>
<?php if(is_home()){ get_template_part('home-header','additional'); } ?>
				<ul id="owl-demo">
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="slide01">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove02.jpg" width="288" height="148" alt="slide02">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove03.jpg" width="288" height="148" alt="slide03">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove04.jpg" width="288" height="148" alt="slide04">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove01.jpg" width="288" height="148" alt="slide01">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove02.jpg" width="288" height="148" alt="slide02">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove03.jpg" width="288" height="148" alt="slide03">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
					<li class="item"><img src="<?php echo get_template_directory_uri();?>/images/bxmove04.jpg" width="288" height="148" alt="slide04">
					<div class="moveTrans">
					  <h4>Cross Fit Workouts</h4>
					  <a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri();?>/images/play-small.png" width="47" height="47" alt="Play"></a>
					  <div class="clear"></div>
					  <section class="blackTrans">
						<span>August 23, 2011</span>
						<h3>Episode #89- The Fitse Video</h3>
						<span>After an amazing run that spanned...</span>
					  </section>  
					</div>
					</li>
				</ul>
			</div>
			<div class="new_data">
				<marquee>
					   <p><a>Breaking News</a><span>After an amazing run that spanned more than half a decade, Gary Vaynerchuk</span><a>ALert</a>
					   <span> After an amazing run that spanned more than half a decade, Gary Vaynerchuk today announces his 
					   retirement from producing video content.</span>
					</p>
				</marquee>
			</div>
	<!-- /home --></section>
