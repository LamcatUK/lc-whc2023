<section class="contact py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <?=get_field('intro')?>
                </div>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa-solid fa-phone"></i></span>
                        <?=do_shortcode('[contact_phone]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-envelope"></i></span>
                        <?=do_shortcode('[contact_email]')?>
                    </li>
                    <li><span class="fa-li"><i class="fa-solid fa-map-marker-alt"></i></span>
                        <a href="<?=get_field('gmb_link', 'options')?>"
                            target="_blank"><?=do_shortcode('[contact_address]')?></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <?=do_shortcode('[contact-form-7 id="' . get_field('form_id') . '"]')?>
            </div>
        </div>
    </div>
</section>