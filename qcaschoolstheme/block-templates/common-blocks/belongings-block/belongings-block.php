<?php

$blg_number = get_field('blg_number');
$blg_heading = get_field('blg_heading');

$blg_repeater_field = ('blg_repeater_field');

?>

<section class="belongings">
    <div class="container">
        <div class="head__title__wrap">
            <?php if ($blg_number) { ?>
                <h3><?php echo $blg_number ?></h3>
            <?php } ?>
            <?php if ($blg_heading) { ?>
                <h4><?php echo $blg_heading ?></h4>
            <?php } ?>
        </div>

        <div class="row">

            <?php

            if (have_rows('blg_repeater_field')) :
                while (have_rows('blg_repeater_field')) : the_row();


                    $blg_icon = get_sub_field('blg_icon');
                    if ($blg_icon && isset($blg_icon['url'])) {
                        $blg_icon_url = $blg_icon['url'];
                    } else {
                        $blg_icon_url = '';
                    }

                    $blg_text = get_sub_field('blg_text');

                    $blg_description = get_sub_field('blg_description');

                    $blg_button = get_sub_field('blg_button');
                    if ($blg_button && isset($blg_button['target'], $blg_button['url'], $blg_button['title'])) {
                        $blg_button_url = $blg_button['url'];
                        $blg_button_target = $blg_button['target'];
                        $blg_button_title = $blg_button['title'];
                    } else {
                        $blg_button_url = '';
                        $blg_button_target = '';
                        $blg_button_title = '';
                    }

            ?>
                    <div class="col-lg-4">
                        <div class="icon_text">
                            <div class="icon__wrap d-flex align-items-center text-center">
                                <img src="<?php echo $blg_icon_url ?>" alt="">
                                <?php if ($blg_text) { ?>
                                    <h5 class="m-0"><?php echo $blg_text ?></h5>
                                <?php } ?>
                            </div>
                            <?php if ($blg_description) {  ?>
                                <p><?php echo $blg_description ?></p>
                            <?php } ?>
                            <div class="bl__anchor">
                                <a href="<?php echo $blg_button_url ?>" <?php if ($blg_button_target) { ?> target="<?php echo $blg_button_target ?>" <?php } ?>><?php echo $blg_button_title ?></a>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>