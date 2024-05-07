<?php

$half_width_image = get_field('half_width_image');
if ($half_width_image && isset($half_width_image['url'])) {
    $half_width_image_url = $half_width_image['url'];
} else {
    $half_width_image_url = '';
}

$half_width_title = get_field('half_width_title');

$half_width_description = get_field('half_width_description');

$half_width_row_reverse = get_field('half_width_row_reverse');

$half_width_content_reverse = get_field('half_width_content_reverse');

?>
<section class="half__width__block">
    <div class="container-fluid">
        <div class="row <?php if ($half_width_row_reverse) {
                            echo 'row__reverse';
                        } ?>">
            <div class="col-lg-6 p-0">
                <div class="image__half__width">
                    <img src="<?php echo $half_width_image_url ?>" alt="">
                    <div class=" <?php if ($half_width_content_reverse) {
                                        echo 'right__content';
                                    } else {
                                        echo 'system__content';
                                    } ?>">
                        <?php if ($half_width_title) { ?>
                            <h3><?php echo $half_width_title ?></h3>
                        <?php } ?>
                        <?php if ($half_width_description) { ?>
                            <p><?php echo $half_width_description ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">

            </div>
        </div>
    </div>
</section>