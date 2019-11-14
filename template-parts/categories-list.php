<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

$terms = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
) ); ?>


<?php foreach ($terms as $key => $term): ?>
	<li>        
		<a href="<?php echo get_category_link( $term ) ?>" class="sb-filter__items">
			<?php echo $term->name ?>
		</a>
	</li>
<?php endforeach ?>