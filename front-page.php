<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sepulsa_Blog
 */
?> 

<?php get_header(); ?>

<!-- FLEX POST -->
<div class="sb-container">
    <div class="sb-search">
        <form action="" class="sb-form">
            <input type="text" class="sb-search__input" name="s" placeholder="Cari Artikel">
            <input type="reset" class="sb-search__reset" value="">
            <input type="submit" class="sb-search__submit" value="">
        </form>
    </div>
    
    <section class="sb-carousel">
        <h2 class="sb-title">Hot News</h2>
        <div class="sb-carousel__list">
          	<?php include 'template-parts/latest-post.php' ?>
        </div>
        <a href="#" class="sb-carousel__show-all">Lihat Semua</a>
    </section>
   
    <section class="sb-articles">
		<h2 class="sb-title">Artikel Seru buat kamu</h2>
		<ul class="sb-articles__list">
			<?php include 'template-parts/flex-post.php'; ?>
		</ul>
	</section>
    
    <section class="sb-pulsa">
        <h2 class="sb-title">Beli kebutuhan mu disini yah</h2>
        <div class="sb-pulsa__tabs">
            <ul class="sb-pulsa__tabs-header">
                <li>
                    <a href="#tabs-1" class="sb-pulsa__tabs-link">Pulsa</a>
                </li>
                <li>
                    <a href="#tabs-2" class="sb-pulsa__tabs-link">Paket Data</a>
                </li>
                <li>
                    <a href="#tabs-3" class="sb-pulsa__tabs-link">Listrik PLN</a>
                </li>
                <li>
                    <a href="#tabs-4" class="sb-pulsa__tabs-link">Tagihan PDAM</a>
                </li>
            </ul>
            <div class="sb-pulsa__tabs-content">
                <div id="tabs-1">
                    <h3>Masukan nomor Handphone mu disini</h3>
                    <form class="sb-form" action="#">
                        <div class="sb-form__group">
                            <label class="sb-form__label">Nomor Handphone</label>
                            <input type="text" name="nomor" class="sb-form__input-text" placeholder="0812xxx">
                        </div>
                        <input type="submit" value="Beli" class="sb-form__submit">
                    </form>
                </div>
                <div id="tabs-2">
                    <h3>Masukan nomor Handphone mu disini</h3>
                    <form class="sb-form" action="#">
                        <div class="sb-form__group">
                            <label class="sb-form__label">Nomor Handphone</label>
                            <input type="text" name="nomor" class="sb-form__input-text" placeholder="0812xxx">
                        </div>
                        <input type="submit" value="Beli" class="sb-form__submit">
                    </form>
                </div>
                <div id="tabs-3">
                    <h3>Masukan nomor PLN mu disini</h3>
                    <form class="sb-form" action="#">
                        <div class="sb-form__group">
                            <label class="sb-form__label">Nomor PLN</label>
                            <input type="text" name="nomor" class="sb-form__input-text">
                        </div>
                        <input type="submit" value="Beli" class="sb-form__submit">
                    </form>
                </div>
                <div id="tabs-4">
                    <h3>Masukan nomor PDAM mu disini</h3>
                    <form class="sb-form" action="#">
                        <div class="sb-form__group">
                            <label class="sb-form__label">Nomor PDAM</label>
                            <input type="text" name="nomor" class="sb-form__input-text">
                        </div>
                        <input type="submit" value="Beli" class="sb-form__submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    
   	<section class="sb-articles">
   	    <h2 class="sb-title">Artikel Seru buat kamu</h2>
   	    <ul class="sb-articles__list">
   	    	<?php include 'template-parts/flex-post.php'; ?>
   	    </ul>
   	</section>
   
    <section class="sb-filter">
        <h2 class="sb-title">Kategori Artikel</h2>
        <ul class="sb-filter__list">
        	<?php include 'template-parts/categories-list.php'; ?>
        </ul>
    </section>

</div>

<?php get_footer(); ?>
