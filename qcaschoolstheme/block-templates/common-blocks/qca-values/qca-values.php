<?php

$centered_image = get_field('centered_image');
if ($centered_image && isset($centered_image['url'])) {
    $centered_image_url = $centered_image['url'];
} else {
    $centered_image_url = '';
}

$right_image = get_field('right_image');
if ($right_image && isset($right_image['url'])) {
    $right_image_url = $right_image['url'];
} else {
    $right_image_url = '';
}

$qca_values_text = get_field('qca_values_text');
$qca_values_text_span = get_field('qca_values_text_span');
$qca_values_description = get_field('qca_values_description');

$qca_values_repeater = get_field('qca_values_repeater');


?>

<section class="qca__values">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="images__wrapper">
                    <div class="img__left"></div>
                    <div class="right__bottom"></div>
                    <div class="img__middle"><img src="<?php echo $centered_image_url ?>" alt=""></div>
                    <div class="img__right"><img src="<?php echo $right_image_url ?>" alt=""></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="values__content__wrapper">
                    <?php if ($qca_values_text) { ?>
                        <h3>
                            <?php echo $qca_values_text ?>
                            <?php if ($qca_values_text_span) { ?>
                                <span>
                                    <?php echo $qca_values_text_span ?>
                                </span>
                            <?php } ?>
                        </h3>
                    <?php } ?>
                    <?php if ($qca_values_description) { ?>
                        <p><?php echo $qca_values_description ?></p>
                    <?php } ?>
                    <div class="qca__values__icon">

                        <div class="row">

                            <?php

                            if (have_rows('qca_values_repeater')) :
                                while (have_rows('qca_values_repeater')) : the_row();

                                    $qca_values_icon = get_sub_field('qca_values_icon');
                                    if ($qca_values_icon && isset($qca_values_icon['url'])) {
                                        $qca_values_icon_url = $qca_values_icon['url'];
                                    } else {
                                        $qca_values_icon_url = '';
                                    }

                                    $qca_icon_text = get_sub_field('qca_icon_text');
                            ?>
                                    <div class="col-lg-6 d-flex pb-4">
                                        <img src="<?php echo  $qca_values_icon_url ?>" alt="">
                                        <?php if ($qca_icon_text) { ?>
                                            <h4 class="ps-3"><?php echo $qca_icon_text ?></h4>
                                        <?php } ?>
                                    </div>

                            <?php
                                endwhile;
                            endif;

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>