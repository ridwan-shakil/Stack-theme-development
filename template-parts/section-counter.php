<!-- Counter Section Start -->
<?php if (true == get_theme_mod('counter_switch_setting', 'on')) : ?>
    <section id="counter" class="section-padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="row">
                        <?php
                        $settings = get_theme_mod('counter_repeater_settings');
                        ?>
                        <?php foreach ($settings as $setting) : ?>
                            <!-- Start counter -->
                            <div class="col-lg-3 col-md-6 col-xs-12">
                                <div class="counter-box wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon-o">
                                        <i class="<?php echo $setting['counter_icon'] ?>"></i>
                                    </div>
                                    <div class="fact-count">
                                        <h3><span class="counter"><?php echo $setting['counter_number'] ?></span></h3>
                                        <p><?php echo $setting['counter_title'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End counter -->
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Counter Section End -->