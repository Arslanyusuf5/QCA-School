<?php
    $hero_image = get_field('hero_image');
    $image_url = "";
    if ($hero_image && is_array($hero_image) && isset($hero_image['url'])) {
        $image_url = $hero_image['url'];
    }

    
    $hero_title_text_one = get_field('hero_title_text_one') ? get_field('hero_title_text_one') : '';
    $hero_title_text_span = get_field('hero_title_text_span') ? get_field('hero_title_text_span') : '';
    $hero_title_text_two = get_field('hero_title_text_two') ? get_field('hero_title_text_two') : '';

    $hero_button = get_field('hero_button');
    $hero_button_url = isset($hero_button['url']) ? $hero_button['url'] : '';
    $hero_button_target = isset($hero_button['target']) ? $hero_button['target'] : '';
    $hero_button_title = isset($hero_button['title']) ? $hero_button['title'] : '';
?>

<section id="hero-section" class="hero-section d-flex" style="background-image: url('<?php echo esc_url($image_url); ?>');">
    <div class="container">
        <h1><?php echo $hero_title_text_one; ?><br><span><?php echo $hero_title_text_span; ?></span> <?php echo $hero_title_text_two; ?></h1>
        <div class="text-center pt-5"><a href="<?php echo  $hero_button_url; ?>" <?php if(!empty($hero_button_target)) { ?>  target="<?php echo $hero_button_target ?>" <?php } ?> class="btn"><?php echo $hero_button_title; ?></a></div>
    </div>
</section>