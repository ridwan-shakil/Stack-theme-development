<!-- Pricing section Start -->
<?php if (true == get_theme_mod('pricing_switch_setting', 'on')) : ?>
    <section id="pricing" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('pricing_heading') ?></h2>
                <p><?php echo get_theme_mod('pricing_desc') ?></p>
            </div>
            <!-- <div class="row"> -->
            <!-- <?php // $settings = get_theme_mod('pricing_repeater_settings'); 
                    ?>
                <?php //if ($settings) : 
                ?>
                    <?php //foreach ($settings as $setting) : 
                    ?>

                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
                                <div class="title">
                                    <h3><?php //echo $setting['pricing_title'] 
                                        ?></h3>
                                </div>
                                <div class="pricing-header">
                                    <p class="price-value"><?php //echo $setting['pricing_currency'] . $setting['pricing_value'] 
                                                            ?><span>/<?php //echo $setting['pricing_duration'] 
                                                                        ?></span></p>
                                </div>
                                <ul class="description">
                                    <li>Business Analyzing</li>
                                    <li>24/7 Tech Suport</li>
                                    <li>Operational Excellence</li>
                                    <li>Business Idea Ready</li>
                                    <li>2 Database</li>
                                    <li>Customer Support</li>
                                </ul>
                                <button class="btn btn-common">Get It</button>
                            </div>
                        </div>

                    <?php // endforeach; 
                    ?>
                <?php // endif; 
                ?> -->
            <!-- </div> -->


            <div class="row">
                <!-- Basic  -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInLeft animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo get_theme_mod('basic_title') ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo get_theme_mod('basic_currency') . get_theme_mod('basic_value') ?><span>/<?php echo get_theme_mod('basic_duration') ?></span></p>
                        </div>
                        <?php $multicheck_value = get_theme_mod('basic_featurs'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <button class="btn btn-common"><?php echo get_theme_mod('basic_btn_txt') ?></button>
                    </div>
                </div>
                <!-- professonal  -->
                <div class="col-lg-4 col-md-6 col-xs-12 active">
                    <div class="table wow fadeInUp animated" id="active-tb" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo get_theme_mod('professonal_title') ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo get_theme_mod('professonal_currency') . get_theme_mod('professonal_value') ?><span>/ <?php echo get_theme_mod('professonal_duration') ?></span></p>
                        </div>
                        <?php $multicheck_value = get_theme_mod('professonal_featurs'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <button class="btn btn-common"><?php echo get_theme_mod('professonal_btn_txt') ?></button>
                    </div>
                </div>
                <!-- Expert  -->
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table wow fadeInRight animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 1.2s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="title">
                            <h3><?php echo get_theme_mod('Expert_title') ?></h3>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value"><?php echo get_theme_mod('Expert_currency') . get_theme_mod('Expert_value') ?><span>/ <?php echo get_theme_mod('Expert_duration') ?></span></p>
                        </div>
                        <?php $multicheck_value = get_theme_mod('Expert_featurs'); ?>
                        <?php if (!empty($multicheck_value)) : ?>
                            <ul class="description">
                                <?php foreach ($multicheck_value as $checked_value) : ?>
                                    <li><?php echo $checked_value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <button class="btn btn-common"><?php echo get_theme_mod('Expert_btn_txt') ?></button>
                    </div>
                </div>
            </div>



        </div>
    </section>
<?php endif; ?>
<!-- Pricing Table Section End -->