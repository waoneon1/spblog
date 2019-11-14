<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="sb-content__wrapper">
    <div class="container" style="padding-right: 0; padding-left: 0;">
        <div class="row">
            <div class="col-md-12">
                <?php $img = splb_image_article($post->ID) ?>
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo $img['img_l'] ?>">
                    <source media="(min-width: 481px)" srcset="<?php echo $img['img_m'] ?>">
                    <img src="<?php echo $img['img_s'] ?>" alt="<?php echo $img['alt'] ?>">
                </picture>

            </div>
        </div>

        <div class="row">
            <div class="sb-content col-md-8" style="background-color: #fff; padding-bottom: 15px;">
                <div class="sb-content__articles container">
                    <header class="entry-header">
                        <h2 class="sb-content__title"><?php the_title() ?></h2>
                    </header><!-- .entry-header -->

                    <div class="entry-meta sb-content__profile">
                        <?php
                        splb_posted_by();
                        echo "<br />";
                        splb_posted_on();
                        ?>
                    </div><!-- .entry-meta -->

                    <div class="entry-content sb-content__text">
                        <div class="typography">
                            <?php the_content() ?>
                        </div>
                        <a href="#" class=sb-content__cta>Beli Pulsa</a>
                    </div><!-- .entry-content -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget-wrap" style="padding: 30px;">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <div class="box js-bottom-mnav" style="display: none;">
            <a href=""><div>satu</div></a>
            <a href=""><div>dua</div></a>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->



