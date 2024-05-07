<section class="qca__academy__block">
    <div class="video__content__image">
        <div class="overlay__on__image">
            <img src="<?php echo get_template_directory_uri() . '/images/qca-mosque-img.jpg' ?>" alt="">
        </div>
        <div class="overlay__content">
            <div class="overlay__content__wrap">
                <h2 data-aos="zoom-in-down" data-aos-delay="300">
                    The Future Of Islamic Schools
                </h2>
                <a data-aos="zoom-out" data-aos-delay="400" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <img src="<?php echo get_template_directory_uri() . '/images/play-button-icon.png'
                                ?>" alt="">
                </a>
                <p data-aos="zoom-in-down" data-aos-delay="400">
                    Qalam Collegiate Academy - Enrollment Opens January 1st, 2024
                </p>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <iframe id="videoFrame" width="424" height="238" src="https://www.youtube.com/embed/bMRip-X5xgU" title="Qalam Collegiate Academy" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <script>
        // When the modal is closed, reset the src attribute of the iframe to stop the video playback
        $('#staticBackdrop').on('hidden.bs.modal', function() {
            var iframe = document.getElementById('videoFrame');
            iframe.src = iframe.src;
        });
    </script>

</section>