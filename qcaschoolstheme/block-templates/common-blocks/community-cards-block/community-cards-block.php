<?php
$community_card_repeater = get_field('community_card_repeater');
?>
<section class="qca__cards">
    <div class="container">
        <div class="community__row__wrap">
            <div class="row">
                <?php
                $counter = 1;
                if (have_rows('community_card_repeater')) :
                    while (have_rows('community_card_repeater')) : the_row();
                        $community_card_background_image = get_sub_field('community_card_background_image');                        
                        if ($community_card_background_image && is_array($community_card_background_image) && isset($community_card_background_image['url'])) {
                            $community_card_background_image_url = $community_card_background_image['url'];
                        }else{
                            $community_card_background_image_url = '';
                        }

                        $community_card_title =  get_sub_field('community_card_title');
                        $community_card_description =  get_sub_field('community_card_description');

                        $community_card_button = get_sub_field('community_card_button');

                        if ($community_card_button && is_array($community_card_button) && isset($community_card_button['title'] , $community_card_button['url'] , $community_card_button['target'])) {
                            $community_card_button_title = $community_card_button['title'];
                            $community_card_button_url = $community_card_button['url'];
                            $community_card_button_target = $community_card_button['target'];
                        } else {
                            $community_card_button_title = '';
                            $community_card_button_url = '';
                            $community_card_button_target = '';                  
                        }
                ?>
                        <div class="col-xxl-3 col-xl-4 col-md-6 p-0 hover-card mb-2">
                            <div class="community__card__wrapper" style="background-image: url('<?php echo $community_card_background_image_url ?>');">
                                <div class="community__content">
                                    <h4><?php echo sprintf("%02d", $counter);  ?></h4>
                                    <?php if ($community_card_title) { ?>
                                        <h5><?php echo $community_card_title ?></h5>
                                    <?php } ?>
                                    <?php if ($community_card_description) { ?>
                                        <p><?php echo $community_card_description ?></p>
                                    <?php } ?>
                                    <div class="community__anchor">
                                        <a href="<?php echo $community_card_button_url ?>" <?php if ($community_card_button_target) { ?> target="<?php echo $community_card_button_target ?>" <?php } ?>><?php echo $community_card_button_title ?></a>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                <?php
                        $counter++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>