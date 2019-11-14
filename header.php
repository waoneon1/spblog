<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sepulsa_Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="sb-header">
    <button class="sb-header__button js-menu-action"></button>
    <h1 class="sb-header__title">
        <a href="<?php echo home_url( '/' ); ?>">
            Sepulsa Blog
        </a>
    </h1>
</header>
<div class="sb-overlay js-overlay-action"></div>
<nav class="sb-menu">
    <ul class="sb-menu__list">
        <li>
            <a href="#" class="sb-menu__link">Artikel Tersimpan</a>
        </li>
        <li>
            <button class="sb-menu__link">
                Kategori
                <span class="sb-menu__arrow"></span>
            </button>
            <ul class="sb-menu__sub">
                <li>
                    <a href="#" class="sb-menu__sub-link">Pulsa</a>
                </li>
                <li>
                    <a href="#" class="sb-menu__sub-link">Paket Data</a>
                </li>
                <li>
                    <a href="#" class="sb-menu__sub-link">Paket Roaming</a>
                </li>
                <li>
                    <a href="#" class="sb-menu__sub-link">PLN</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="sb-menu__link">Kembali ke Home Sepulsa</a>
        </li>
    </ul>
</nav>
<div style="height: 48px; width: 100%"></div>
