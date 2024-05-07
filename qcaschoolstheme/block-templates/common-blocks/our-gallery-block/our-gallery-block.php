<?php
$gallery_heading = get_field('gallery_heading') ? get_field('gallery_heading') : '';
$gallery_title = get_field('gallery_title') ? get_field('gallery_title') : '';
$gallery_repeater = get_field('gallery_repeater') ? get_field('gallery_repeater') : '';
$gallery_button = get_field('gallery_button') ? get_field('gallery_button') : '';
$gallery_button_url = isset($gallery_button['url']) ? $gallery_button['url'] : '';
$gallery_button_target = isset($gallery_button['target']) ? $gallery_button['target'] : '';
$gallery_button_title = isset($gallery_button['title']) ? $gallery_button['title'] : '';
?>
<section class="our-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3><?php echo $gallery_heading; ?></h3>
                <h2><?php echo $gallery_title; ?></h2>
            </div>
            <div class="col-lg-12">
                <div class="our-gallery-slider">
                    <div class="swiper swiper-container qcaschoolgallery">
                        <div class="swiper-wrapper">
                            <?php
                            if (have_rows('gallery_repeater')) :
                                while (have_rows('gallery_repeater')) : the_row();
                                    $gallry_image_url = "";
                                    $image_repeater = get_sub_field('image_repeater') ? get_sub_field('image_repeater') : '';
                                    if ($image_repeater && is_array($image_repeater) && isset($image_repeater['url'])) {
                                        $gallry_image_url = $image_repeater['url'];
                                    }
                            ?>
                                    <div class="swiper-slide">
                                        <div class="card">
                                            <img class="card-img-top" src="<?php echo $gallry_image_url; ?>" alt="Card image cap">
                                        </div>
                                    </div>
                            <?php
                                endwhile;
                            else :
                                echo 'repeater fields not found';
                            endif;
                            ?>
                        </div>
                    </div>
                    <!-- <div class="gallery-swiper-navigations">
                        <div class="swiper-button-prev"><svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiper-button-next"><svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="gallery-read-more d-flex justify-content-center pt-4">
                <a href="<?php echo $gallery_button_url; ?>" <?php if (!empty($gallery_button_target)) { ?> target="<?php echo $gallery_button_target ?>" <?php } ?> class="btn"><?php echo $gallery_button_title; ?></a>
            </div>
        </div>
    </div>
</section>