<?php

$accreditation_hero_image = get_field('accreditation_hero_image');
$accreditation_hero_image_url = "";
if ($accreditation_hero_image && is_array($accreditation_hero_image) && isset($accreditation_hero_image['url'])) {
    $accreditation_hero_image_url = $accreditation_hero_image['url'];
}


$accreditation_title = get_field('accreditation_title') ? get_field('accreditation_title') : "";

$cognia_image = get_field('cognia_image');
$cognia_image_url = "";
if ($cognia_image && is_array($cognia_image) && isset($cognia_image['url'])) {
    $cognia_image_url = $cognia_image['url'];
}

$isna_image = get_field('isna_image');
$isna_image_url = "";
if ($isna_image && is_array($isna_image) && isset($isna_image['url'])) {
    $isna_image_url = $isna_image['url'];
}

$accreditation_description = get_field('accreditation_description') ? get_field('accreditation_description') : "";

?>

<section class="accreditation" style="background-image: url('<?php echo $accreditation_hero_image_url; ?>');">
    <div class="container">
        <div class="accreditation__wrapper">
            <h1 class="acc__title"><?php echo $accreditation_title; ?></h1>
            <div class="accreditation__content">
                <div class="row row__wrapper">
                    <div class="col-xl-5 col-12">
                        <div class="acc__images__wrap">
                            <div class="image__cognia">
                                <img src="<?php echo $cognia_image_url; ?>" alt="">
                            </div>
                            <div class="image__isna">
                                <img src="<?php echo $isna_image_url; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-12">
                        <div class="accreditation__text">
                            <p class="acc__description"><?php echo $accreditation_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>