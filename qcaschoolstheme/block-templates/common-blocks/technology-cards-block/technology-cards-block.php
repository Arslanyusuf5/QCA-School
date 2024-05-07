<?php

$technology_card_repeater = get_field('technology_card_repeater');

?>

<section class="technology__cards">
    <div class="container-fluid">
        <div class="row">
            <?php

            if (have_rows('technology_card_repeater')) :
                while (have_rows('technology_card_repeater')) : the_row();

                    $technology_card_image = get_sub_field('technology_card_image');
                    if ($technology_card_image && $technology_card_image['url']) {
                        $technology_card_image_url = $technology_card_image['url'];
                    } else {
                        $technology_card_image_url = '';
                    }

                    $technology_card_title = get_sub_field('technology_card_title');

                    $technology_card_description = get_sub_field('technology_card_description');
            ?>
                    <div class="col-xxl-3 col-lg-4 col-md-6 p-0 mb-2">
                        <div class="technology__card__wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="tech__image__wrapper">
                                <img src="<?php echo $technology_card_image_url ?>" alt="">
                            </div>
                            <?php if ($technology_card_title) { ?>
                                <h3><?php echo $technology_card_title ?></h3>
                            <?php } ?>
                            <?php if ($technology_card_description) { ?>
                                <p class="m-0"><?php echo $technology_card_description ?></p>
                            <?php } ?>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>