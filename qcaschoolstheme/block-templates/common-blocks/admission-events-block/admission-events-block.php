<?php
$admission_events_image = get_field('admission_events_image');
if ($admission_events_image && is_array($admission_events_image) && isset($admission_events_image)) {
    $admission_events_image_url = $admission_events_image['url'];
} else {
    $admission_events_image_url = '';
}

$admission_events_heading = get_field('admission_events_heading');

$admission_events_description = get_field('admission_events_description');

$admission_events_repeater = get_field('admission_events_repeater');

?>

<section class="qca__admission__events">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-6 col-lg-5 p-0 m-0">
                <div class="image__column">
                    <img src="<?php echo $admission_events_image_url ?>" alt="">
                </div>
            </div>
            <div class="col-xxl-6 col-lg-7 admission__background p-0 m-0">
                <div class="admission__counters">
                    <?php if ($admission_events_heading) { ?>
                        <h2 class="admission__heading"><?php echo $admission_events_heading ?></h2>
                    <?php } ?>
                    <?php if ($admission_events_description) { ?>
                        <p class="admission__description"><?php echo $admission_events_description ?></p>
                    <?php }  ?>
                    <ul class="admission__events__wrapper p-0">
                        <?php
                        $counter = 1;
                        if (have_rows('admission_events_repeater')) :
                            while (have_rows('admission_events_repeater')) : the_row();
                                $admission_events_date = get_sub_field('admission_events_date');
                                $admission_events_details = get_sub_field('admission_events_details');
                        ?>
                                <li class="items d-flex">
                                    <div class="items__counter"><?php echo $counter ?></div>
                                    <div class="items__counter__content__wrapper d-flex justify-content-center flex-column">
                                        <?php if ($admission_events_date) { ?>
                                            <div class="items__date"><strong><?php echo $admission_events_date ?></strong></div>
                                        <?php } ?>
                                        <div class="items__description">
                                            <?php if ($admission_events_details) { ?>
                                                <p class="event__description m-0">
                                                    <?php echo $admission_events_details ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </li>
                        <?php
                             $counter++;
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>