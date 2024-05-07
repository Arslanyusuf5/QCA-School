<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qca_schools
 */


wp_footer(); ?>

<footer class="footer-main">
    <div class="container">
        <div class="inner">
            <div class="row footer__top ">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-title">
                    <img src="<?php echo get_template_directory_uri() . '/images/footer-icon.png' ?>" alt="">
                    <div class="d-flex pt-3 address">
                        <div><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.53162 3.07251C10.7165 1.80302 13.402 1.82521 15.5664 3.13064C17.7095 4.46266 19.012 6.83992 18.9998 9.39719C18.95 11.9377 17.5533 14.3257 15.8075 16.1718C14.7998 17.2421 13.6726 18.1886 12.4488 18.9918C12.3228 19.0647 12.1848 19.1134 12.0415 19.1357C11.9036 19.1299 11.7693 19.0891 11.6508 19.0172C9.78243 17.8103 8.14334 16.2698 6.81233 14.4697C5.69859 12.9671 5.06584 11.1517 5 9.27016C4.99856 6.70799 6.34677 4.34201 8.53162 3.07251ZM9.79427 10.3305C10.1618 11.2366 11.0293 11.8276 11.9917 11.8276C12.6222 11.8321 13.2283 11.5796 13.6749 11.1262C14.1215 10.6729 14.3716 10.0564 14.3694 9.41412C14.3727 8.43377 13.7956 7.54805 12.9074 7.17051C12.0192 6.79297 10.9952 6.99809 10.3134 7.69008C9.6317 8.38208 9.42675 9.42446 9.79427 10.3305Z" fill="white" />
                                <ellipse opacity="0.4" cx="12" cy="21.1357" rx="5" ry="1" fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p>Address:</p>
                        </div>
                    </div>
                    <div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit,
                        </p>
                    </div>
                    <div class="d-flex pt-2 mbl-number">
                        <div><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M14.4183 5.6255C13.9423 5.53756 13.5051 5.84135 13.4145 6.30603C13.3238 6.77071 13.6286 7.2244 14.0917 7.31534C15.4859 7.58715 16.5625 8.66641 16.8354 10.0655V10.0665C16.9131 10.4692 17.2676 10.762 17.6759 10.762C17.7307 10.762 17.7855 10.757 17.8412 10.747C18.3043 10.654 18.6091 10.2014 18.5185 9.73568C18.1111 7.64611 16.5027 6.03222 14.4183 5.6255Z" fill="white" />
                                <path opacity="0.4" d="M14.3561 2.14367C14.133 2.11169 13.9089 2.17765 13.7307 2.31955C13.5474 2.46345 13.4329 2.67131 13.408 2.90415C13.3552 3.37483 13.6948 3.80053 14.1649 3.8535C17.4065 4.21525 19.9262 6.74051 20.2907 9.99228C20.3395 10.428 20.705 10.7568 21.1412 10.7568C21.174 10.7568 21.2059 10.7548 21.2388 10.7508C21.4668 10.7258 21.67 10.6129 21.8134 10.433C21.9558 10.2531 22.0206 10.0293 21.9947 9.80041C21.5405 5.7432 18.4005 2.59436 14.3561 2.14367Z" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.0317 13.1081C15.0208 17.0961 15.9258 12.4825 18.4656 15.0206C20.9143 17.4685 22.3216 17.9589 19.2192 21.0605C18.8306 21.3728 16.3616 25.13 7.6846 16.4554C-0.993478 7.77974 2.76158 5.30819 3.07397 4.91969C6.18387 1.80959 6.66586 3.22513 9.11449 5.67307C11.6544 8.21224 7.04266 9.12016 11.0317 13.1081Z" fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p>Tel :+9229341037</p>
                        </div>
                    </div>
                    <div class="d-flex pt-2 timer">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path opacity="0.4" d="M19.9998 10.1357C19.9998 15.6597 15.5228 20.1357 9.99976 20.1357C4.47676 20.1357 -0.000244141 15.6597 -0.000244141 10.1357C-0.000244141 4.61374 4.47676 0.135742 9.99976 0.135742C15.5228 0.135742 19.9998 4.61374 19.9998 10.1357Z" fill="white" />
                                <path d="M13.5734 13.95C13.4424 13.95 13.3104 13.916 13.1894 13.845L9.26344 11.503C9.03744 11.367 8.89844 11.122 8.89844 10.858V5.81104C8.89844 5.39704 9.23444 5.06104 9.64844 5.06104C10.0624 5.06104 10.3984 5.39704 10.3984 5.81104V10.432L13.9584 12.555C14.3134 12.768 14.4304 13.228 14.2184 13.584C14.0774 13.819 13.8284 13.95 13.5734 13.95Z" fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p>Response hours: 8 to 20</p>
                        </div>
                    </div>
                    <div class="d-flex pt-2 email">
                        <div><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                                <path opacity="0.4" d="M20 13.0757C20 15.8657 17.76 18.1257 14.97 18.1357H14.96H5.05C2.27 18.1357 0 15.8857 0 13.0957V13.0857C0 13.0857 0.006 8.65974 0.014 6.43374C0.015 6.01574 0.495 5.78174 0.822 6.04174C3.198 7.92674 7.447 11.3637 7.5 11.4087C8.21 11.9777 9.11 12.2987 10.03 12.2987C10.95 12.2987 11.85 11.9777 12.56 11.3977C12.613 11.3627 16.767 8.02874 19.179 6.11274C19.507 5.85174 19.989 6.08574 19.99 6.50274C20 8.71174 20 13.0757 20 13.0757Z" fill="white" />
                                <path d="M19.4761 2.80925C18.6101 1.17725 16.9061 0.135254 15.0301 0.135254H5.05013C3.17413 0.135254 1.47013 1.17725 0.604128 2.80925C0.410128 3.17425 0.502128 3.62925 0.825128 3.88725L8.25013 9.82625C8.77013 10.2463 9.40013 10.4553 10.0301 10.4553C10.0341 10.4553 10.0371 10.4553 10.0401 10.4553C10.0431 10.4553 10.0471 10.4553 10.0501 10.4553C10.6801 10.4553 11.3101 10.2463 11.8301 9.82625L19.2551 3.88725C19.5781 3.62925 19.6701 3.17425 19.4761 2.80925Z" fill="white" />
                            </svg>
                        </div>
                        <div>
                            <p>Email: info@onlearn.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-links   pt-5 mt-1">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-md-6 col-sm-12 w-auto">
                            <p class="pages-title">Pages</p>
                            <a href="#"><p>Courses</p></a>
                            <p>Admission</p>
                            <p>Boys</p>
                            <p>Girls</p>
                        </div>
                        <div class="col-md-6 col-sm-12 w-auto">
                            <p class="page-links">Links</p>
                            <p>About us</p>
                            <p>Contacts</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="footer-newsletter newsletter-footer  ">
                        <div class="text-lg-center text-start">
                            <p>Stay up to date with us</p>
                        </div>

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

<script src="<?php echo get_template_directory_uri() . '/js/aos/aos.js' ?>"></script>
<script>
    /**
     * Preloader
     */
    let preloader = document.getElementById('preloader');
    if (preloader) {
        window.addEventListener('load', () => {

            preloader.remove()
        });
    }

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
        AOS.init({
            duration: 600,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }
    window.addEventListener('load', aosInit);
</script>
</body>

</html>