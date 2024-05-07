<?php
$tabs_repeater = get_field('tabs_repeater');
$content_repeater = get_field('content_repeater');
?>

<section class="tradition__and__events__tabs">
    <div class="container">
        <div class="tradition__tabs__list">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <?php
                $tab_counter = 0; 

                if (have_rows('tabs_repeater')) :
                    while (have_rows('tabs_repeater')) : the_row();
                        $tab_title = get_sub_field('tab_title');
                        if($tab_title){
                            $tab_title = get_sub_field('tab_title');
                        }else{
                            $tab_title = '';
                        }
                ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo ($tab_counter === 0) ? 'active' : ''; ?>" id="tab-<?php echo $tab_counter; ?>" data-bs-toggle="tab" data-bs-target="#eventscontent-<?php echo $tab_counter; ?>" type="button" role="tab" aria-controls="eventscontent-<?php echo $tab_counter; ?>" aria-selected="<?php echo ($tab_counter === 0) ? 'true' : 'false'; ?>">
                                <?php echo $tab_title ?>
                            </button>
                        </li>

                <?php
                        $tab_counter++;
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
    <div class="tradition__tabs__content">
        <div class="tab-content" id="myTabContent">

            <?php
            $content_counter = 0; 

            if (have_rows('content_repeater')) :
                while (have_rows('content_repeater')) : the_row();
                    $content_image_left = get_sub_field('content_image_left');
                    if ($content_image_left && isset($content_image_left['url'])) {
                        $content__image__left_url = $content_image_left['url'];
                    } else {
                        $content__image__left_url = '';
                    }

                    $content_image_right = get_sub_field('content_image_right');
                    if ($content_image_right && isset($content_image_right['url'])) {
                        $content__image__right_url = $content_image_right['url'];
                    } else {
                        $content__image__right_url = '';
                    }

                    $content_image_right_title = get_sub_field('content_image_right_title');
                    $content_image_right_text = get_sub_field('content_image_right_text');
            ?>
                    <div class="tab-pane fade <?php echo ($content_counter === 0) ? 'show active' : ''; ?>" id="eventscontent-<?php echo $content_counter; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $content_counter; ?>">
                        <div class="images__wrapper">
                            <div class="image__left">
                                <img src="<?php echo $content__image__left_url ?>" alt="">
                            </div>
                            <div class="image__right">
                                <img src="<?php echo $content__image__right_url ?>" alt="">
                                <div class="content__wrapper">
                                    <?php if($content_image_right_title) { ?>
                                    <h4><?php echo $content_image_right_title ?></h4>
                                    <?php } ?>
                                    <?php if($content_image_right_text) { ?>
                                    <p><?php echo $content_image_right_text ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $content_counter++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        jQuery(document).ready(function($) {
            $('.tradition__tabs__list ul li').click(function() {
                console.log('hi gandu');
                $(this).closest('ul').toggleClass('active');
            });
        });
    });
</script>
