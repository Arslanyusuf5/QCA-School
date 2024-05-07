<?php

$enable_title_button = get_field('enable_title_button');
if ($enable_title_button) {
    $enable_title_button = get_field('enable_title_button');
} else {
    $enable_title_button = '';
}

$enable_description = get_field('enable_description');
if ($enable_description) {
    $enable_description = get_field('enable_description');
} else {
    $enable_description = '';
}

$donate_title = get_field('donate_title');
$donate_description = get_field('donate_description');

$donate_button = get_field('donate_button');
if ($donate_button && isset($donate_button['url'], $donate_button['target'], $donate_button['title'])) {
    $donate_button_url = $donate_button['url'];
    $donate_button_target = $donate_button['target'];
    $donate_button_title = $donate_button['title'];
} else {
    $donate_button_url = '';
    $donate_button_target = '';
    $donate_button_title = '';
}

$footer_cta_image = get_field('footer_cta_image');
if ($footer_cta_image && is_array($footer_cta_image) && isset($footer_cta_image['url'])) {
    $footer_cta_image_url = $footer_cta_image['url'];
} else {
    $footer_cta_image_url = '';
}

?>
<section class="footer__cta" style="background-image: url('<?php echo esc_url($footer_cta_image_url); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <?php if ($enable_title_button) { ?>
                    <?php if ($donate_title) { ?>
                        <h3 class="footer__cta__title"><?php echo $donate_title ?></h3>
                    <?php } ?>
                <?php } ?>
                <?php if ($enable_description) { ?>
                    <?php if ($donate_description) { ?>
                        <p class="footer__cta__description"><?php echo $donate_description ?></p>
                    <?php } ?>
                <?php } ?>
                <?php if($enable_title_button) { ?>
                <div class="footer__cta__button"><a href="<?php echo $donate_button_url ?>" <?php if($donate_button_target) { ?> target="<?php echo $donate_button_target ?>" <?php } ?> ><?php echo $donate_button_title ?></a></div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>