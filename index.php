<?php get_header() ?>
<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="contents text-center">
          <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod('banner_heading') ?></h2>
          <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
            <?php
            if (get_theme_mod('banner_button_text')) :
            ?>
              <a href="<?php echo get_theme_mod('banner_button_url') ?>" class="btn btn-common banner-btn"><?php echo get_theme_mod('banner_button_text') ?></a>

            <?php endif; ?>
          </div>
        </div>
        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
          <img class="img-fluid" src="<?php echo get_theme_mod('banner_image') ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->
<?php get_template_part('template-parts/section', 'about'); ?>
<?php get_template_part('template-parts/section', 'services'); ?>
<?php get_template_part('template-parts/section', 'video'); ?>
<?php get_template_part('template-parts/section', 'team'); ?>
<?php get_template_part('template-parts/section', 'counter'); ?>
<?php get_template_part('template-parts/section', 'pricing'); ?>
<?php get_template_part('template-parts/section', 'skill'); ?>
<?php get_template_part('template-parts/section', 'portfolio'); ?>
<?php get_template_part('template-parts/section', 'testomonial'); ?>
<?php get_template_part('template-parts/section', 'blog'); ?>
<?php get_template_part('template-parts/section', 'clients'); ?>
<?php get_template_part('template-parts/section', 'contact'); ?>



<?php get_footer() ?>