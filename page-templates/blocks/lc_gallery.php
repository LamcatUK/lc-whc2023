<section class="gallery">
    <div class="container-xl">
        <h2 class="has-primary-400-color mb-4">Gallery</h2>
        <div class="gallery__grid" id="gallery">
            <?php
foreach (get_field('images') as $img) {
    ?>
            <li class="item">
                <span class="imageframe">
                    <a href="<?=wp_get_attachment_image_url($img, 'full')?>"
                        data-fancybox="gallery" class="grid-item text-center" aria-label="View image">
                        <?=wp_get_attachment_image($img, 'large')?></a>
                </span>
            </li>
            <?php
}
            ?>
        </div>

    </div>
</section>
<?php
            add_action('wp_footer', function () {
                $the_theme = wp_get_theme();
                ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<script>
    Fancybox.bind("[data-fancybox]", {});
</script>
<?php
            }, 9999);
            ?>