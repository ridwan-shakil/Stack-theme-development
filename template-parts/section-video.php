<!-- Start Video promo Section -->
<?php if (true == get_theme_mod('video_switch_setting', 'on')) : ?>
    <section class="video-promo section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <a href="<?php echo get_theme_mod('video_url_setting'); ?>" class="video-popup"><i class="lni-film-play"></i></a>




                        <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms"><?php echo get_theme_mod('video_text'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- End Video Promo Section -->