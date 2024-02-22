<?php
/*
Template Name: Астон Мартин
*/
?>
<?php get_header(); ?>

    <div class="wrapper">
        <h2>Примеры работ Aston Martin</h2>
        <div class="mane_works">
            <?php query_posts('cat=15');
            while (have_posts()) : the_post(); ?>
                <div class="works_card">
                    <?php the_content(); ?>
                </div>
            <?
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>

<?php get_footer(); ?>