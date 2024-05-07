<?php

$application_process_heading = get_field('application_process_heading');
$application_process_title = get_field('application_process_title');
$application_process_repeater = get_field('application_process_repeater');

?>

<section class="application__process">
    <div class="container">
        <div class="application__title__wrap">
            <?php if ($application_process_heading) { ?>
                <h3 class="apply__heading__text"><?php echo $application_process_heading ?></h3>
            <?php } ?>
            <?php if ($application_process_title) { ?>
                <h2 class="apply__description"><?php echo $application_process_title ?></h2>
            <?php } ?>
        </div>
        <div class="row">
            <?php
            if (have_rows('application_process_repeater')) :
                while (have_rows('application_process_repeater')) : the_row();
                    $application_process_image = get_sub_field('application_process_image');
                    if ($application_process_image && is_array($application_process_image) && isset($application_process_image)) {
                        $application_process_image_url = $application_process_image['url'];
                    } else {
                        $application_process_image_url = '';
                    }
                    $application_repeater_heading = get_sub_field('application_repeater_heading');

                    $application_li_repeater = get_sub_field('application_li_repeater');
            ?>
                    <div class="col-xl-3 application__col">
                        <div class="application__tab">
                            <div class="tab__image">
                                <img src="<?php echo $application_process_image_url ?>" alt="">
                            </div>
                            <div class="tab__body">
                                <?php if ($application_repeater_heading) { ?>
                                    <h4><?php echo $application_repeater_heading ?></h4>
                                <?php } ?>
                                <ul class="tab__list__ul">
                                    <?php
                                    if (have_rows('application_li_repeater')) :
                                        while (have_rows('application_li_repeater')) : the_row();
                                            $list_item_repeater = get_sub_field('list_item_repeater');
                                    ?>
                                            <li><?php echo $list_item_repeater ?></li>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </ul>
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