<?php

$contact_us_form_title = get_field('contact_us_form_title') ? get_field('contact_us_form_title') : '';
$contact_us_form_heading = get_field('contact_us_form_heading') ? get_field('contact_us_form_heading') : '';
$contact_us_form_description = get_field('contact_us_form_description') ? get_field('contact_us_form_description') : '';
$contact_us_shortcode = get_field('contact_us_shortcode') ? get_field('contact_us_shortcode') : '';

$mobile_phone_icon = get_field('mobile_phone_icon');
$mobile_phone_icon_url = "";
if ($mobile_phone_icon && is_array($mobile_phone_icon) && isset($mobile_phone_icon['url'])) {
    $mobile_phone_icon_url = $mobile_phone_icon['url'];
}

$mobile_heading = get_field('mobile_heading') ? get_field('mobile_heading') : '';
$mobile_number = get_field('mobile_number') ? get_field('mobile_number') : '';

$address_icon = get_field('address_icon');
$address_icon_url = "";
if ($address_icon && is_array($address_icon) && isset($address_icon['url'])) {
    $address_icon_url = $address_icon['url'];
}

$address_location = get_field('address_location') ? get_field('address_location') : '';
$address_zip = get_field('address_zip') ? get_field('address_zip') : '';

$email_address_icon = get_field('email_address_icon');
$email_address_icon_url = "";
if ($email_address_icon && is_array($email_address_icon) && isset($email_address_icon['url'])) {
    $email_address_icon_url = $email_address_icon['url'];
}

$email_text = get_field('email_text') ? get_field('email_text') : '';
$email_adddress = get_field('email_adddress') ? get_field('email_adddress') : '';

?>

<section class="contact__us__form">
    <div class="container">
        <div class="contact-form-wrapper">
            <div class=""></div>
            <div class="row d-flex justify-content-evenly">
                <div class="col-xl-5 col-12">
                    <div class="get__in__touch__form">
                        <h2 class="form__text"><?php echo $contact_us_form_title; ?> <span><?php echo $contact_us_form_heading; ?></span></h2>
                        <p class="form__description"><?php echo $contact_us_form_description; ?></p>
                        <?php echo do_shortcode($contact_us_shortcode); ?>
                        <div class="form__contact__wrap">
                            <div class="mobile__num mt-4">
                                <div class="mobile__icon d-flex justify-content-center align-items-center"><img src="<?php echo $mobile_phone_icon_url; ?>" alt=""></div>
                                <div class="mobile__text">
                                    <h4 class="mobile__text__heading"><?php echo $mobile_heading; ?></h4>
                                    <p class="mobile__text__num"><?php echo $mobile_number; ?></p>
                                </div>
                            </div>
                            <div class="form__address mt-4">
                                <div class="address__icon d-flex justify-content-center align-items-center"><img src="<?php echo $address_icon_url; ?>" alt=""></div>
                                <div class="address__text">
                                    <h4 class="address__text__loc"><?php echo $address_location; ?></h4>
                                    <p class="address__text__zip"><?php echo $address_zip; ?></p>
                                </div>
                            </div>
                            <div class="form__email mt-4">
                                <div class="email__icon d-flex justify-content-center align-items-center"><img src="<?php echo $email_address_icon_url; ?>" alt=""></div>
                                <div class="email__text">
                                    <h4 class="mail__text"><?php echo $email_text; ?></h4>
                                    <a href="#" class="mail__address"><?php echo $email_adddress; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="google__form__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3347.0899197104695!2d-96.656257624487!3d32.975029373581634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c1c1a02723ff5%3A0x374159f7809ccb46!2s1625%20Ferris%20Rd%2C%20Garland%2C%20TX%2075044%2C%20USA!5e0!3m2!1sen!2s!4v1708632356671!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>