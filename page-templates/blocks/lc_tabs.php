<section class="tabs py-5">
    <div class="container-xl">
        <ul class="nav nav-tabs" id="tabsTab" role="tablist">
            <?php
            $active = 'active';
            while (have_rows('tabs')) {
                the_row();
                $slug = preg_replace('/[0-9]/','',get_sub_field('tab_title'));
                $slug = acf_slugify($slug);
                ?>
                <li class="" role="presentation">
                    <h4 class="tabs_tab <?=$active?>" id="landlords-tab" data-bs-toggle="tab" data-bs-target="#<?=$slug?>"
                        type="button" role="tab" aria-controls="<?=$slug?>" aria-selected="true"><?=get_sub_field('tab_title')?></h4>
                </li>
                <?php
                $active = '';
            }
            ?>
        </ul>
        <div class="tab-content accordion py-lg-4 pb-5" id="tabsTabContent">
        <?php
            $show = 'show';
            $active = 'active';
            $expanded = 'true';
            while (have_rows('tabs')) {
                the_row();
                $slug = preg_replace('/[0-9]/','',get_sub_field('tab_title'));
                $slug = acf_slugify($slug);
                ?>
            <div class="tab-pane fade <?=$show?> <?=$active?> accordion-item" id="<?=$slug?>" role="tabpanel" aria-labelledby="<?=$slug?>-tab">
                <h2 class="accordion-header d-lg-none" id="heading<?=$slug?>">
                    <button class="tabs_button" id="heading<?=$slug?>Btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$slug?>" aria-expanded="<?=$expanded?>" aria-controls="collapse<?=$slug?>"><?=get_sub_field('tab_title')?></button>
                </h2>
                <div class="tabs__grid accordion-collapse collapse <?=$show?> d-lg-grid" aria-labelledby="heading<?=$slug?>" data-bs-parent="#tabsTabContent" id="collapse<?=$slug?>">
                    <img src="<?=wp_get_attachment_image_url(get_sub_field('image'),'large')?>" alt="" class="tabs__image">
                    <div class="tabs__content">
                        <h3 class="h2 has-primary-400-color"><?=get_sub_field('title')?></h3>
                        <div class="mb-4"><?=get_sub_field('content')?></div>
                        <div class="tabs__buttons">
                        <?php
                        if (get_sub_field('show_quote_button')) {
                            ?>
                            <a href="/get-quote/" class="btn btn-primary">Get a Quote</a>
                            <?
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                $show = $active = '';
                $expanded = 'false';
            }
            ?>
        </div>
    </div>
</section>
<?php
add_action('wp_footer',function(){
    ?>
<script>
(function($){
    $('.collapse').on('shown.bs.collapse', function(e) {
        var $card = $(this).closest('.accordion-item');
        var $open = $($(this).data('parent')).find('.collapse.show');
        
        var additionalOffset = 0;
        if($card.prevAll().filter($open.closest('.accordion-item')).length !== 0)
        {
                additionalOffset =  $open.height();
        }
        $('html,body').animate({
            scrollTop: $card.offset().top - additionalOffset - 100
        }, 0);
    });
})(jQuery);
</script>
    <?php
});