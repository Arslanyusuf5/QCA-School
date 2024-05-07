<?php

    $qca_support_image = get_field('qca_support_image');
    if($qca_support_image && is_array($qca_support_image) && isset($qca_support_image['url'])){
        $qca_support_image_url = $qca_support_image['url'];
    }else{
        $qca_support_image_url = '';
    }

    $qca_heading_span_one = get_field('qca_heading_span_one');
    $qca_heading_span_two = get_field('qca_heading_span_two');
    $qca_heading_span_three = get_field('qca_heading_span_three');
    $qca_heading_span_four = get_field('qca_heading_span_four');

?>
<section class="support-qca" style="background:  url(<?php echo $qca_support_image_url; ?>);">
    <div class="container-fluid">
        <div class="section-padding">
            <div class="row">
                <div class="col-xxl-8 col-xl-7 col-lg-6 my-auto">
                    <div class="title-wrap">
                        <h2><span><?php echo $qca_heading_span_one ?></span> <?php echo $qca_heading_span_two ?><br>
                        <?php echo $qca_heading_span_three ?><span><?php echo $qca_heading_span_four ?></span></h2>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6">
                    <div class="form-wrap">
                        <form action="">
                            <h5>Enter Your Details</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name-text" aria-describedby="nametext" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reasons" aria-describedby="reasons" placeholder="Reasons">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="donate-amount" aria-describedby="donateamount" placeholder="Enter Donation amount">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone-no" aria-describedby="phoneno" placeholder="Phone No">
                            </div>

                            <div class="donation-checkboxes ">
                                <h5>Choose a donation type</h5>
                                <div class="form-check-wrapper d-flex">
                                    <div class="col-lg-6 form-check-radio">
                                        <input class="form-check-input" type="radio" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Monthly
                                        </label>
                                    </div>
                                    <div class="col-lg-6 form-check-radio">
                                        <input class="form-check-input" type="radio" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            One Time
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <p>As a 501(c)(3) Non-Profit Organization, your donations to Qalam Collegiate Academy are tax-exempt under section 170 of the Internal Revenue Code.</p>
                            <div class="donation-icons d-flex justify-content-between align-items-center">
                                <img src="<?php echo get_template_directory_uri() . '/images/girls-images/AmEx-Logo.png'; ?>" alt="">
                                <img src="<?php echo get_template_directory_uri() . '/images/girls-images/Visa-Logo.png'; ?>" alt="">
                                <img src="<?php echo get_template_directory_uri() . '/images/girls-images/Group.png'; ?>" alt="">
                                <img src="<?php echo get_template_directory_uri() . '/images/girls-images/Icons.png'; ?>" alt="">
                            </div>
                            <a href="#" class="btn">Donate</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>