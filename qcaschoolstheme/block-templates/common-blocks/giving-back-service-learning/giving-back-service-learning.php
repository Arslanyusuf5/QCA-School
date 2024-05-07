<?php

$service_learning_tabs_repeater = get_field('service_learning_tabs_repeater');

$service_learning_tabs_content_repeater = get_field('service_learning_tabs_content_repeater');

?>

<section class="service__learning">
    <div class="container">
        <div class="service__learning__wrapper">
            <div class="service__learning__tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php

                    $service_tabs_counter = 0;

                    if (have_rows('service_learning_tabs_repeater')) :
                        while (have_rows('service_learning_tabs_repeater')) : the_row();

                            $tab_heading = get_sub_field('tab_heading');
                    ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?php echo ($service_tabs_counter === 0) ? 'active' : ''; ?>" id="tab-<?php echo $service_tabs_counter; ?>" data-bs-toggle="tab" data-bs-target="#servicelearningcontent-<?php echo $service_tabs_counter; ?>" type="button" role="tab" aria-controls="servicelearningcontent-<?php echo $service_tabs_counter; ?>" aria-selected="<?php echo ($service_tabs_counter === 0) ? 'true' : 'false'; ?>"><?php echo $tab_heading ?></button>
                            </li>
                    <?php

                            $service_tabs_counter++;

                        endwhile;
                    endif;

                    ?>
                </ul>
            </div>
            <div class="tab-content">

                <?php

                $service_tabs_content_counter = 0;

                $index_counter = 1;

                if (have_rows('service_learning_tabs_content_repeater')) :
                    while (have_rows('service_learning_tabs_content_repeater')) : the_row();

                        $tabs_content = get_sub_field('tabs_content');
                        $tabs_image = get_sub_field('tabs_image');
                        if($tabs_image && isset($tabs_image['url'])){
                            $tabs_image_url = $tabs_image['url'];
                        }else{
                            $tabs_image_url = '';
                        }
                ?>
                        <div class="tab-pane <?php echo ($service_tabs_content_counter === 0) ? 'active' : ''; ?>" id="servicelearningcontent-<?php echo $service_tabs_content_counter; ?>" role="tabpanel" aria-labelledby="servicelearningcontent-<?php echo $service_tabs_content_counter; ?>">

                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="service__learning__content">
                                        <h3><?php printf('%02d', $index_counter); ?></h3>
                                        <p><?php echo $tabs_content ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="service__learning__image">
                                        <img src="<?php echo $tabs_image_url; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php

                        $index_counter++;

                        $service_tabs_content_counter++;

                    endwhile;
                endif;

                ?>

            </div>
        </div>
    </div>
</section>