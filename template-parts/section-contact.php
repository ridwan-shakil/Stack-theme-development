<!-- Contact Section Start -->
<?php if (true == get_theme_mod('contact_switch_setting', 'on')) : ?>
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-block">
                        <!-- contact form  -->
                        <?php echo do_shortcode(''); ?>
                    </div>
                </div>
                <!-- contact section right part  -->
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-right-area wow fadeIn">
                        <div class="contact-title">
                            <h1><?php echo get_theme_mod('contact_heading'); ?></h1>
                            <p><?php echo get_theme_mod('contact_desc'); ?></p>
                        </div>
                        <h2><?php echo get_theme_mod('contact_title'); ?></h2>
                        <div class="contact-right">
                            <?php
                            $contacts = get_theme_mod('contact_repeater');
                            if ($contacts) :
                                foreach ($contacts as $contact) :
                            ?>

                                    <div class="single-contact">
                                        <div class="contact-icon">
                                            <i class="<?php echo $contact['contact_logo'] ?>"></i>
                                        </div>
                                        <p><?php echo $contact['contact_info'] ?></p>
                                    </div>

                            <?php endforeach;
                            endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Contact Section End -->