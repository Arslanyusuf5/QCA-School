<?php

$hiring_cards_repeater = get_field('hiring_cards_repeater') ? get_field('hiring_cards_repeater') : '';

?>

<section class="hiring__process__tabs">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('hiring_cards_repeater')) :
                while (have_rows('hiring_cards_repeater')) : the_row();

                    $hiring_cards_image = get_sub_field('hiring_cards_image');
                    $hiring_cards_image_url = '';
                    if ($hiring_cards_image && is_array($hiring_cards_image) && isset($hiring_cards_image['url'])) {
                        $hiring_cards_image_url = $hiring_cards_image['url'];
                    }

                    $hiring_cards_heading = get_sub_field('hiring_cards_heading');
                    if (empty($hiring_cards_heading)) {
                        $hiring_cards_heading = '';
                    }

                    $hiring_cards_description = get_sub_field('hiring_cards_description');
                    if (empty($hiring_cards_description)) {
                        $hiring_cards_description = '';
                    }
            ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="hiring__tabs__wrapper">
                            <img src="<?php echo $hiring_cards_image_url; ?>" alt="">
                            <h3><?php echo $hiring_cards_heading; ?></h3>
                            <p><?php echo $hiring_cards_description; ?></p>
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