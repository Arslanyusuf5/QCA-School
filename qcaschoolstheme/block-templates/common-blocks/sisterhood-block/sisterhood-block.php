<?php

$sisterhood_image = get_field('sisterhood_image');
if ($sisterhood_image && isset($sisterhood_image['url'])) {
    $sisterhood_image_url = $sisterhood_image['url'];
} else {
    $sisterhood_image_url = '';
}

$sisterhood_number = get_field('sisterhood_number');
$sisterhood_text = get_field('sisterhood_text');
$sisterhood_text_span = get_field('sisterhood_text_span');
$sisterhood_description = get_field('sisterhood_description');


?>

<section class="sisterhood">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 position-relative">
                <div class="sisterhood__image p-3">
                    <img src="<?php echo $sisterhood_image_url; ?>" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="sisterhood__content">
                    <?php if ($sisterhood_number) { ?>
                        <h3><?php echo $sisterhood_number ?></h3>
                    <?php } ?>
                    <?php if ($sisterhood_text) { ?>
                        <h4>
                            <?php echo $sisterhood_text ?><br>
                            <?php if ($sisterhood_text_span) { ?>
                                <span>
                                    <?php echo $sisterhood_text_span ?>
                                </span>
                            <?php } ?>
                        </h4>
                        <?php } ?>
                        <?php if($sisterhood_description) { ?>
                        <p><?php echo $sisterhood_description ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>