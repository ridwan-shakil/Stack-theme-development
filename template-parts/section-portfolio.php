<!-- Portfolio Section -->
<?php if (true == get_theme_mod('portfolio_switch_setting', 'on')) : ?>
    <section id="portfolios" class="section-padding">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('portfolio_heading') ?></h2>
                <p><?php echo get_theme_mod('portfolio_desc') ?></p>
            </div>

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row">

                <?php $settings = get_theme_mod('portfolio_repeater'); ?>
                <?php if ($settings) :  ?>
                    <?php foreach ($settings as $setting) : ?>

                        <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
                            <div class="portfolio-item">
                                <div class="shot-item">
                                    <img src="<?php echo $setting['portfolio_small_img'] ?>" alt="" />
                                    <div class="single-content">
                                        <div class="fancy-table">
                                            <div class="table-cell">
                                                <div class="zoom-icon">
                                                    <a class="lightbox" href="<?php echo $setting['portfolio_big_img'] ?>"><i class="lni-eye item-icon"></i></a>
                                                </div>
                                                <a href=""><?php echo $setting['portfolio_title'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- Container Ends -->
    </section>
<?php endif; ?>
<!-- Portfolio Section Ends -->