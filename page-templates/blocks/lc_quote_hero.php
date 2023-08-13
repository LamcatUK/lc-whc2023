<?php
$bg = wp_get_attachment_image_url(get_field('background'), 'full');
?>

<section class="quote_hero" data-parallax="scroll"
    data-image-src="<?=$bg?>"
    style="background-image:url(<?=$bg?>)">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-8 quote_hero__content">
                <h1><?=get_field('title')?>
                </h1>
                <?=get_field('intro')?>
            </div>
            <div class="col-md-4">
                <div class="quote_hero__quote">
                    <h2 class="h3">Get a quote</h2>
                    <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '"]')?>
                </div>
            </div>
        </div>
    </div>
</section>