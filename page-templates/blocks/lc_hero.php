<?php
$img = wp_get_attachment_image_url(get_field('background'), 'full');// ?? null;
$icon = get_field('icon') ?? null;
if ($icon) {
    $icon = get_stylesheet_directory_uri() . '/img/icon--' . $icon . '--wo.svg';
}
?>
<section class="hero" style="background-image:url(<?=$img?>);">
    <div class="container-xl" data-aos="fade">
        <img class="hero__icon" src="<?=$icon?>" alt="">
        <h1>
            <?=get_field('title')?>
        </h1>
    </div>
</section>