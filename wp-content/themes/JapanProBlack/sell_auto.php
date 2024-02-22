<?php
/*
Template Name: Продажа авто
*/
?>
<?php get_header(); ?>


<div class="wrapper">
    <h2>ПРОДАЖА АВТО</h2>
    <div class="sell">
        <?php query_posts('cat=10');
        if(have_posts()){
        while (have_posts()) : the_post(); ?>

            <div class="sell_card">
                <div class="top_card">
                    <?php the_content(); ?>
                </div>
                <div class="bottom_card">
                    <p>Марка: <span><?php the_title(); ?></span></p>
                    <p>Год выпуска: <span><? the_field('years') ?></span></p>
                    <p>Объем двигателя: <span><? the_field('volume') ?></span></p>
                    <p>Цена: <span><? the_field('price') ?>Р.</span></p>
                    <a href="tel:79263184002">ПОДРОБНЕЕ</a>
                </div>
            </div>
        <?
        endwhile;
        wp_reset_query();

        }
        else{
            echo "<h2>РАЗДЕЛ НАПОЛНЯЕТСЯ</h2>";
        }?>



    </div>
</div>

<?php get_footer(); ?>
