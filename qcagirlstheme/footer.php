<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qcaboystheme
 */

//get_template_part( 'template-parts/content', 'banner_cta' );

wp_footer(); ?>

<footer id="footer" class="footer__girls">
    <div class="container">
        <div class="inner">
            <div class="row footer__top__girls ">
                <div class="col-lg-3 col-sm-6">
                    <div>
                        <img src="<?php echo get_template_directory_uri() . '/images/footer-icon.png' ?>" alt="">
                    </div>
                    <div class="footer__girls__email">
                        <a href="">info.girls@myqca.org</a>
                    </div>
                    <p>+1 (469) 929 9950</p>
                </div>
                <div class="col-lg-2 col-sm-3">
                    <p class="pages-title-girls">Pages</p>
                    <p>Courses</p>
                    <p>Admission</p>
                    <p>girls</p>
                    <p>Girls</p>
                </div>
                <div class="col-lg-2 col-sm-3">
                    <p class="page-links-girls">Links</p>
                    <p>About us</p>
                    <p>Contacts</p>
                </div>
                <div class="col-lg-5">
                    <div class="newsletter-footer-girls">
                        <form action="#" class="sign-up-form   footer-form">
                            <input type="text" class="style-input" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary style-signup" value="Sign up">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>