<!-- Feature Section Start -->
<div id="feature">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-wrapper">
                    <div>
                        <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s"><?php echo get_theme_mod('about_title_setting'); ?> </h2>
                        <p class="mb-4 about-desc"><?php echo get_theme_mod('about_desc_setting'); ?> </p>
                        <?php if (get_theme_mod('About_button_text')) : ?>
                            <a href="<?php echo get_theme_mod('About_button_url'); ?> " class="btn btn-common about-btn"><?php echo get_theme_mod('About_button_text'); ?> </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
                <div class="feature-thumb">

                    <?php $settings = get_theme_mod('abbout_repeater');
                    ?>

                    <div class="kirki-links">
                        <?php foreach ($settings as $fields) : ?>

                            <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class=" <?php // echo $fields['about_icon'];
                                                ?>"></i>
                                </div>
                                <div class="feature-content">
                                    <h3><?php echo $fields['about_subtitle']; ?></h3>
                                    <p> <?php echo $fields['about_content']; ?></p>
                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature Section End -->