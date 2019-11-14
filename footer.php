<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sepulsa_Blog
 */

?>
<style type="text/css">
.box {
    border-top: 1px solid #e3e3e3;
    width: 100%;
    position: fixed;
    bottom: 0;
    left: 0;
    padding-top: 5px;
    background-color: #fff;
    transition: bottom 0.3s;
}
.footer-spacer {
    height: 50px;
    width: 100%;
    display: block;
}
</style>

<footer id="colophon" class="site-footer">
    <button class="sb-back-to-top"></button>
    <?php if (is_single()): ?>
        <div class="js-bottom-mnav bottom-mnav box">
            <div class="alp-share-mobile showmobile">
                <div class="a2a_kit a2a_kit_size_32 a2a_vertical_style"
                data-a2a-url="<?php echo esc_url( get_permalink() ) ?>" data-a2a-title="<?php the_title() ?>">
                    <a><h2>Share</h2></a>
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer-spacer"></div>
    <?php endif ?>
</footer>

<?php wp_footer(); ?>

<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
         
    $(document).ready(function () {
        let searchButton = bodymovin.loadAnimation({
            container: document.querySelector('.js-menu-action'), // the dom element that will contain the animation
            renderer: 'svg',
            loop: false,
            autoplay: false,
            path: splb_template_directory_uri + '/assets/data/burgerMenu.json' // the path to the animation json
        });

        // show and hide overlay & menu from menu click
        element = document.querySelector('.js-menu-action');
        element.addEventListener('click', function () {
            $(".sb-menu").toggleClass("sb-menu--show");
            $(".sb-overlay").toggleClass("sb-overlay--show");
            element = !element
            if (element) {
                searchButton.setDirection(-1);
                searchButton.play();
            } else {
                searchButton.setDirection(1);
                searchButton.play();
            }
        })

        // show and hide overlay & menu from overlay click
        $(".js-overlay-action").click(function () {
            $(".sb-menu").toggleClass("sb-menu--show");
            $(".sb-overlay").toggleClass("sb-overlay--show");
            element = !element
            if (element) {
                searchButton.setDirection(-1);
                searchButton.play();
            } else {
                searchButton.setDirection(1);
                searchButton.play();
            }
        });

        // show and hide list element
        $(".sb-menu__link").click(function () {
            $(this).parent().find("ul").slideToggle();
            $(this).toggleClass("sb-menu__link--show")
        })

        $(".sb-carousel__list").slick({
            arrows: false,
            dots: true,
            infinite: false,
            slidesToShow: 1,
            variableWidth: true,
            responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1.2,
                variableWidth: false
              }
            }
          ]
        });

        $('.sb-pulsa__tabs').tabs();

        // show and hide reset button
        $(".sb-search__input").keyup(function () {
            if ($(this).val().length > 0) {
                $(".sb-search__reset").css("opacity", 1);
            } else {
                $(".sb-search__reset").css("opacity", 0);
            }
        })

        // hide reset button after click
        $(".sb-search__reset").click(function () {
            $(this).css("opacity", 0);
        })

        // back to top
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.sb-back-to-top').fadeIn();
            } else {
                $('.sb-back-to-top').fadeOut();
            }
        });
        $('.sb-back-to-top').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

      
</script>

</body>
</html>
