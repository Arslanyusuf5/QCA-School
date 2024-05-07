<?php

$admission_details_title = get_field('admission_details_title');
$admission_details_heading = get_field('admission_details_heading');
$admission_details_description = get_field('admission_details_description');

$admission_details_button = get_field('admission_details_button');
if ($admission_details_button && isset($admission_details_button['target'], $admission_details_button['url'], $admission_details_button['title'])) {
    $admission_details_button_url = $admission_details_button['url'];
    $admission_details_button_target = $admission_details_button['target'];
    $admission_details_button_title = $admission_details_button['title'];
} else {
    $admission_details_button_url = '';
    $admission_details_button_target = '';
    $admission_details_button_title = '';
}


$admission_details_image = get_field('admission_details_image');
if ($admission_details_image && is_array($admission_details_image) && isset($admission_details_image)) {
    $admission_details_image_url = $admission_details_image['url'];
} else {
    $admission_details_image_url = '';
}


?>

<section class="admission__details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="admission__details__wrapper">
                    <?php if($admission_details_title) { ?>
                    <h2 class="admission__details__title"><?php echo $admission_details_title ?></h2>
                    <?php } ?>
                    <?php if($admission_details_heading) { ?>
                    <h3 class="admission__details__heading"><?php echo $admission_details_heading ?></h3>
                    <?php } ?>
                    <?php if($admission_details_description) {?>
                    <p class="admission__description"><?php echo $admission_details_description ?></p>
                    <?php } ?>
                    <div class="admission__anchor"><a href="<?php echo $admission_details_button_url ?>" 
                    <?php if($admission_details_button_target) { ?> target="<?php echo $admission_details_button_target ?>" <?php } ?>
                    ><?php echo $admission_details_button_title ?></a></div>
                </div>
            </div>
            <div class="col-lg-6 mx-0 my-auto">
                <div class="admission__image">
                    <img src="<?php echo $admission_details_image_url ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>