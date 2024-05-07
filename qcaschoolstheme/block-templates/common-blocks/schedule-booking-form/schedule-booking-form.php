<?php

$video_content_image = get_field('video_content_image');
if ($video_content_image && isset($video_content_image['url'])) {
    $video_content_image_url = $video_content_image['url'];
} else {
    $video_content_image_url = '';
}

$play_button_icon = get_field('play_button_icon');
if ($play_button_icon && isset($play_button_icon['url'])) {
    $play_button_icon_url = $play_button_icon['url'];
} else {
    $play_button_icon_url = '';
}

$iframe_video = get_field('iframe_video');

?>

<section class="schedule__booking__form">
    <div class="container">
        <div class="row schedule__booking__form__row">
            <div class="col-lg-6 p-0">
                <div class="booking__contact__form__wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="108793b" title="Schedule a Tour Contact Form"]'); ?>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="qca__video__wrapper__booking">
                    <div class="video__content__image__booking">
                        <div class="overlay__on__image__booking">
                            <img src="<?php echo $video_content_image_url ?>" alt="">
                        </div>
                        <div class="overlay__content__booking">
                            <div class="overlay__content__wrap__booking">
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <img src="<?php echo $play_button_icon_url
                                                ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <?php
                                if ($iframe_video) {
                                    echo $iframe_video;
                                } else {
                                    $iframe_video = '';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>