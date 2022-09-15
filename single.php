<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>


  <!-- Header Section Start -->
  <header id="hero-area">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="<?php echo esc_url(home_url(), 'stack'); ?>" class="navbar-brand"><?php echo esc_url(the_custom_logo(), 'stack'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="lni-menu"></i>
        </button>
        <div class="collapse navbar-collapse menu-white" id="navbarCollapse">
          <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url(home_url(), 'stack'); ?>"><?php echo esc_html('Home', 'stack'); ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php the_permalink() ?>"><?php echo esc_html('single post', 'stack'); ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header Section End -->

  <!-- Page header Start -->
  <section class="page-header">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="breadcrumb-wrapper text-center">
            <h2><?php echo esc_html('Single Blog', 'stack'); ?></h2>
            <p><a href="<?php echo  esc_html(home_url(), 'stack'); ?>"><?php echo esc_html('Home', 'stack'); ?> </a>/ <?php the_title() ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Page header End -->

  <!-- Blog Section Start  -->
  <div id="blog-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-xs-12">
          <div class="blog-post">
            <div class="post-thumb">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="post-content">
              <h3><?php the_title() ?></h3>
              <?php the_content() ?>
            </div>
          </div>

          <!-- comment  -->
          <div class="blog-comment">
            <?php
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>

          </div>

        </div>

        <div class="col-lg-4 col-md-12 col-xs-12">
          <div class="widgets">
            <?php if (is_active_sidebar('right-sidebar')) {
              dynamic_sidebar('right-sidebar');
            } ?>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Blog Section End  -->
  <?php get_footer() ?>