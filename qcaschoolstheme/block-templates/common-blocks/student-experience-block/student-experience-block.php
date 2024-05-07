<?php

$std_exp_heading = get_field('std_exp_heading');
$std_exp_number = get_field('std_exp_number');
$std_exp_heading_span = get_field('std_exp_heading_span');
$std_exp_description = get_field('std_exp_description');

$std_exp_image_one = get_field('std_exp_image_one');
if($std_exp_image_one && isset($std_exp_image_one['url'])){
    $std_exp_image_one_url = $std_exp_image_one['url'];
}else{
    $std_exp_image_one_url = '';
}

$std_exp_image_two = get_field('std_exp_image_two');
if($std_exp_image_two && isset($std_exp_image_two['url'])){
    $std_exp_image_two_url = $std_exp_image_two['url'];
}else{
    $std_exp_image_two_url = '';
}

$std_exp_image_three = get_field('std_exp_image_three');
if($std_exp_image_three && isset($std_exp_image_three['url'])){
    $std_exp_image_three_url = $std_exp_image_three['url'];
}else{
    $std_exp_image_three_url = '';
}



?>

<section class="student__experience">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="content__wrap">
                <?php if($std_exp_number) { ?>
                    <h3><?php echo $std_exp_number ?></h3>
                    <?php } ?>
                    <?php if($std_exp_heading) { ?>
                    <h4><?php echo $std_exp_heading ?> 
                        <br>
                        <?php if($std_exp_heading_span) { ?>
                        <span>
                            <?php echo $std_exp_heading_span ?>
                        </span>
                        <?php } ?>
                    </h4>
                    <?php } ?>
                    <?php if($std_exp_description) { ?>
                    <p><?php echo $std_exp_description ?></p>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="images__wrapper">
                    <div class="row">
                        <div class="col-lg-6 p-0 m-0">
                            <div class="single__image p-3">
                                <img src="<?php echo $std_exp_image_one_url ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 m-0">
                            <div class="images__corner">
                                <div class="image__with__right__corner p-3">
                                    <img src="<?php echo $std_exp_image_two_url ?>" alt="">
                                </div>
                                <div class="image__with__left__corner p-3">
                                    <img src="<?php echo $std_exp_image_three_url ?>" alt="">                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>