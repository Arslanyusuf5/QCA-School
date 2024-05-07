<?php

$school_grads_image = get_field('school_grads_image');
if ($school_grads_image && is_array($school_grads_image) && isset($school_grads_image['url'])) {
    $school_grads_image_url = $school_grads_image['url'];
} else {
    $school_grads_image_url = '';
}

$school_grads_description = get_field('school_grads_description');
$school_grads_paragraph = get_field('school_grads_paragraph');

?>

<section class="school__grads">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 p-0 d-lg-block d-none">
                <div class="background__color h-100">
                </div>
            </div>
            <div class="col-lg-7 col-12 p-0">
                <div class="grads__wrapper" style="background-image: url('<?php echo $school_grads_image_url; ?>');">
                    <div class="overlay"></div>
                    <div class="grads__content">
                        <?php if ($school_grads_description) { ?>
                            <h6><?php echo $school_grads_description; ?></h6>
                        <?php } ?>
                        <?php if ($school_grads_paragraph) { ?>
                            <p><?php echo $school_grads_paragraph; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>