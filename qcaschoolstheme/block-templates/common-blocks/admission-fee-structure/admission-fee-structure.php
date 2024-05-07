<?php

$tuition_fee_title = get_field('tuition_fee_title');
$tuition_fee_title_span = get_field('tuition_fee_title_span');
$tution_fee_annual_repeater = get_field('tution_fee_annual_repeater');
$tution_fee_annual_details_repeater = get_field('tution_fee_annual_details_repeater');
$tuition_schedule_title = get_field('tuition_schedule_title');
$tuition_schedule_title_span = get_field('tuition_schedule_title_span');
$tuition_schedule_description_one = get_field('tuition_schedule_description_one');
$tuition_schedule_description_two = get_field('tuition_schedule_description_two');
$payment_schedule_options = get_field('payment_schedule_options');
$payment_schedule_options_repeater = get_field('payment_schedule_options_repeater');
$payment_schedule_installement_description_paragraph = get_field('payment_schedule_installement_description_paragraph');
$fee_per_child_repeater = get_field('fee_per_child_repeater');
$fee_per_child_details_repeater = get_field('fee_per_child_details_repeater');
$resource_books_title = get_field('resource_books_title');
$resource_books_title_span = get_field('resource_books_title_span');
$resource_books_description = get_field('resource_books_description');

?>


<section class="fee__structure">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="fee__structure__wrapper">
                    <div class="fee__structure__tuition">
                        <?php if ($tuition_fee_title) { ?>
                            <h2 class="fee__structure__heading">
                                <?php echo $tuition_fee_title ?>
                                <?php if ($tuition_fee_title_span) { ?>
                                    <span><?php echo $tuition_fee_title_span ?></span>
                                <?php } ?>
                            </h2>
                        <?php } ?>
                        <div class="tuition__fee__table">
                            <div class="table-responsive" style="overflow-y: hidden;">
                                <table class="table table-borderless tuition__fee__content">
                                    <thead>
                                        <?php

                                        if (have_rows('tution_fee_annual_repeater')) :
                                            while (have_rows('tution_fee_annual_repeater')) : the_row();

                                                $tution_fee_programms_description = get_sub_field('tution_fee_programms_description');
                                                $annual_tution_fee_heading = get_sub_field('annual_tution_fee_heading');
                                                $ten_month_tution_fee_heading = get_sub_field('ten_month_tution_fee_heading');

                                        ?>
                                                <tr>
                                                    <th scope="col"><?php echo $tution_fee_programms_description ?></th>
                                                    <th scope="col"><?php echo $annual_tution_fee_heading ?></th>
                                                    <th scope="col"><?php echo $ten_month_tution_fee_heading ?></th>
                                                </tr>

                                        <?php
                                            endwhile;
                                        endif;
                                        ?>

                                    </thead>
                                    <tbody>
                                        <?php

                                        if (have_rows('tution_fee_annual_details_repeater')) :
                                            while (have_rows('tution_fee_annual_details_repeater')) : the_row();

                                                $tution_fee_programms_description_details = get_sub_field('tution_fee_programms_description');
                                                $annual_tution_fee_amount = get_sub_field('annual_tution_fee_amount');
                                                $ten_month_tution_fee_amount = get_sub_field('ten_month_tution_fee_amount');
                                        ?>
                                                <tr>
                                                    <td><?php echo $tution_fee_programms_description_details ?></td>
                                                    <td><?php echo $annual_tution_fee_amount ?></td>
                                                    <td><?php echo $ten_month_tution_fee_amount ?></td>
                                                </tr>

                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tuition__schedule">
                            <div class="row d-flex justify-content-between">
                                <div class="col-lg-3 col-md-4 col-12">
                                    <?php if ($tuition_schedule_title) { ?>
                                        <h3 class="schedule__heading">
                                            <?php echo $tuition_schedule_title ?><br>
                                            <?php if ($tuition_schedule_title_span) { ?>
                                                <span>
                                                    <?php echo $tuition_schedule_title_span ?>
                                                </span>
                                            <?php } ?>
                                        </h3>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-9 col-md-8 col-12 align-items-center my-auto mx-0">
                                    <?php if ($tuition_schedule_description_one) { ?>
                                        <p class="schedule__description"><?php echo $tuition_schedule_description_one ?></p>
                                    <?php } ?>
                                </div>

                                <div class="col-12">
                                    <?php if ($tuition_schedule_description_two) { ?>
                                        <p class="schedule__description__two">
                                            <?php echo $tuition_schedule_description_two ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="tuition__payment">
                            <?php if ($payment_schedule_options) { ?>
                                <h2 class="tuition__payment__heading">
                                    <?php echo $payment_schedule_options ?>
                                </h2>
                            <?php } ?>
                            <div class="table-responsive" style="overflow-y: hidden;">
                                <table class="table table-borderless tuition__payment__content">
                                    <tbody>
                                        <?php
                                        if (have_rows('payment_schedule_options_repeater')) :
                                            while (have_rows('payment_schedule_options_repeater')) : the_row();

                                                $payment_schedule_index = get_sub_field('payment_schedule_index');
                                                $payment_schedule_installement = get_sub_field('payment_schedule_installement');
                                                $payment_schedule_installement_description = get_sub_field('payment_schedule_installement_description');
                                        ?>
                                                <tr>
                                                    <td><?php echo $payment_schedule_index ?></td>
                                                    <td><?php echo $payment_schedule_installement ?></td>
                                                    <td><?php echo $payment_schedule_installement_description ?>
                                                    </td>
                                                </tr>
                                        <?php
                                            endwhile;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="aug__tuition__text">
                            <?php if ($payment_schedule_installement_description_paragraph) { ?>
                                <p class="aug__tuitation">
                                    <?php echo $payment_schedule_installement_description_paragraph ?>
                                </p>
                            <?php } ?>
                        </div>
                        <div class="non__refundable">
                            <div class="non__refundable__table">
                                <div class="table-responsive" style="overflow-y: hidden;">
                                    <table class="table table-borderless non__refundable__content">
                                        <thead>
                                            <?php

                                            if (have_rows('fee_per_child_repeater')) :
                                                while (have_rows('fee_per_child_repeater')) : the_row();

                                                    $fee_per_child_heading = get_sub_field('fee_per_child_heading');
                                                    $fee_heading = get_sub_field('fee_heading');
                                                    $late_fee_heading = get_sub_field('late_fee_heading');
                                            ?>
                                                    <tr>
                                                        <th scope="col"><?php echo $fee_per_child_heading ?></th>
                                                        <th scope="col"><?php echo $fee_heading ?></th>
                                                        <th scope="col"><?php echo $late_fee_heading ?></th>
                                                    </tr>
                                            <?php
                                                endwhile;
                                            endif;

                                            ?>

                                        </thead>
                                        <tbody>
                                            <?php

                                            if (have_rows('fee_per_child_details_repeater')) :
                                                while (have_rows('fee_per_child_details_repeater')) : the_row();

                                                    $fee_per_child_details = get_sub_field('fee_per_child_details');
                                                    $fee_details = get_sub_field('fee_details');
                                                    $late_fee_details = get_sub_field('late_fee_details');
                                            ?>
                                                    <tr>
                                                        <td><?php echo $fee_per_child_details ?></td>
                                                        <td><?php echo $fee_details ?></td>
                                                        <td><?php echo $late_fee_details ?></td>
                                                    </tr>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="resource__book">
                            <div class="row resource__book__sm">
                                <div class="col-lg-7 col-12"> 
                                    <?php if ($resource_books_description) { ?>
                                        <p class="resource__para"><?php echo $resource_books_description ?></p>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <?php if ($resource_books_title) { ?>
                                        <h2 class="resource__heading">
                                            <?php echo $resource_books_title ?><br>
                                            <?php if ($resource_books_title_span) { ?>
                                                <span>
                                                   <?php echo $resource_books_title_span ?>
                                                </span>
                                            <?php } ?>
                                        </h2>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>