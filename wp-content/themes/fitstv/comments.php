<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="commentsSec full-w">
	<div class="inner-w">
		<?php if ( have_comments() ) { ?>
			<span class="comntTab">		
				<?php
					printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'fitstv' ),
						number_format_i18n( get_comments_number() ) );
				?>
			</span>
			<div class="full-w">
				<?php
					wp_list_comments( 'type=comment&callback=fitstv_comment' );
				?>
			</div>
        <?php } ?>
        <div class="contactForm videoFrom">
			<h2>Leave a Comment</h2>
			<?php
				$comments_args = array(
						// change the title of send button 
						'label_submit'=>'Submit',
						// change the title of the reply section
						'title_reply'=>'Write a Reply or Comment',
						// remove "Text or HTML to be displayed after the set of comment fields"
						'comment_notes_after' => '',
						// redefine your own textarea (the comment body)
						'comment_field' => '<div class="form-col"><label>Message <em>*</em></label><textarea id="comment" name="comment"></textarea></div>',
				);
			?>
			<?php comment_form($comments_args); ?> 
        </div>
    </div>	
<!-- /commentsSec --></div>
