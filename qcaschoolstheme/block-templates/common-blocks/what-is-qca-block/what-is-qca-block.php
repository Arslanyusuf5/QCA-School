<?php

$qca_background_image = get_field('qca_background_image');
if ($qca_background_image && is_array($qca_background_image) && isset($qca_background_image)) {
    $qca_background_image_url = $qca_background_image['url'];
} else {
    $qca_background_image_url = '';
}

$qca_left_top_corner_image = get_field('qca_left_top_corner_image');
if ($qca_left_top_corner_image && is_array($qca_left_top_corner_image) && isset($qca_left_top_corner_image)) {
    $qca_left_top_corner_image_url = $qca_left_top_corner_image['url'];
} else {
    $qca_left_top_corner_image_url = '';
}

$qca_right_bottom_corner_image = get_field('qca_right_bottom_corner_image');
if ($qca_right_bottom_corner_image && is_array($qca_right_bottom_corner_image) && isset($qca_right_bottom_corner_image)) {
    $qca_right_bottom_corner_image_url = $qca_right_bottom_corner_image['url'];
} else {
    $qca_right_bottom_corner_image_url = '';
}

$qca_mid_image = get_field('qca_mid_image');
if ($qca_mid_image && is_array($qca_mid_image) && isset($qca_mid_image)) {
    $qca_mid_image_url = $qca_mid_image['url'];
} else {
    $qca_mid_image_url = '';
}

$qca_wrap_heading = get_field('qca_wrap_heading');
if (empty($qca_wrap_heading)) {
    $qca_wrap_heading = '';
}

$qca_wrap_description = get_field('qca_wrap_description');
if (empty($qca_wrap_description)) {
    $qca_wrap_description = '';
}

$qca_wrap_span = get_field('qca_wrap_span');
if (empty($qca_wrap_span)) {
    $qca_wrap_span = '';
}


?>

<section class="what__is__qca">
    <div class="container">
        <div class="background__image__wrapper"><img src="<?php echo $qca_background_image_url ?>" alt=""></div>
        <div class="row position-relative">
            <div class="col-lg-7 col-12">
                <div class="all__image__wrap">
                    <div class="top__corner__image"><img src="<?php echo $qca_left_top_corner_image_url ?>" alt=""></div>
                    <div class="mid__image__wrap"><img src="<?php echo $qca_mid_image_url ?>" alt=""></div>
                    <div class="right__corner__image"><img src="<?php echo $qca_right_bottom_corner_image_url ?>" alt=""></div>
                </div>

            </div>
            <div class="col-lg-5 col-12 qca__overlay">
                <div class="what__is__qca__wrap">
                    <h2><?php echo $qca_wrap_heading ?><span><?php echo $qca_wrap_span ?></span></h2>
                    <p><?php echo $qca_wrap_description ?></p>
                </div>
            </div>
        </div>
    </div>
</section>