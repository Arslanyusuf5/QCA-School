<?php

$qca_milestone_text = get_field('qca_milestone_text');
$qca_milestone_text_span = get_field('qca_milestone_text_span');
$qca_milestone_description = get_field('qca_milestone_description');

$qca_milestone_button = get_field('qca_milestone_button');
if ($qca_milestone_button && isset($qca_milestone_button['target'], $qca_milestone_button['title'], $qca_milestone_button['url'])) {
    $qca_milestone_button_target = $qca_milestone_button['target'];
    $qca_milestone_button_title = $qca_milestone_button['title'];
    $qca_milestone_button_url = $qca_milestone_button['url'];
} else {
    $qca_milestone_button_target = '';
    $qca_milestone_button_title = '';
    $qca_milestone_button_url = '';
}

$qca_milestone_image = get_field('qca_milestone_image');
if ($qca_milestone_image && isset($qca_milestone_image['url'])) {
    $qca_milestone_image_url = $qca_milestone_image['url'];
} else {
    $qca_milestone_image_url = '';
}

?>

<section class="qca__milestones">
    <div class="container">
        <div class="qca__milestones__wrap">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center" data-aos="zoom-in-down" data-aos-delay="300">
                    <div class="qca__milestones__content">
                        <?php if($qca_milestone_text) { ?>
                        <h2><?php echo $qca_milestone_text; ?>
                            <?php if($qca_milestone_text_span) { ?>
                            <span>
                                <?php echo $qca_milestone_text_span; ?>
                            </span>
                            <?php } ?>
                        </h2>
                        <?php } ?>
                        <?php if ($qca_milestone_description) { ?>
                        <p><?php echo $qca_milestone_description ?></p>
                        <?php } ?>
                        <div class="qca__milestones__btn"><a href="<?php echo $qca_milestone_button_url ?>" <?php if($qca_milestone_button_target) { ?> target="<?php echo $qca_milestone_button_target ?>" <?php } ?> ><?php echo $qca_milestone_button_title ?></a></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="qca__milestones__images" data-aos="zoom-in-down" data-aos-delay="300">
                        <div class="milestones__icon__two"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-two.png' ?>" alt=""></div>
                        <img src="<?php echo $qca_milestone_image_url ?>" alt="">
                        <div class="milestones__icon__three"><img src="<?php echo get_template_directory_uri() . '/images/qca-mission/mission-icon-three.png' ?>" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>