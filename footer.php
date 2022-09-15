<!-- Copyright Section Start -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 col-xs-12">
                <!-- <div class="footer-logo"> -->
                <?php the_custom_logo(); ?>
                <!-- </div> -->
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="social-icon text-center">
                    <!-- facebook  -->
                    <?php if (get_theme_mod('footer_fb_url')) {
                    ?>
                        <a class="facebook" href="<?php echo esc_url(get_theme_mod('footer_fb_url'), 'stack'); ?>"><i class="lni-facebook-filled"></i></a>
                    <?php
                    } ?>
                    <!-- twitter  -->
                    <?php if (get_theme_mod('footer_twitter_url')) {
                    ?>
                        <a class="twitter" href="<?php echo esc_url(get_theme_mod('footer_twitter_url'), 'stack'); ?>"><i class="lni-twitter-filled"></i></a>
                    <?php
                    } ?>
                    <!-- instagram  -->
                    <?php if (get_theme_mod('footer_insta_url')) {
                    ?>
                        <a class="instagram" href="<?php echo esc_url(get_theme_mod('footer_insta_url'), 'stack'); ?>"><i class="lni-instagram-filled"></i></a>
                    <?php
                    } ?>
                    <!-- linkedin  -->
                    <?php if (get_theme_mod('footer_linkedin_url')) {
                    ?>
                        <a class="linkedin" href="<?php echo esc_url(get_theme_mod('footer_linkedin_url'), 'stack'); ?>"><i class="lni-linkedin-filled"></i></a>
                    <?php
                    } ?>


                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-xs-12">
                <?php echo get_theme_mod('copyright_setting'); ?>
            </div>
        </div>
    </div>
</div>
<!-- Copyright Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<!-- <div id="preloader">
    <div class="loader" id="loader-1"></div>
</div> -->
<!-- End Preloader -->


<?php wp_footer() ?>
</body>

</html>