<section class="spinner py-5">
    <div class="container-xl">
        <div class="spinner__grid">
            <?php
        while(have_rows('stats')) {
            the_row();
            ?>
            <div class="spinner__item">
                <div class="spinner__stat">
                    <?php
                    if (get_sub_field('prefix')) {
                        echo get_sub_field('prefix');
                    }

                    $endval = get_sub_field('stat');
            $decimals = null;

            echo do_shortcode("[countup start='0' end='{$endval}' decimals='{$decimals}' duration='3' scroll='true']");

            if (get_sub_field('suffix')) {
                echo get_sub_field('suffix');
            }
            ?>
                </div>
                <div class="spinner__title">
                    <?=get_sub_field('stat_title')?>
                </div>
            </div>
            <?php
        }
            ?>
        </div>
    </div>
</section>