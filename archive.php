<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

get_header();
?>

<div class="sb-container">
     <section class="sb-articles">
        <?php
	    	the_archive_title( '<h2 class="sb-title">', '</h2>' );
	    	the_archive_description( '<p>', '</p>' );
        ?>
        <ul class="sb-articles__list">
			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );


				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</ul>
    </section>
</div>

<?php
get_footer();
