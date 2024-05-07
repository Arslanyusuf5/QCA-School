<?php

$benefits_cards_repeater = get_field('benefits_cards_repeater') ? get_field('benefits_cards_repeater') : '';

?>

<section class="qca__benefits">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('benefits_cards_repeater')) :
                while (have_rows('benefits_cards_repeater')) : the_row();

                    $benefits_cards_image = get_sub_field('benefits_cards_image');
                    $benefits_cards_image_url = '';
                    if ($benefits_cards_image && is_array($benefits_cards_image) && isset($benefits_cards_image['url'])) {
                        $benefits_cards_image_url = $benefits_cards_image['url'];
                    }

                    $benefits_cards_heading = get_sub_field('benefits_cards_heading');
                    if (empty($benefits_cards_heading)) {
                        $benefits_cards_heading = '';
                    }

                    $benefits_cards_description = get_sub_field('benefits_cards_description');
                    if (empty($benefits_cards_description)) {
                        $benefits_cards_description = '';
                    }
            ?>
                    <div class="col-lg-4">
                        <div class="benefits__card__wrapper">
                            <img src="<?php echo $benefits_cards_image_url; ?>" alt="">
                            <h3><?php echo $benefits_cards_heading; ?></h3>
                            <p><?php echo $benefits_cards_description; ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>
</section>