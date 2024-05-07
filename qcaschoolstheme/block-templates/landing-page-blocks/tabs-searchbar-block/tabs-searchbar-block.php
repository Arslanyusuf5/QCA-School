<section class="searchbar__tabs">
    <div class="search__bar__border">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-12">
                    <div class="tabs__wrapper">
                        <?php
                        echo do_shortcode('[facetwp facet="schools"]');
                        ?>
                    </div>

                    <div class="tabs__wrapper__mobile">
                        <div class="nav__bar__wrapper">
                            <?php
                            add_filter('facetwp_facet_dropdown_show_counts', '__return_false');
                            echo do_shortcode('[facetwp facet="school_dropdown"]');
                            ?>
                        </div>
                        <div class="searchbar__wrapper__mobile">
                            <?php echo do_shortcode('[facetwp facet="search"]'); ?>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-end align-items-center ">
                    <div class="searchbar__wrapper">
                        <?php echo do_shortcode('[facetwp facet="search"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs__content_wrapper">
        <div class="container">
            <div class="tab-content" id="myTabContent">
                <?php echo do_shortcode('[facetwp template="news_qury_loop"]'); ?>
            </div>
            <div class="tabs__pagination text-center">
                <?php echo do_shortcode('[facetwp facet="tabs_pagination"]'); ?>
            </div>
        </div>
    </div>
</section>