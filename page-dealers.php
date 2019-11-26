<?php get_header(); ?>
<main class="dealer-main">


    <!-- dealer -->
    <section class="dealer">
        <div class="mx-auto">
            <div class="avss-section-intro text-center">
                <h1 class="avss-section-intro__header">
                    FIND YOUR NEAREST SHOP
                </h1>
                <div class="line-small mx-auto my-4"></div>
                <p>(TAP ON DIVISIONS TO EXPAND THE LIST)</p>
            </div>
        </div>


        <div class="accordion" id="accordionExample">

            <?php
            $dealers_division = new WP_Query(
                array(
                    'post_type' => 'dealer',
                    'posts_per_page' => -1,
                )
            );
            $division_count = 0;

            $arr = [
                '1' => "ঢাকা বিভাগ",
                '2' => "চট্টগ্রাম বিভাগ",
                '3' => "রাজশাহী বিভাগ",
                '4' => "বরিশাল বিভাগ",
                '5' => "খুলনা বিভাগ",
                '6' => "রংপুর বিভাগ",
                '7' => "সিলেট বিভাগ",
                '8' => "ময়মনসিংহ বিভাগ",
            ];

            foreach ($arr as $k => $v) :


                ?>

                <ul class="accordion" data-accordion data-allow-all-closed="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title dealer-division">
                            <h5><i class="far fa-dot-circle"></i> &nbsp; <?php echo $v; ?></h5>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <div class="grid-container">
                                <div class="grid-x grid-margin-x">

                                    <?php while ($dealers_division->have_posts()) : $dealers_division->the_post();
                                            if (get_field('dealer_division')['value'] == $k) : ?>

                                            <div class="dealer-box cell medium-6 large-4 my-2">
                                                <div class="dealer-box__inner">
                                                    <a href="<?php the_field('dealer_map'); ?>" class="dealer-box__icon">
                                                        <i class="fas fa-store-alt"></i>
                                                    </a>
                                                    <h4 class="dealer-box__zilla"><?php the_field('dealer_zilla'); ?></h4>
                                                    <h5 class="dealer-box__name">
                                                        <?php the_field('dealer_title'); ?>
                                                    </h5>
                                                    <div class="dealer-box__address">
                                                        <p><?php the_field('dealer_address'); ?></p>
                                                        <a class="dealer-box__phone" href="tel:<?php echo get_field('dealer_phone_num_1') ?>">
                                                            <?php echo get_field('dealer_phone_num_1') ?>
                                                        </a> <br>
                                                        <a class="dealer-box__phone" href="tel:<?php echo get_field('dealer_phone_num_2') ?>">
                                                            <?php echo get_field('dealer_phone_num_1') ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                            endif;
                                        endwhile; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            <?php endforeach; wp_reset_query();?>


    </section>
</main>

<?php while(have_posts(  )): the_post(  ); ?>
    <?php the_content(); ?>
<?php endwhile; ?>

<?php
get_footer(); ?>