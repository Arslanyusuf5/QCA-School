<?php

$top_left_image = get_field('top_left_image');
if ($top_left_image && isset($top_left_image['url'])) {
    $top_left_image_url = $top_left_image['url'];
} else {
    $top_left_image_url = '';
}

$top_right_image = get_field('top_right_image');
if ($top_right_image && isset($top_right_image['url'])) {
    $top_right_image_url = $top_right_image['url'];
} else {
    $top_right_image_url = '';
}

$bottom_left_image = get_field('bottom_left_image');
if ($bottom_left_image && isset($bottom_left_image['url'])) {
    $bottom_left_image_url = $bottom_left_image['url'];
} else {
    $bottom_left_image_url = '';
}

$bottom_right_image = get_field('bottom_right_image');
if ($bottom_right_image && isset($bottom_right_image['url'])) {
    $bottom_right_image_url = $bottom_right_image['url'];
} else {
    $bottom_right_image_url = '';
}

$qca_mission_text = get_field('qca_mission_text');

$qca_mission_text_span = get_field('qca_mission_text_span');

$qca_mission_description = get_field('qca_mission_description');

$qca_mission_row_swap = get_field('qca_mission_row_swap');

$qca_mission_swap_padding = get_field('qca_mission_swap_padding');

?>


<section id="Vision" class="qca__mission">
    <div class="container">
        <div class="row <?php if ($qca_mission_row_swap) {
                            echo 'row-reverse';
                        } ?>">
            <div class="col-lg-6" data-aos="zoom-in-down" data-aos-delay="350">
                <div class="qca__mission__images__wrapper">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo $top_right_image_url ?>" alt="">
                            <div class="icon__one"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-one.png' ?>" alt=""></div>
                        </div>
                        <div class="col-6">
                            <img src="<?php echo $top_left_image_url ?>" alt="">
                            <div class="icon__two"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-two.png' ?>" alt=""></div>
                        </div>
                        <div class="col-6">
                            <img src="<?php echo $bottom_right_image_url ?>" alt="">
                            <div class="icon__three"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-three.png' ?>" alt=""></div>
                        </div>
                        <div class="col-6">
                            <img src="<?php echo $bottom_left_image_url ?>" alt="">
                            <div class="icon__four"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-four.png' ?>" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in-down" data-aos-delay="350">
                <div class="<?php if ($qca_mission_row_swap && $qca_mission_swap_padding ) { echo 'left__content__padding'; } else { echo 'qca__mission__content' ;} ?>">
                    <?php if ($qca_mission_text) { ?>
                        <h2><?php echo $qca_mission_text ?>
                            <?php if ($qca_mission_text_span) { ?>
                                <span><?php echo $qca_mission_text_span ?></span>
                            <?php } ?>
                        </h2>
                    <?php } ?>
                    <?php if ($qca_mission_description) { ?>
                        <p><?php echo $qca_mission_description ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>