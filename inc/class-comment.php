<?php
// Custom Callback         
function splb_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	    
		<div class="comment-wrap">
			
			<!-- Comment Image -->
			<div class="comment-img">
				<?php echo get_avatar(
					$comment,
					$args['avatar_size'],
					null,
					null,
					array('class' => array('img-responsive', 'img-circle') )
				); ?>
			</div>
			
			<!-- Comment Body -->
			<div class="comment-body">
				
				<h4 class="comment-author">
					<?php echo get_comment_author_link(); ?>
				</h4>
				
				<span class="comment-date">
					<?php printf(__('%1$s at %2$s', 'splb'), get_comment_date(),  get_comment_time()) ?>
				</span>

				<?php if ($comment->comment_approved == '0') : ?>
					<em>
						<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> 
						<?php _e('Komentar menunggu moderasi', 'splb'); ?>
					</em>
					<br />
				<?php endif; ?>

				<?php comment_text(); ?>
				
				<span class="comment-reply"> 
					<?php comment_reply_link (
						array_merge( $args, 
							array(
								'reply_text' => __('Balas', 'splb'), 
								'depth' => $depth, 
								'max_depth' => $args['max_depth']
							)
						), $comment->comment_ID
					); ?>
				</span>

			</div>

		</div>
<?php }

// Enqueue comment-reply
add_action('wp_enqueue_scripts', 'splb_public_scripts');
function splb_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}