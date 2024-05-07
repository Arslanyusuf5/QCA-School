<?php

$home_page_image = get_field('home_page_image');
$home_page_image_url = "";
if ($home_page_image && is_array($home_page_image) && isset($home_page_image['url'])) {
    $home_page_image_url = $home_page_image['url'];
}

$heading_text = get_field('heading_text') ? get_field('heading_text') : '';
$heading_text_styled = get_field('heading_text_styled') ? get_field('heading_text_styled') : '';
$heading_text_second = get_field('heading_text_second') ? get_field('heading_text_second') : '';
$heading_text_styled_second = get_field('heading_text_styled_second') ? get_field('heading_text_styled_second') : '';


$recent_news_image = get_field('recent_news_image');
$recent_news_image_url = "";
if ($recent_news_image && is_array($recent_news_image) && isset($recent_news_image['url'])) {
    $recent_news_image_url = $recent_news_image['url'];
}

$recent_news_heading = get_field('recent_news_heading') ? get_field('recent_news_heading') : '';
$recent_news_title = get_field('recent_news_title') ? get_field('recent_news_title') : '';
$recent_news_description = get_field('recent_news_description') ? get_field('recent_news_description') : '';
$qca_boys_heading = get_field('qca_boys_heading') ? get_field('qca_boys_heading') : '';
$qca_girls_heading = get_field('qca_girls_heading') ? get_field('qca_girls_heading') : '';
$support_qca_heading = get_field('support_qca_heading') ? get_field('support_qca_heading') : '';
$support_qca_title = get_field('support_qca_title') ? get_field('support_qca_title') : '';


$qca_ellipse_image = get_field('qca_ellipse_image');
$qca_ellipse_image_url = "";
if ($qca_ellipse_image && is_array($qca_ellipse_image) && isset($qca_ellipse_image['url'])) {
    $qca_ellipse_image_url = $qca_ellipse_image['url'];
}

$boys_site_url = get_field('boys_site_url', 'option');
$girls_site_url = get_field('girls_site_url', 'option');

?>

<section class="hero-main" style="background-image: url('<?php echo $home_page_image_url ?>');">
    <div class="container">
        <div class="row  ">
            <div class="col-md-12">
                <div class="hero-content text-center">
                    <h1 data-aos="zoom-in-down" data-aos-delay="300"><?php echo $heading_text ?>
                        <span data-aos="zoom-in-down" data-aos-delay="300"><?php echo $heading_text_styled ?>
                            <br></span><?php echo $heading_text_second ?>
                        <span><?php echo $heading_text_styled_second ?></span>
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-card">
        <div class="row px-0 mx-0 align-items-end">
            <div class="col-md-3 d-md-block d-none px-0 mx-0">
                <div class="recent-news text-center" style="background-image: url('<?php echo $recent_news_image_url ?>');">
                    <div class="recent-news-wrap">
                        <span data-aos="zoom-in-down" data-aos-delay="450" class=""><?php echo $recent_news_heading ?></span>
                        <h4 data-aos="zoom-in-down" data-aos-delay="450"><?php echo $recent_news_title ?></h4>
                        <p data-aos="zoom-in-down" data-aos-delay="450"><?php echo $recent_news_description ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 px-0 mx-0">
                <div class="qca-boys qca-items-boys">
                    <a href="<?php echo $boys_site_url ?>" target="_blank"><?php echo $qca_boys_heading ?></a>
                </div>
            </div>
            <div class="col-md-3 col-6 px-0 mx-0">
                <div class="qca-boys qca-items-girls">
                    <a href="<?php echo $girls_site_url ?>" target="_blank"><?php echo $qca_girls_heading ?></a>
                </div>
            </div>
            <div class="col-md-3 d-md-block d-none px-0 mx-0">
                <div class="qca-support qca-items-border">
                    <span data-aos="zoom-in-down" data-aos-delay="450" class=""><?php echo $support_qca_heading ?></span>
                    <h3 data-aos="zoom-in-down" data-aos-delay="450"><?php echo $support_qca_title ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ellipse-wrapper mx-auto text-center" data-aos="zoom-in-down" data-aos-delay="450">
    <a href=""><img src="<?php echo $qca_ellipse_image_url ?>" alt=""></a>
</div>