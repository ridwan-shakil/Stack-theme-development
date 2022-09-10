<?php if (true == get_theme_mod('skills_switch_setting', 'on')) : ?>
    <div class="skill-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                    <img class="img-fluid" src="<?php echo get_theme_mod('skills_image') ?>" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12 info wow fadeInRight" data-wow-delay="0.3s">
                    <div class="site-heading">
                        <h2 class="section-title"><?php echo get_theme_mod('skills_heading'); ?></span></h2>
                        <p><?php echo get_theme_mod('skills_desc'); ?>
                        </p>
                    </div>
                    <div class="skills-section">
                        <!-- Progress Bar Start -->
                        <?php $skills = get_theme_mod('skills_repeater'); ?>
                        <?php if ($skills) : ?>
                            <?php foreach ($skills as $skill) : ?>

                                <div class="progress-box">
                                    <h5><?php echo $skill['skill_title']; ?><span class="pull-right"><?php echo " " . $skill['skill_level']; ?>%</span></h5>
                                    <div class="progress" style="opacity: 1; left: 0px;">
                                        <div class="progress-bar" role="progressbar" data-width="87" style="width: <?php echo $skill['skill_level']; ?>%;"></div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- End Progressbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>