<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="sb-title"><?php esc_html_e( 'Nothing Found', 'splb' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Maaf, tidak ada yang cocok dengan istilah pencarian Anda. Silakan coba lagi dengan beberapa kata kunci yang berbeda.', 'splb' ); ?></p>
			<?php

		else :
			?>

			<p><?php esc_html_e( 'Pencarian tidak ditemukan', 'splb' ); ?></p>
			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
