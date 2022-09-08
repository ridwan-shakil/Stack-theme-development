<!-- Services Section Start -->

<?php if (true == get_theme_mod('show_service_section', true)) : ?>
    <section id="services" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title services-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('Services_title') ?></h2>
                <p><?php echo get_theme_mod('Services_desc') ?></p>
            </div>
            <div class="row">
                <!-- Services item -->
                <?php
                $services = get_theme_mod('services_repeater_settings');
                if ($services) :
                ?>
                    <?php foreach ($services as $service) :
                    ?>
                        <div class="<?php echo get_theme_mod('services_column_setting'); ?>">
                            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon">
                                    <i class="lni-pencil"></i>
                                </div>
                                <div class="services-content">
                                    <h3><a href="#"><?php echo $service['service_subtitle'] ?></a></h3>
                                    <p><?php echo $service['service_content'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    ?>
                <?php endif ?>

            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Services Section End -->