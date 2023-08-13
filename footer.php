<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<div id="footer-top"></div>
<footer class="footer pt-5">
    <div class="container-xl pb-4">
        <div class="row pb-4">
            <div class="col-sm-6 col-lg-3 mb-2 order-1">
                <a href="<?=get_home_url()?>"><img
                        src="<?=get_stylesheet_directory_uri()?>/img/wh-couriers-logo--wo.svg"
                        alt="WH Couriers" class="logo img-fluid mb-4"></a>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-3 order-lg-2">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-envelope"></i></span> <a
                            href="mailto:<?=get_field('contact_email', 'options')?>"><?=get_field('contact_email', 'options')?></a>
                    </li>
                    <li><span class="fa-li"><i class="fas fa-phone-alt"></i></span> <a
                            href="tel:<?=parse_phone(get_field('contact_phone', 'options'))?>"><?=get_field('contact_phone', 'options')?></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-4 order-lg-3">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-map-marker-alt"></i></span> <a
                            href="<?=get_field('google_directions', 'options')?>"
                            target="_blank"><?=get_field('contact_address', 'options')?></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2 order-2 order-lg-4">
                <?php wp_nav_menu(array('theme_location' => 'footer_menu1')); ?>
            </div>
        </div>
    </div>
    <div class="colophon">
        <div class="container-xl">
            <div>&copy; <?=date('Y')?> WH
                Couriers
                Ltd. Registered in England, no 14380613.</div>
            <div>Site by <a href="https://www.lamcat.co.uk/" target="_blank">Lamcat</a></div>
        </div>
    </div>
</footer>
<?php wp_footer();
if (get_field('gtm_property', 'options')) {
    ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=<?=get_field('gtm_property', 'options')?>"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
}
?>
</body>

</html>