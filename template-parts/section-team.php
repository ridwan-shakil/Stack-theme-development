<!-- Team Section Start -->
<?php if (true == get_theme_mod('team_switch_setting', 'on')) : ?>
    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('team_title'), 'stack'); ?></h2>
                <p><?php echo esc_html(get_theme_mod('team_desc'), 'stack'); ?></p>
            </div>
            <div class="row">
                <?php
                $members = get_theme_mod('team_repeater_settings');
                if ($members) :
                    foreach ($members as $member) :
                ?>
                        <div class="<?php echo esc_attr(get_theme_mod('team_column_setting'), 'stack'); ?>">
                            <!-- Team Item Starts -->
                            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
                                <div class="team-img">
                                    <img class="img-fluid" src="<?php echo $member['team_image']['url']; ?>" alt="">
                                    <div class="team-overlay">
                                        <div class="overlay-social-icon text-center">
                                            <ul class="social-icons">
                                                <!-- Facebook  -->
                                                <?php if ($member['team_facebook']) :   ?>
                                                    <li><a href="<?php echo $member['team_facebook']; ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                                                <?php endif ?>
                                                <!-- twitter  -->
                                                <?php if ($member['team_twitter']) :   ?>
                                                    <li><a href="<?php echo $member['team_twitter']; ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                                                <?php endif ?>
                                                <!-- instagram  -->
                                                <?php if ($member['team_instagram']) :   ?>
                                                    <li><a href="<?php echo $member['team_instagram']; ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                                                <?php endif ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-text">
                                    <h3><a href="#"><?php echo $member['team_subtitle']; ?></a></h3>
                                    <p><?php echo $member['team_content']; ?></p>
                                </div>
                            </div>
                            <!-- Team Item Ends -->
                        </div>

                <?php endforeach;
                endif; ?>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Team Section End -->