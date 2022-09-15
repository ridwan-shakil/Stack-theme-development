<?php
/*
// Template Name: Home
*/
?>
<?php get_header() ?>
<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="contents text-center">
          <h2 class="head-title wow fadeInUp"><?php echo esc_html(get_theme_mod('banner_heading'), 'stack'); ?></h2>
          <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
            <?php
            if (get_theme_mod('banner_button_text')) :
            ?>
              <a href="<?php echo esc_url(get_theme_mod('banner_button_url'), 'stack'); ?>" class="btn btn-common banner-btn"><?php echo esc_html(get_theme_mod('banner_button_text'), 'stack'); ?></a>

            <?php endif; ?>
          </div>
        </div>
        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
          <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('banner_image'), 'stack'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->
</header>
<!-- Header Area wrapper End -->

<!-- Featurs / about section  -->
<?php get_template_part('template-parts/section', 'about'); ?>

<!-- Services section  -->
<?php get_template_part('template-parts/section', 'services'); ?>

<!-- Video section  -->
<?php get_template_part('template-parts/section', 'video'); ?>

<!-- Team section  -->
<?php get_template_part('template-parts/section', 'team'); ?>

<!-- Counter section  -->
<?php get_template_part('template-parts/section', 'counter'); ?>

<!-- Pricing section  -->
<?php get_template_part('template-parts/section', 'pricing'); ?>

<!-- Skill section  -->
<?php get_template_part('template-parts/section', 'skill'); ?>

<!-- Portfolio section  -->
<?php get_template_part('template-parts/section', 'portfolio'); ?>

<!-- Testomonial section  -->
<?php get_template_part('template-parts/section', 'testomonial'); ?>

<!-- Blog section  -->
<?php get_template_part('template-parts/section', 'blog'); ?>

<!-- Clients section  -->
<?php get_template_part('template-parts/section', 'clients'); ?>

<!-- Contact section  -->
<?php get_template_part('template-parts/section', 'contact'); ?>



<?php get_footer() ?>