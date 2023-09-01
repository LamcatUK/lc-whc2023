<section class="testimonial_list py-5">
    <div class="container-xl">
        <h2 class="mb-4"><?=get_field('title')?>
        </h2>
        <?php
    $args = array('post_type' => 'testimonials','numberposts' => -1);
        $posts = get_posts($args);
        foreach ($posts as $p) {
            ?>
        <div class="testimonial_list__testimonial">
            <div class="testimonial_list__content">
                <?=get_field('testimonial', $p)?>
            </div>
            <?php
if (!preg_match('/X /', get_the_title($p))) {
    ?>
            <div class="testimonial_list__title">
                <?=get_the_title($p)?>
            </div>
            <div class="testimonial_list__subtitle">
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
</section>