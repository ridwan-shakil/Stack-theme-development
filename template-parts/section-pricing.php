<!-- Pricing section Start -->
<?php if (true == get_theme_mod('pricing_switch_setting', 'on')) : ?>
    <section id="pricing" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo esc_html(get_theme_mod('pricing_heading'), 'stack'); ?></h2>
                <p><?php echo esc_html(get_theme_mod('pricing_desc'), 'stack'); ?></p>
            </div>

            <div class="row">
                <!-- Basic  -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInLeft animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo esc_html(get_theme_mod('basic_title'), 'stack'); ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo esc_html(get_theme_mod('basic_currency') . get_theme_mod('basic_value'), 'stack'); ?><span>/<?php echo esc_html(get_theme_mod('basic_duration'), 'stack'); ?></span></p>
                        </div>
                        <?php $multicheck_value = esc_html(get_theme_mod('basic_featurs'), 'stack'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <button class="btn btn-common"><?php echo esc_html(get_theme_mod('basic_btn_txt'), 'stack'); ?></button>
                    </div>
                </div>
                <!-- professonal  -->
                <div class="col-lg-4 col-md-6 col-xs-12 active">
                    <div class="table wow fadeInUp animated" id="active-tb" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo esc_html(get_theme_mod('professonal_title'), 'stack'); ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo esc_html(get_theme_mod('professonal_currency') . get_theme_mod('professonal_value'), 'stack'); ?><span>/ <?php echo esc_html(get_theme_mod('professonal_duration'), 'stack'); ?></span></p>
                        </div>
                        <?php $multicheck_value = esc_html(get_theme_mod('professonal_featurs'), 'stack'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <button class="btn btn-common"><?php echo esc_html(get_theme_mod('professonal_btn_txt'), 'stack'); ?></button>
                    </div>
                </div>
                <!-- Expert  -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInRight animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo esc_html(get_theme_mod('Expert_title'), 'stack'); ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo esc_html(get_theme_mod('Expert_currency') . get_theme_mod('Expert_value'), 'stack'); ?><span>/ <?php echo esc_html(get_theme_mod('Expert_duration'), 'stack'); ?></span></p>
                        </div>
                        <?php $multicheck_value = esc_html(get_theme_mod('Expert_featurs'), 'stack'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <button class="btn btn-common"><?php echo esc_html(get_theme_mod('Expert_btn_txt'), 'stack'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Pricing Table Section End -->