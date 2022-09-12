<!-- Testimonial Section Start -->
<?php if (true == get_theme_mod('testomonial_switch_setting', 'on')) : ?>
    <section id="testimonial" class="testimonial section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">

                        <?php
                        $settings = get_theme_mod('testomonial_repeater_settings');
                        if ($settings) :
                            foreach ($settings as $setting) :  ?>

                                <div class="item">
                                    <div class="testimonial-item">
                                        <div class="img-thumb">
                                            <img src="<?php echo $setting['testomonial_image'] ?>" height="100px" alt="">
                                        </div>
                                        <div class="info">
                                            <h2><a href="#"><?php echo $setting['testomonial_name'] ?></a></h2>
                                            <h3><a href="#"><?php echo $setting['testomonial_posetion'] ?></a></h3>
                                        </div>
                                        <div class="content">
                                            <p class="description"><?php echo $setting['testomonial_desc'] ?> </p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>



                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Testimonial Section End -->