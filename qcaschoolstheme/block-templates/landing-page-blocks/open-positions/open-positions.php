<section class="open__positions">
    <div class="container">
        <div class="all__campus__tabs">
            <div class="row">
                <div class="col-12">
                    <div class="all__campus__tabs__content">
                        <?php echo do_shortcode('[facetwp facet="position_tabs"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="all__information__tabs">
            <div class="row">
                <div class="col-lg-3">
                    <?php echo do_shortcode('[facetwp facet="search"]'); ?>
                </div>
                <div class="col-lg-3">
                    <?php echo do_shortcode('[facetwp facet="locations"]'); ?>
                </div>
                <div class="col-lg-3">
                    <?php echo do_shortcode('[facetwp facet="departments"]'); ?>
                </div>
                <div class="col-lg-3">
                    <?php echo do_shortcode('[facetwp facet="employments"]'); ?>
                </div>
            </div>
        </div>
        <div class="tabs__content">
            <?php
            echo do_shortcode('[facetwp template="open_positions_listings"]');
            ?>
        </div>
    </div>
</section>