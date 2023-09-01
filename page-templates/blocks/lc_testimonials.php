<section class="testimonials py-5">
    <div class="testimonials__overlay"></div>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonials__slider">
                    <?php
                    $args = array('post_type' => 'testimonials','numberposts' => -1);
                    $posts = get_posts($args);
                    foreach ($posts as $p) {
                        ?>
                    <div class="testimonials__testimonial">
                        <div class="testimonials__content">
                            <?=get_field('testimonial', $p)?>
                        </div>
                        <?php
if (!preg_match('/X /', get_the_title($p))) {
    ?>
                        <div class="testimonials__title">
                            <?=get_the_title($p)?>
                        </div>
                        <div class="testimonials__subtitle">
                            <?php
    $role = get_field('role', $p);
    $comp = get_field('company', $p);
    if ($role) {
        echo $role;
        if ($comp) {
            echo ' - ';
        }
    }
    if ($comp) {
        echo $comp;
    }
    ?>
                        </div>
                        <?php
}
                        ?>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    (function($) {
        $('.testimonials__slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 6000,
            arrows: false
        });
    })(jQuery);
</script>
<?php
}, 9999);
                    ?>