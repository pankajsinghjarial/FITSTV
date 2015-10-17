<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
if ( is_active_sidebar( 'video-top' ) ) {
 dynamic_sidebar( 'video-top' ); 
}
if ( is_active_sidebar( 'news-top' ) ) {
 dynamic_sidebar( 'news-top' ); 
}
