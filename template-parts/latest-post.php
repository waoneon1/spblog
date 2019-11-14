<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

$post_type 		= 'post';
$posts_per_page = 5;
$args = array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
);

$inner_query = new WP_Query($args);
$i = 1;
while ( $inner_query->have_posts() ) :
	$inner_query->the_post(); ?>

	<?php $img = splb_image($post->ID) ?>

	<section class="sb-carousel__items">
	    <div class="sb-carousel__image">
	        <a href="<?php the_permalink() ?>">
	            <picture>
				    <img src="<?php echo $img['img']  ?>" srcset="<?php echo $img['img2x'] ?> 2x" alt="<?php echo $img['alt'] ?>">
				</picture>
	        </a>
	    </div>
	    <div class="sb-carousel__content">
	        <a href="<?php the_permalink() ?>">
	            <h3 class="sb-carousel__items-title"><?php the_title() ?></h3>
	        </a>
	        <div class="sb-carousel__desc">
	        	<?php echo the_content() ?>
	        </div>
	        <div class="sb-carousel__items-footer">
	            <a href="#" class="sb-carousel__save-article">Simpan Artikel</a>
	            <a href="#" class="sb-carousel__comments"><?php echo get_comments_number( $post->ID ) ?> Komentar</a>
	        </div>
	    </div>
	</section>

	<?php $i++; ?>
<?php endwhile; // End of the loop.
wp_reset_query();



