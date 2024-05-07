<?php
$enable_to_add_marquee_slider = get_field('enable_to_add_marquee_slider') ? get_field('enable_to_add_marquee_slider') : '';
$marquee_slider_repeater = get_field('marquee_slider_repeater') ? get_field('marquee_slider_repeater') : '';
if ($enable_to_add_marquee_slider) :
?>
    <section class="hero__qca__marquee">
        <div class="marquee__content" id="marqueeContent">
            <?php
            if (have_rows('marquee_slider_repeater')) :
                $row_count = count(get_field('marquee_slider_repeater'));
            ?>
                <marquee behavior="" direction="">
                    <p class="marquee__para">
                        <?php
                        if ($row_count == 1) :
                            for ($i = 0; $i < 6; $i++) :
                                while (have_rows('marquee_slider_repeater')) : the_row();
                                    $marquee_slider_text = get_sub_field('marquee_slider_text') ? get_sub_field('marquee_slider_text') : '';
                                    $marquee_slider_image = get_sub_field('marquee_slider_image');
                                    $marquee_slider_image_url = "";
                                    if ($marquee_slider_image && is_array($marquee_slider_image) && isset($marquee_slider_image['url'])) {
                                        $marquee_slider_image_url = $marquee_slider_image['url'];
                                    }
                                    echo $marquee_slider_text;
                                    echo '<img style="margin-right: 10px; margin-left: 10px;" src="' . $marquee_slider_image_url . '" alt="">';
                                endwhile;
                            endfor;
                        else :
                            while (have_rows('marquee_slider_repeater')) : the_row();
                                $marquee_slider_text = get_sub_field('marquee_slider_text') ? get_sub_field('marquee_slider_text') : '';
                                $marquee_slider_image = get_sub_field('marquee_slider_image');
                                $marquee_slider_image_url = "";
                                if ($marquee_slider_image && is_array($marquee_slider_image) && isset($marquee_slider_image['url'])) {
                                    $marquee_slider_image_url = $marquee_slider_image['url'];
                                }
                                echo $marquee_slider_text;
                                echo '<img style="margin-right: 10px; margin-left: 10px;" src="' . $marquee_slider_image_url . '" alt="">';
                            endwhile;
                        endif;
                        ?>
                    </p>
                </marquee>
            <?php
            endif;
            ?>
        </div>
    </section>
<?php endif; ?>