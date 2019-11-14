<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Sepulsa_Blog
 */

get_header();
?>

<div class="sb-container">
    <div class="sb-search">
      	<?php get_search_form(); ?>
    </div>
     <section class="sb-articles">
        <h2 class="sb-title">
        	<?php printf( esc_html__( 'Search Results for: %s', 'splb' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h2>
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
