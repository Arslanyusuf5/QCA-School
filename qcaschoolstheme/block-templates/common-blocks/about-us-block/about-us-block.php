<?php

$about_us_heading = get_field('about_us_heading') ? get_field('about_us_heading') : '';
$about_us_title = get_field('about_us_title') ? get_field('about_us_title') : '';
$about_us_description = get_field('about_us_description') ? get_field('about_us_description') : '';
$about_us_button = get_field('about_us_button') ? get_field('about_us_button') : '';
$about_us_button_url = isset($about_us_button['url']) ? $about_us_button['url'] : '';
$about_us_button_target = isset($about_us_button['target']) ? $about_us_button['target'] : '';
$about_us_button_title = isset($about_us_button['title']) ? $about_us_button['title'] : '';

$about_us_left_image = get_field('about_us_left_image');
$left_image_url = "";
if ($about_us_left_image && is_array($about_us_left_image) && isset($about_us_left_image['url'])) {
    $left_image_url = $about_us_left_image['url'];
}

$about_us_right_image = get_field('about_us_right_image');
$right_image_url = "";
if ($about_us_right_image && is_array($about_us_right_image) && isset($about_us_right_image['url'])) {
    $right_image_url = $about_us_right_image['url'];
}

$about_us_center_image = get_field('about_us_center_image');
$center_image_url = "";
if ($about_us_center_image && is_array($about_us_center_image) && isset($about_us_center_image['url'])) {
    $center_image_url = $about_us_center_image['url'];
}

?>
<section id="about-us" class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="image-wrapper p-3">
                    <div class="img-left"><img src="<?php echo $left_image_url ?>" alt=""></div>
                    <div class="img-center"><img src="<?php echo $center_image_url ?>" alt=""></div>
                    <div class="img-right"><img src="<?php echo $right_image_url ?>" alt=""></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-text-wrapper pl-3">
                    <h3><?php echo $about_us_heading ?></h3>
                    <h2><?php echo $about_us_title ?></h2>
                    <p><?php echo $about_us_description ?></p>
                    <div><a href="<?php echo  $about_us_button_url; ?>" <?php if(!empty($about_us_button_target)) { ?>  target="<?php echo $about_us_button_target ?>" <?php } ?> class="btn"><?php echo $about_us_button_title; ?></a></div>
                </div>
            </div>
        </div>
    </div>

</section>