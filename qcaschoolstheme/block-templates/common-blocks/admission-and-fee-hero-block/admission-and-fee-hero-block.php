<?php

$hero_image = get_field('hero_image');
$hero_image_url = "";
if ($hero_image && is_array($hero_image) && isset($hero_image['url'])) {
    $hero_image_url = $hero_image['url'];
}


$hero_heading = get_field('hero_heading') ? get_field('hero_heading') : '';
$hero_title = get_field('hero_title') ? get_field('hero_title') : '';
$hero_description = get_field('hero_description') ? get_field('hero_description') : '';

$apply_now_button = get_field('apply_now_button') ? get_field('apply_now_button') : '';
$apply_now_button_url = isset($apply_now_button['url']) ? $apply_now_button['url'] : '';
$apply_now_button_target = isset($apply_now_button['target']) ? $apply_now_button['target'] : '';
$apply_now_button_title = isset($apply_now_button['title']) ? $apply_now_button['title'] : '';

$fee_structure_button = get_field('fee_structure_button') ? get_field('fee_structure_button') : '';
$fee_structure_button_url = isset($fee_structure_button['url']) ? $fee_structure_button['url'] : '';
$fee_structure_button_target = isset($fee_structure_button['target']) ? $fee_structure_button['target'] : '';
$fee_structure_button_title = isset($fee_structure_button['title']) ? $fee_structure_button['title'] : '';

?>

<section class="admission__and__fee" style="background-image: url('<?php echo $hero_image_url ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="admission__and__fee__wrapper">
                    <h1><?php echo $hero_heading ?> <span><?php echo $hero_title ?></span></h1>
                    <p><?php echo $hero_description ?></p>
                    <div class="fee__button__wrap">
                        <div class="apply__now"><a href="<?php echo $apply_now_button_url ?>" <?php if(!empty($apply_now_button_target)) { ?> target="<?php echo $apply_now_button_target ?>" <?php } ?>  class="anchor_-apply__now"><?php echo $apply_now_button_title ?></a></div>
                        <div class="fee__structure"><a href="<?php echo $fee_structure_button_url ?>" <?php if(!empty($fee_structure_button_target)) { ?> target="<?php echo $fee_structure_button_target ?>" <?php } ?> class="anchor__fee__structure"><?php echo $fee_structure_button_title ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>