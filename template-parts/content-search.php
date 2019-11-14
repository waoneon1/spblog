<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

$img = splb_image($post->ID) ?>
<li>
    <section class="sb-articles__items">
        <div class="sb-articles__image">
        	<a href="<?php the_permalink() ?>">
            	<picture>
				    <img src="<?php echo $img['img']  ?>" srcset="<?php echo $img['img2x'] ?> 2x" alt="<?php echo $img['alt'] ?>">
				</picture>
            </a>
        </div>
        <div class="sb-articles__content">
        	<a href="<?php the_permalink() ?>">
	            <h3 class="sb-articles__items-title"><?php the_title() ?></h3>
	        </a>
            <div class="sb-articles__items-footer">
                <a href="#" class="sb-articles__save-article">Simpan Artikel</a>
                <a href="#" class="sb-articles__comments"><?php echo get_comments_number( $post->ID ) ?> Komentar</a>
            </div>
        </div>
    </section>
</li>