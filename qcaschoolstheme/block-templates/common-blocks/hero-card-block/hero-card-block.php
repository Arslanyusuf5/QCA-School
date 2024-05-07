<?php
    $hero_cards_repeater_loop = get_field('hero_cards_repeater_loop') ? get_field('hero_cards_repeater_loop') : '';
?>
<section id="hero-cards" class="hero-cards">
    <div class="container">
        <div class="hero-cards-inner">
            <div class="row gy-xl-0 gy-4"> 
                <?php
                if (have_rows('hero_cards_repeater_loop')) :
                    while (have_rows('hero_cards_repeater_loop')) : the_row();
                        $icon_url = "";
                        $card_icon = get_sub_field('card_icon') ? get_sub_field('card_icon') : '';
                        if ($card_icon && is_array($card_icon) && isset($card_icon['url'])) {
                            $icon_url = $card_icon['url'];
                        }
                        $card_title = get_sub_field('card_title') ? get_sub_field('card_title') : '';
                        $card_description = get_sub_field('card_description') ? get_sub_field('card_description') : '';
                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="custom-card">
                                <div class="icon text-center"><img src="<?php echo $icon_url; ?>" alt=""></div>
                                <h4><?php echo $card_title; ?></h4>
                                <p><?php echo $card_description; ?></p>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    echo 'repeater fields not found';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>