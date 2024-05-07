<?php

$hero_image = get_field('hero_image');
$hero_image_url = "";
if ($hero_image && is_array($hero_image) && isset($hero_image['url'])) {
    $hero_image_url = $hero_image['url'];
}


$hero_heading = get_field('hero_heading') ? get_field('hero_heading') : '';
$hero_title = get_field('hero_title') ? get_field('hero_title') : '';
$hero_description = get_field('hero_description') ? get_field('hero_description') : '';

?>

<section class="news__hero" style="background-image: url('<?php echo $hero_image_url ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="news__hero__wrapper">
                    <h1><?php echo $hero_heading ?> <span><?php echo $hero_title ?></span></h1>
                    <p><?php echo $hero_description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>