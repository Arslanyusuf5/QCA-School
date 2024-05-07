<?php
$course_heading = get_field('course_heading');
if (empty($course_heading)) {
    $course_heading = '';
}

$course_title = get_field('course_title');
if (empty($course_title)) {
    $course_title = '';
}
?>
<section class="our__courses">
    <div class="container">
        <div class="our__courses__head">
            <h3 class="our__courses__text"><?php echo $course_heading; ?></h3>
            <h2 class="our__courses__heading"><?php echo $course_title ?></h2>
        </div>
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'course',
                'post_per_page' => '4',
            );
            $course_query = new WP_Query($args);

            if ($course_query->have_posts()) {
                while ($course_query->have_posts()) {
                    $course_query->the_post();

                    $post_id = get_the_ID();

                    $read_more_button = get_field('read_more_button_link', $post_id);

                    if (empty($read_more_button)) {
                        $read_more_button_url = '';
                        $read_more_button_target = '';
                        $read_more_button_title = '';
                    } else {
                        if (empty($read_more_button['url'])) {
                            $read_more_button_url = '';
                        } else {
                            $read_more_button_url = $read_more_button['url'];
                        }

                        if (empty($read_more_button['target'])) {
                            $read_more_button_target = '';
                        } else {
                            $read_more_button_target = $read_more_button['target'];
                        }

                        if (empty($read_more_button['title'])) {
                            $read_more_button_title = '';
                        } else {
                            $read_more_button_title = $read_more_button['title'];
                        }
                    }

                    $title = get_the_title();
                    $content = get_the_content();
                    $image = get_the_post_thumbnail();
            ?>

                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 mt-3 mb-3">
                        <div class="card">
                            <?php echo $image; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title ?></h5>
                                <?php echo $content ?>
                                <div class="card-button"><a href="<?php echo $read_more_button_url; ?>" target="<?php echo $read_more_button_target; ?>" class="btn btn-primary"><?php echo $read_more_button_title; ?></a></div>
                            </div>
                        </div>
                    </div>
            <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</section>