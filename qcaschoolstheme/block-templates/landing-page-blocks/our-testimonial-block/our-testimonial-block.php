<?php

$testimonial_heading = get_field('testimonial_heading');
$testimonial_description = get_field('testimonial_description');

?>


<section class="our-testimonial pt-2 pb-2">
    <div class="our-testimonial-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="zoom-in" data-aos-delay="300">
                    <div class="our-testimonial-title">
                        <?php if ($testimonial_heading) { ?>
                            <h1><?php echo $testimonial_heading; ?></h1>
                        <?php } ?>
                    </div>
                    <div class="our-testimonial-svg d-flex justify-content-center align-item-center pt-2 pb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="178" height="10" viewBox="0 0 178 10" fill="none">
                            <path d="M0.999756 8.16165C49.5336 0.0726616 116.717 -0.601462 177.834 8.16165" stroke="#0089E8" stroke-width="2.24694" />
                        </svg>
                    </div>
                    <div class="our-testimonial-para pb-4 pt-3">
                        <?php if ($testimonial_description) { ?>
                            <p><?php echo $testimonial_description; ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 pt-4">
                    <div class="testimonial-slider-wrapper">
                        <div class="swiper swiper-container mySwipertestimonial">
                            <div class="swiper-wrapper">

                                <?php

                                $args = array(
                                    'post_type' => 'testimonial',
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();

                                        $post_id = get_the_ID();
                                        $post_title = get_the_title();
                                        $post_content = get_the_content();
                                        $post_image = get_the_post_thumbnail();
                                        $terms = get_the_terms($post_id, 'designation');

                                        $designation_repeater_field = get_field('testimonial_designation_repeater', $post_id);

                                        //$testimonial_rating = get_field('testimonial_rating' , $post_id);
                                ?>
                                        <div class="swiper-slide" data-aos="zoom-in-down" data-aos-delay="300">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="ratings-image-wrapper d-flex justify-content-between">
                                                        <div>
                                                            <?php
                                                            if ($post_image) {
                                                                echo $post_image;
                                                            } else {
                                                            ?>
                                                                <img style="background-color: #fff;" src="<?php echo get_template_directory_uri() . '/images/avatar.png' ?>" alt="">
                                                            <?php
                                                            }


                                                            ?>
                                                        </div>
                                                        <!-- <div>
                                                            
                                                               // for($i=0 ; $i<=$testimonial_rating ; $i++ ) {
                                                            
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                                <path d="M9.6583 2.12908C9.87604 1.45894 10.8241 1.45894 11.0419 2.12908L12.4731 6.5339C12.5704 6.8336 12.8497 7.03651 13.1649 7.03651H17.7964C18.501 7.03651 18.794 7.93818 18.2239 8.35235L14.4769 11.0747C14.222 11.2599 14.1153 11.5882 14.2127 11.8879L15.6439 16.2927C15.8617 16.9629 15.0946 17.5201 14.5246 17.106L10.7776 14.3836C10.5227 14.1984 10.1775 14.1984 9.92253 14.3836L6.17557 17.106C5.60551 17.5201 4.8385 16.9629 5.05625 16.2927L6.48746 11.8879C6.58484 11.5882 6.47816 11.2599 6.22322 11.0747L2.47626 8.35235C1.9062 7.93818 2.19917 7.03651 2.9038 7.03651H7.5353C7.85043 7.03651 8.12971 6.8336 8.22709 6.5339L9.6583 2.12908Z" fill="#0089E8" />
                                                            </svg>
                                                            
                                                        </div> -->
                                                    </div>
                                                    <p class="card-text pt-4 text-align-left"><?php echo $post_content; ?></p>
                                                    <p class="testimonial-name"><?php echo $post_title ?></p>

                                                    <?php
                                                    if ($designation_repeater_field) {
                                                        echo '<ul class="repeater-ul-class">';
                                                        foreach ($designation_repeater_field as $value) {
                                                            echo '<li class="repeater-li-class">' . $value['designation_repeater_values'] . '</li>';
                                                        }
                                                        echo '</ul>';
                                                    }
                                                    ?>

                                                    <!-- if ($terms && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) { ?>
                                                    <p class="testimonial-designation"> //echo //$term->name ?></p>
                                                    }
                                                    } -->
                                                </div>
                                            </div>
                                        </div>
                                <?php

                                    }

                                    wp_reset_postdata();
                                }

                                ?>
                            </div>
                            <div class="d-flex justify-content-center pt-5">
                                <div class="swiper-pagination-testimonial"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>