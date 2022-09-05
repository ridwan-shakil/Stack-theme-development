<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.mixitup.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script> -->

<?php
function stack_scripts()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . 'assets/css/bootstrap.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . 'assets/fonts/line-icons.css');
    wp_enqueue_style('slicknav', get_template_directory_uri() . 'assets/css/slicknav.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . 'assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . 'assets/css/owl.theme.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . 'assets/css/magnific-popup.css');
    wp_enqueue_style('nivo-lightbo', get_template_directory_uri() . 'assets/css/nivo-lightbox.css');
    wp_enqueue_style('animate', get_template_directory_uri() . 'assets/css/animate.css');
    wp_enqueue_style('main', get_template_directory_uri() . 'assets/css/main.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . 'assets/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'stack_scripts');
