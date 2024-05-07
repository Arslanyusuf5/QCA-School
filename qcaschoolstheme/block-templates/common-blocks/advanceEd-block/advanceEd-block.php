<?php

$qca_left_image = get_field('qca_left_image') ? get_field('qca_left_image') : '';
$qca_left_image_url = '';
if ($qca_left_image && is_array($qca_left_image) && isset($qca_left_image['url'])) {
    $qca_left_image_url = $qca_left_image['url'];
}

$qca_right_image = get_field('qca_right_image') ? get_field('qca_right_image') : '';
$qca_right_image_url = '';
if ($qca_right_image && is_array($qca_right_image) && isset($qca_right_image['url'])) {
    $qca_right_image_url = $qca_right_image['url'];
}


$qca_quotes_icon = get_field('qca_quotes_icon') ? get_field('qca_quotes_icon') : '';
$qca_quotes_icon_url = '';
if ($qca_quotes_icon && is_array($qca_quotes_icon) && isset($qca_quotes_icon['url'])) {
    $qca_quotes_icon_url = $qca_quotes_icon['url'];
}

$qca_description = get_field('qca_description') ? get_field('qca_description') : '';

$qca_button = get_field('qca_button') ? get_field('qca_button') : '';
$qca_button_url = isset($qca_button['url']) ? $qca_button['url'] : '';
$qca_button_target = isset($qca_button['target']) ? $qca_button['target'] : '';
$qca_button_title = isset($qca_button['title']) ? $qca_button['title'] : '';

?>

<section id="advance-ed" class="advance-ed">
    <div class="bg-images">
        <img class="first-image" src="<?php echo $qca_left_image_url ?>" alt="">
        <img src="<?php echo $qca_right_image_url ?>" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="wrapper-stripe d-flex justify-content-center">
                        <div class="stripe-one"></div>
                        <div class="stripe-one"></div>
                    </div>
                    <div class="text-background">
                        <img src="<?php echo $qca_quotes_icon_url ?>" alt="">
                        <p><?php echo $qca_description ?></p>
                        <div class="text-center text-lg-end pb-3"><a href="<?php echo $qca_button_url ?>" <?php if (!empty($qca_button_target)) { ?> target="<?php echo $qca_button_target ?>" <?php } ?> class="btn"><?php echo $qca_button_title; ?></a></div>
                    </div>
                    <div class="wrapper-stripe d-flex justify-content-center">
                        <div class="stripe-one"></div>
                        <div class="stripe-one"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>