<!-- Contact Section Start -->
<?php if (true == get_theme_mod('contact_switch_setting', 'on')) : ?>
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="contact-block">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button">
                                        <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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