<?php

$qca_programms_heading = get_field('qca_programms_heading') ? get_field('qca_programms_heading') : '';
$courses_tab_title = get_field('courses_tab_title') ? get_field('courses_tab_title') : '';
$courses_tabs = get_field('courses_tabs') ? get_field('courses_tabs') : '';
$admissions_tab_title = get_field('admissions_tab_title') ? get_field('admissions_tab_title') : '';
$admission_tabs = get_field('admission_tabs') ? get_field('admission_tabs') : '';

?>

<section id="Courses" class="qca-programms">
    <div class="qca-info">
        <div class="container">
            <div class="row">
                <div class="col pt-4" data-aos="zoom-in-down" data-aos-delay="300">
                    <div class="d-flex justify-content-center">
                        <h2><?php echo $qca_programms_heading ?></h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <svg width="178" height="10" viewBox="0 0 178 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector 1" d="M0.433105 8.41908C48.9669 0.330093 116.15 -0.344031 177.267 8.41908" stroke="#0089E8" stroke-width="2.24694" />
                        </svg>
                    </div>
                    <ul data-aos="zoom-in-down" data-aos-delay="300" class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo $courses_tab_title ?></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?php echo $admissions_tab_title ?></button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane pt-4 pb-4 fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="swiper swiper-container mySwiperQCAProgramms">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (have_rows('courses_tabs')) :
                                        while (have_rows('courses_tabs')) : the_row();

                                            $course_image = get_sub_field('course_image');
                                            $course_image_url = "";
                                            if ($course_image && is_array($course_image) && isset($course_image['url'])) {
                                                $course_image_url = $course_image['url'];
                                            }

                                            $course_title = get_sub_field('course_title') ? get_sub_field('course_title') : '';
                                            $course_description = get_sub_field('course_description') ? get_sub_field('course_description') : '';

                                            $course_button = get_sub_field('course_button') ? get_sub_field('course_button') : '';
                                            $course_button_url = isset($course_button['url']) ? $course_button['url'] : '';
                                            $course_button_target = isset($course_button['target']) ? $course_button['target'] : '';
                                            $course_button_title = isset($course_button['title']) ? $course_button['title'] : '';
                                    ?>
                                            <div class="swiper-slide" data-aos="zoom-in-down" data-aos-delay="400">
                                                <div class="card">
                                                    <img class="card-img-top" src="<?php echo $course_image_url ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $course_title ?></h5>
                                                        <p class="card-text"><?php echo $course_description ?></p>
                                                        <div class="card-button">
                                                            <a href="<?php echo $course_button_url ?>" <?php if (!empty($course_button_target)) { ?> target="<?php echo $course_button_target ?>" <?php } ?> class="btn btn-primary"><?php echo $course_button_title ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endwhile;
                                    else :
                                        echo 'repeater fields not found';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="swiper-navigations">
                                <div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M17.5 9.99998C17.5 10.1657 17.4342 10.3247 17.3169 10.4419C17.1997 10.5591 17.0408 10.625 16.875 10.625H4.6336L9.19219 15.1828C9.25026 15.2409 9.29632 15.3098 9.32775 15.3857C9.35918 15.4615 9.37535 15.5429 9.37535 15.625C9.37535 15.7071 9.35918 15.7884 9.32775 15.8643C9.29632 15.9402 9.25026 16.0091 9.19219 16.0672C9.13412 16.1252 9.06518 16.1713 8.98931 16.2027C8.91344 16.2342 8.83213 16.2503 8.75 16.2503C8.66788 16.2503 8.58656 16.2342 8.51069 16.2027C8.43482 16.1713 8.36588 16.1252 8.30782 16.0672L2.68282 10.4422C2.62471 10.3841 2.57861 10.3152 2.54715 10.2393C2.5157 10.1634 2.49951 10.0821 2.49951 9.99998C2.49951 9.91785 2.5157 9.83652 2.54715 9.76064C2.57861 9.68477 2.62471 9.61584 2.68282 9.55779L8.30782 3.93279C8.42509 3.81552 8.58415 3.74963 8.75 3.74963C8.91586 3.74963 9.07492 3.81552 9.19219 3.93279C9.30947 4.05007 9.37535 4.20913 9.37535 4.37498C9.37535 4.54083 9.30947 4.69989 9.19219 4.81717L4.6336 9.37498H16.875C17.0408 9.37498 17.1997 9.44083 17.3169 9.55804C17.4342 9.67525 17.5 9.83422 17.5 9.99998Z" fill="#0089E8" />
                                    </svg></div>
                                <div class="swiper-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M2.5 9.99998C2.5 10.1657 2.56584 10.3247 2.68305 10.4419C2.80027 10.5591 2.95924 10.625 3.125 10.625H15.3664L10.8078 15.1828C10.7497 15.2409 10.7037 15.3098 10.6723 15.3857C10.6408 15.4615 10.6246 15.5429 10.6246 15.625C10.6246 15.7071 10.6408 15.7884 10.6723 15.8643C10.7037 15.9402 10.7497 16.0091 10.8078 16.0672C10.8659 16.1252 10.9348 16.1713 11.0107 16.2027C11.0866 16.2342 11.1679 16.2503 11.25 16.2503C11.3321 16.2503 11.4134 16.2342 11.4893 16.2027C11.5652 16.1713 11.6341 16.1252 11.6922 16.0672L17.3172 10.4422C17.3753 10.3841 17.4214 10.3152 17.4528 10.2393C17.4843 10.1634 17.5005 10.0821 17.5005 9.99998C17.5005 9.91785 17.4843 9.83652 17.4528 9.76064C17.4214 9.68477 17.3753 9.61584 17.3172 9.55779L11.6922 3.93279C11.5749 3.81552 11.4158 3.74963 11.25 3.74963C11.0841 3.74963 10.9251 3.81552 10.8078 3.93279C10.6905 4.05007 10.6246 4.20913 10.6246 4.37498C10.6246 4.54083 10.6905 4.69989 10.8078 4.81717L15.3664 9.37498H3.125C2.95924 9.37498 2.80027 9.44083 2.68305 9.55804C2.56584 9.67525 2.5 9.83422 2.5 9.99998Z" fill="#0089E8" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="tab-pane pt-4 pb-4 fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="swiper swiper-container mySwiperQCAProgramms">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (have_rows('admission_tabs')) :
                                        while (have_rows('admission_tabs')) : the_row();
                                            $admission_image = get_sub_field('admission_image');
                                            $admission_image_url = "";
                                            if ($admission_image && is_array($admission_image) && isset($admission_image['url'])) {
                                                $admission_image_url = $admission_image['url'];
                                            }
                                            $admission_title = get_sub_field('admission_title') ? get_sub_field('admission_title') : '';
                                            $admission_description = get_sub_field('admission_description') ? get_sub_field('admission_description') : '';
                                            $admission_button = get_sub_field('admission_button') ? get_sub_field('admission_button') : '';
                                            $admission_button_url = isset($admission_button['url']) ? $admission_button['url'] : '';
                                            $admission_button_target = isset($admission_button['target']) ? $admission_button['target'] : '';
                                            $admission_button_title = isset($admission_button['title']) ? $admission_button['title'] : '';
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="card">
                                                    <img class="card-img-top" src="<?php echo $admission_image_url ?>" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $admission_title ?></h5>
                                                        <p class="card-text"><?php echo $admission_description ?></p>
                                                        <div class="card-button">
                                                            <a href="<?php echo $admission_button_url ?>" <?php if (!empty($admission_button_target)) { ?> target="<?php echo $admission_button_target ?>" <?php } ?> class="btn btn-primary"><?php echo $admission_button_title ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endwhile;
                                    else :
                                        echo 'repeater fields not found';
                                    endif;
                                    ?>
                                </div>
                                <div class="swiper-navigations">
                                    <div class="swiper-button-prev"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M17.5 9.99998C17.5 10.1657 17.4342 10.3247 17.3169 10.4419C17.1997 10.5591 17.0408 10.625 16.875 10.625H4.6336L9.19219 15.1828C9.25026 15.2409 9.29632 15.3098 9.32775 15.3857C9.35918 15.4615 9.37535 15.5429 9.37535 15.625C9.37535 15.7071 9.35918 15.7884 9.32775 15.8643C9.29632 15.9402 9.25026 16.0091 9.19219 16.0672C9.13412 16.1252 9.06518 16.1713 8.98931 16.2027C8.91344 16.2342 8.83213 16.2503 8.75 16.2503C8.66788 16.2503 8.58656 16.2342 8.51069 16.2027C8.43482 16.1713 8.36588 16.1252 8.30782 16.0672L2.68282 10.4422C2.62471 10.3841 2.57861 10.3152 2.54715 10.2393C2.5157 10.1634 2.49951 10.0821 2.49951 9.99998C2.49951 9.91785 2.5157 9.83652 2.54715 9.76064C2.57861 9.68477 2.62471 9.61584 2.68282 9.55779L8.30782 3.93279C8.42509 3.81552 8.58415 3.74963 8.75 3.74963C8.91586 3.74963 9.07492 3.81552 9.19219 3.93279C9.30947 4.05007 9.37535 4.20913 9.37535 4.37498C9.37535 4.54083 9.30947 4.69989 9.19219 4.81717L4.6336 9.37498H16.875C17.0408 9.37498 17.1997 9.44083 17.3169 9.55804C17.4342 9.67525 17.5 9.83422 17.5 9.99998Z" fill="#0089E8" />
                                        </svg></div>
                                    <div class="swiper-button-next"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M2.5 9.99998C2.5 10.1657 2.56584 10.3247 2.68305 10.4419C2.80027 10.5591 2.95924 10.625 3.125 10.625H15.3664L10.8078 15.1828C10.7497 15.2409 10.7037 15.3098 10.6723 15.3857C10.6408 15.4615 10.6246 15.5429 10.6246 15.625C10.6246 15.7071 10.6408 15.7884 10.6723 15.8643C10.7037 15.9402 10.7497 16.0091 10.8078 16.0672C10.8659 16.1252 10.9348 16.1713 11.0107 16.2027C11.0866 16.2342 11.1679 16.2503 11.25 16.2503C11.3321 16.2503 11.4134 16.2342 11.4893 16.2027C11.5652 16.1713 11.6341 16.1252 11.6922 16.0672L17.3172 10.4422C17.3753 10.3841 17.4214 10.3152 17.4528 10.2393C17.4843 10.1634 17.5005 10.0821 17.5005 9.99998C17.5005 9.91785 17.4843 9.83652 17.4528 9.76064C17.4214 9.68477 17.3753 9.61584 17.3172 9.55779L11.6922 3.93279C11.5749 3.81552 11.4158 3.74963 11.25 3.74963C11.0841 3.74963 10.9251 3.81552 10.8078 3.93279C10.6905 4.05007 10.6246 4.20913 10.6246 4.37498C10.6246 4.54083 10.6905 4.69989 10.8078 4.81717L15.3664 9.37498H3.125C2.95924 9.37498 2.80027 9.44083 2.68305 9.55804C2.56584 9.67525 2.5 9.83422 2.5 9.99998Z" fill="#0089E8" />
                                        </svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>