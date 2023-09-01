<section class="service_nav py-5">
    <div class="container-xl">
        <div class="service_nav__content">
            <h2 class="has-primary-400-color">
                <?=get_field('title')?></h2>
            <div><?=get_field('content')?></div>
        </div>
        <div class=" service_nav__grid">
            <a class="service_nav__card" href="/same-day/">
                <img class="service_nav__icon"
                    src="<?=get_stylesheet_directory_uri()?>/img/icon--same-day.svg"
                    alt="">
                <div class="service_nav__title">Same Day Delivery</div>
            </a>
            <a class="service_nav__card" href="/fleet-vehicle-movement/">
                <img class="service_nav__icon"
                    src="<?=get_stylesheet_directory_uri()?>/img/icon--fleet.svg"
                    alt="">
                <div class="service_nav__title">Fleet Vehicle Movement</div>
            </a>
            <a class="service_nav__card" href="/critical-logistics/">
                <img class="service_nav__icon"
                    src="<?=get_stylesheet_directory_uri()?>/img/icon--critical.svg"
                    alt="">
                <div class="service_nav__title">Critical Logistics</div>
            </a>
            <a class="service_nav__card" href="/international-freight/">
                <img class="service_nav__icon"
                    src="<?=get_stylesheet_directory_uri()?>/img/icon--international.svg"
                    alt="">
                <div class="service_nav__title">International Freight</div>
            </a>
            <a class="service_nav__card" href="/multi-drop/">
                <img class="service_nav__icon"
                    src="<?=get_stylesheet_directory_uri()?>/img/icon--multi-drop.svg"
                    alt="">
                <div class="service_nav__title">Multi-Drop Courier Services</div>
            </a>
        </div>
    </div>
</section>