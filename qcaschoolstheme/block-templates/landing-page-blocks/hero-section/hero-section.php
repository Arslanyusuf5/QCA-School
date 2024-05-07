<?php

$hero_image = get_field('hero_image');
$hero_image_url = "";
if ($hero_image && is_array($hero_image) && isset($hero_image['url'])) {
    $hero_image_url = $hero_image['url'];
}

$hero_heading = get_field('hero_heading') ? get_field('hero_heading') : '';
$hero_title = get_field('hero_title') ? get_field('hero_title') : '';


$enable_to_add_description = get_field('enable_to_add_description') ? get_field('enable_to_add_description') : '';
$hero_description = get_field('hero_description') ? get_field('hero_description') : '';


$enable_to_add_multiple_buttons = get_field('enable_to_add_multiple_buttons') ? get_field('enable_to_add_multiple_buttons') : '';
$apply_now_button = get_field('apply_now_button') ? get_field('apply_now_button') : '';
$apply_now_button_url = isset($apply_now_button['url']) ? $apply_now_button['url'] : '';
$apply_now_button_target = isset($apply_now_button['target']) ? $apply_now_button['target'] : '';
$apply_now_button_title = isset($apply_now_button['title']) ? $apply_now_button['title'] : '';

$fee_structure_button = get_field('fee_structure_button') ? get_field('fee_structure_button') : '';
$fee_structure_button_url = isset($fee_structure_button['url']) ? $fee_structure_button['url'] : '';
$fee_structure_button_target = isset($fee_structure_button['target']) ? $fee_structure_button['target'] : '';
$fee_structure_button_title = isset($fee_structure_button['title']) ? $fee_structure_button['title'] : '';

$enable_to_add_single_button = get_field('enable_to_add_single_button') ? get_field('enable_to_add_single_button') : '';
$home_single_button = get_field('home_single_button') ? get_field('home_single_button') : '';
$home_single_button_url = isset($home_single_button['url']) ? $home_single_button['url'] : '';
$home_single_button_target = isset($home_single_button['target']) ? $home_single_button['target'] : '';
$home_single_button_title = isset($home_single_button['title']) ? $home_single_button['title'] : '';

?>

<section class="hero__section__common" style="background-image: url('<?php echo $hero_image_url ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__section__common__wrapper">
                    <h1><?php echo $hero_heading ?> <span><?php echo $hero_title ?></span></h1>
                    <?php if ($enable_to_add_description) { ?>
                        <p><?php echo $hero_description ?></p>
                    <?php } ?>
                    <?php if ($enable_to_add_single_button) { ?>
                        <div class="text-center pt-5"><a href="<?php echo  $home_single_button_url; ?>" <?php if (!empty($home_single_button_target)) { ?> target="<?php echo $home_single_button_target ?>" <?php } ?> class="btn"><?php echo $home_single_button_title; ?></a></div>
                    <?php } ?>
                    <?php if ($enable_to_add_multiple_buttons) { ?>
                        <div class="hero__section__common__button__wrapper">
                            <div class="apply__now"><a href="<?php echo $apply_now_button_url ?>" <?php if (!empty($apply_now_button_target)) { ?> target="<?php echo $apply_now_button_target ?>" <?php } ?> class="anchor_-apply__now"><?php echo $apply_now_button_title ?></a></div>
                            <div class="fee__structure"><a href="<?php echo $fee_structure_button_url ?>" <?php if (!empty($fee_structure_button_target)) { ?> target="<?php echo $fee_structure_button_target ?>" <?php } ?> class="anchor__fee__structure"><?php echo $fee_structure_button_title ?></a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$enable_to_add_marquee_slider = get_field('enable_to_add_marquee_slider') ? get_field('enable_to_add_marquee_slider') : '';
$marquee_slider_repeater = get_field('marquee_slider_repeater') ? get_field('marquee_slider_repeater') : '';
if ($enable_to_add_marquee_slider) :
?>
    <section class="hero__qca__marquee">
        <div class="marquee__content" id="marqueeContent">
            <?php
            if (have_rows('marquee_slider_repeater')) :
                $row_count = count(get_field('marquee_slider_repeater'));
            ?>
                <marquee behavior="" direction="">
                    <p>
                        <?php
                        if ($row_count == 1) :
                            for ($i = 0; $i < 6; $i++) :
                                while (have_rows('marquee_slider_repeater')) : the_row();
                                    $marquee_slider_text = get_sub_field('marquee_slider_text') ? get_sub_field('marquee_slider_text') : '';
                                    $marquee_slider_image = get_sub_field('marquee_slider_image');
                                    $marquee_slider_image_url = "";
                                    if ($marquee_slider_image && is_array($marquee_slider_image) && isset($marquee_slider_image['url'])) {
                                        $marquee_slider_image_url = $marquee_slider_image['url'];
                                    }
                                    echo $marquee_slider_text;
                                    echo '<img style="margin-right: 2px;" src="' . $marquee_slider_image_url . '" alt="">';
                                endwhile;
                            endfor;
                        else :
                            while (have_rows('marquee_slider_repeater')) : the_row();
                                $marquee_slider_text = get_sub_field('marquee_slider_text') ? get_sub_field('marquee_slider_text') : '';
                                $marquee_slider_image = get_sub_field('marquee_slider_image');
                                $marquee_slider_image_url = "";
                                if ($marquee_slider_image && is_array($marquee_slider_image) && isset($marquee_slider_image['url'])) {
                                    $marquee_slider_image_url = $marquee_slider_image['url'];
                                }
                                echo $marquee_slider_text;
                                echo '<img style="margin-right: 2px;" src="' . $marquee_slider_image_url . '" alt="">';
                            endwhile;
                        endif;
                        ?>
                    </p>
                </marquee>
            <?php
            endif;
            ?>
        </div>
    </section>
<?php endif; ?>