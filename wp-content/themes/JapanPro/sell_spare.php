<?php
/*
Template Name: Продажа запчастей
*/
?>
<?php get_header(); ?>

    <div class="wrapper">
        <div class="sell">
            <?php	query_posts('cat=11');
            while (have_posts()) : the_post();?>

                <div class="sell_card">
                    <div class="top_card">
                        <?php the_content();?>
                    </div>
                    <div class="bottom_card">
                        <p>Марка: <span><?php the_title(); ?></span></p>
                        <p>Цена: <span><? the_field('spare_price') ?>Р.</span></p>
                        <a href="tel:79263184002">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            <?
            endwhile;
            wp_reset_query();
            ?>




        </div>
    </div>

<?php get_footer(); ?>