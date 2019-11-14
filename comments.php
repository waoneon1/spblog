<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) { return; } ?>

	<?php 
		$comments_args = array(
	        // Change the title of send button 
	        'label_submit' => __( 'Tulis Komentar', 'splb' ),
	        // Change the title of the reply section
	        'title_reply' => __( '', 'splb' ),
	        'cancel_reply_link' => 'X',
	        // Remove "Text or HTML to be displayed after the set of comment fields".
            'fields' => apply_filters(
                'comment_form_default_fields', array(
                    'author' =>'<p class="form-group">' . '<input class="form-control" id="author" placeholder="Name" name="author" type="text" value="' .
                        esc_attr( $commenter['comment_author'] ) . '" size="30" required /></p>',
                    'email' => '<p class="form-group">' . '<input class="form-control" id="email" placeholder="your@email.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                        '" size="30" required /></p>'
                )
            ),
            'comment_field' => '<p class="form-group">' .
                   '<textarea id="comment" name="comment" placeholder="Berikan Komentar Anda" cols="45" rows="5" aria-required="true" class="form-control"></textarea>' .
                   '</p>',
            'comment_notes_after' => '',
            'comment_notes_before' => ''
		);
		echo "<div class='comment-form-warp'>";
			echo "<div class='container'>";
				comment_form( $comments_args ); 
			echo "</div>";
		echo "</div>";
	?>
	
<div id="comments" class="comments-area commentlist">
	<div class="container">
		
		<?php if ( have_comments() ) { ?>
			<h4 class="comments-title"><?php comments_number(__('Tidak ada komenter', 'splb'), __('1 Komentar', 'splb'), '% ' . __('Komentar', 'splb') ); ?></h4>
			<span class="title-line"></span>
			
			<ul class="comment-list">
				<?php wp_list_comments ( 
					array ( 
						'avatar_size' => 40, 
						'style' => 'ul', 
						'callback' => 'splb_comments', 
						'type' => 'all' 
				)); ?>
			</ul>
			
			<?php the_comments_pagination( array( 'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'Previous', 'splb') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'splb') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>', ) ); ?>
		<?php } ?>
		
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
			<p class="no-comments"><?php _e( 'Komentar ditutup.', 'splb'); ?></p>
		<?php } ?>
	</div>
</div>
<!-- #comments -->

