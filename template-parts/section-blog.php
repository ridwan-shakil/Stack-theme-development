<!-- Blog Section -->
<?php if (true == get_theme_mod('blog_switch_setting', 'on')) : ?>
    <section id="blog" class="section-padding">
        <!-- Container Starts -->
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('blog_heading') ?></h2>
                <p><?php echo get_theme_mod('blog_desc') ?></p>
            </div>
            <div class="row">
                <?php
                $postnumber = get_theme_mod('blog_per_page');
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page'      => $postnumber,
                );
                $query = new WP_Query($args);
                ?>
                <?php if ($query->have_posts()) : ?>

                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 blog-item">
                            <!-- Blog Item Starts -->
                            <div class="blog-item-wrapper wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="blog-item-img">
                                    <a href="single-post.html">
                                        <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-item-text">
                                    <h3>
                                        <a href="single-post.html"><?php the_title() ?></a>
                                    </h3>
                                    <p>
                                        <?php the_excerpt() ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-common btn-rm">Read More</a>
                                </div>
                            </div>
                            <!-- Blog Item Wrapper Ends-->
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

                <?php wp_reset_query(); ?>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- blog Section End -->