<!-- Clients Section Start -->
<?php if (true == get_theme_mod('clients_switch_setting', 'on')) : ?>
    <div id="clients" class="section-padding bg-gray">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo get_theme_mod('clients_heading') ?></h2>
                <p><?php echo get_theme_mod('clients_desc') ?></p>
            </div>
            <div class="row text-align-">
                <?php
                $clients = get_theme_mod('clients_repeater');
                if ($clients) :
                    foreach ($clients as $client) :
                ?>
                        <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="client-item-wrapper">
                                <img class="img-fluid" src="<?php echo $client['clients_img'] ?>" alt="">
                            </div>
                        </div>

                <?php endforeach;
                endif; ?>

            </div>
        </div>
    </div>
<?php endif; ?>
<!-- Clients Section End -->