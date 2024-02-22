<?php
/*
Template Name: Виды работ
*/
?>
<?php get_header(); ?>

    <div class="wrapper">
        <h2>ВИДЫ РАБОТ</h2>
        <div class="works">
            <?php query_posts('cat=12');
            while (have_posts()) : the_post(); ?>
                <a href="#<? the_field('popup_href') ?>" class="card_work">
                    <div class="scale">
                        <?php the_content(); ?>
                    </div>
                    <div class="text_card_work">
                        <p><?php the_title(); ?></p>
                    </div>
                </a>
            <?
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
<?php query_posts('cat=12');
while (have_posts()) : the_post(); ?>
    <div id="<? the_field('popup_href') ?>" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?php the_title(); ?></h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="modal-body">
                    <? the_field('text_popup') ?>
                </div>
            </div>
        </div>
    </div>
<?
endwhile;
wp_reset_query();
?>


<?php get_footer(); ?>