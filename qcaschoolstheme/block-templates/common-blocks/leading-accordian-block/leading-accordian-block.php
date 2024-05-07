<?php

$accordian_image = get_field('accordian_image');
if ($accordian_image && is_array($accordian_image) && isset($accordian_image['url'])) {
    $accordian_image_url = $accordian_image['url'];
} else {
    $accordian_image_url = '';
}

$accordian_repeater = get_field('accordian_repeater');

?>

<section class="leading__accordian">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5">
                <div class="image__left">
                    <div class="overlay">
                    </div>
                    <img src="<?php echo $accordian_image_url ?>" alt="">
                </div>
            </div>
            <div class="col-xl-7">
                <?php

                if (have_rows('accordian_repeater')) :
                    $firstAccordion = true;
                    while (have_rows('accordian_repeater')) : the_row();

                        $accordian_title = get_sub_field('accordian_title');
                        $accordian_description = get_sub_field('accordian_description');
                ?>
                        <div class="accordian__container">
                            <div class="accordian__content__wrapper <?php echo $firstAccordion ? 'faq-active' : ''; ?>">
                                <?php if ($accordian_title) { ?>
                                    <h3><?php echo $accordian_title ?></h3>
                                <?php } ?>
                                <div class="faq-content">
                                    <?php if ($accordian_description) { ?>
                                        <p><?php echo $accordian_description ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                <?php
                        $firstAccordion = false;
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.accordian__content__wrapper h3').forEach((faqItem, index) => {
        faqItem.addEventListener('click', () => {

            document.querySelectorAll('.accordian__content__wrapper').forEach((item) => {
                item.classList.remove('faq-active');
            });

            faqItem.parentNode.classList.add('faq-active');

            // Check if it is the first index and add class accordingly
            if (index === 0) {
                document.querySelector('.accordian__container:first-child .accordian__content__wrapper').classList.add('faq-active');
            }
        });
    });
</script>