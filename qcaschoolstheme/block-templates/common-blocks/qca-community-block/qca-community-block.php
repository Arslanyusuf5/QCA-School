<?php

$community_image = get_field('community_image');
$community_image_url = '';
if ($community_image && is_array($community_image) && isset($community_image)) {
    $community_image_url = $community_image['url'];
}

$community_title = get_field('community_title');

$community_description = get_field('community_description');

$qca_text_alignment_for_different_block = get_field('qca_text_alignment_for_different_block');

?>

<section <?php if ($qca_text_alignment_for_different_block) { ?> class="community__block" <?php } else { ?> class="text-center other__blocks" <?php } ?> style="background-image: url('<?php echo $community_image_url ?>');">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php if ($community_title) { ?>
                    <h2><?php echo $community_title; ?></h2>
                <?php } ?>
                <?php if ($community_description) { ?>
                    <p><?php echo $community_description; ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>