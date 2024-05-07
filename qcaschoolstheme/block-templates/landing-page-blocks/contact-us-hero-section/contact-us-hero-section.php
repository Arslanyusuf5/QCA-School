<?php

$contact_us_hero_image = get_field('contact_us_hero_image');
$contact_us_hero_image_url = "";
if ($contact_us_hero_image && is_array($contact_us_hero_image) && isset($contact_us_hero_image['url'])) {
    $contact_us_hero_image_url = $contact_us_hero_image['url'];
}


$contact_us_hero_image_heading = get_field('contact_us_hero_image_heading') ? get_field('contact_us_hero_image_heading') : '';
$contact_us_hero_image_title = get_field('contact_us_hero_image_title') ? get_field('contact_us_hero_image_title') : '';
$contact_us_hero_image_description = get_field('contact_us_hero_image_description') ? get_field('contact_us_hero_image_description') : '';

?>

<section class="contact__us__hero" style="background-image: url('<?php echo $contact_us_hero_image_url ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__us__hero__wrapper">
                    <h1><?php echo $contact_us_hero_image_heading ?> <span><?php echo $contact_us_hero_image_title ?></span></h1>
                    <p><?php echo $contact_us_hero_image_description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>