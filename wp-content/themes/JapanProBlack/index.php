<?php get_header(); ?>
<div class="intro">
    <div class="wrapper">
        <div class="text_intro">
            <?php query_posts('cat=3');
            while (have_posts()) : the_post(); ?>
                <h1><? the_field('name_service') ?></h1>
                <p><? the_field('about_service') ?></p>
                <a href="https://wa.me/79263184002">ЗАПИСАТЬСЯ НА СЕРВИС</a>
            <?
            endwhile;
            wp_reset_query();
            ?>

        </div>
    </div>
</div>
<div class="wrapper">
    <h2 id="service">ОБСЛУЖИВАНИЕ В НАШЕМ КЛУБНОМ СЕРВИСЕ</h2>
    <div class="cards_service">
        <?php query_posts('cat=5');
        while (have_posts()) : the_post(); ?>
            <div class="card_service">
                <div class="text_card">
                    <span><? the_field('number') ?></span>
                    <p><?php the_title(); ?></p>
                    <div class="underline"></div>
                    <?php the_content(); ?>
                </div>
            </div>
        <?
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <div class="info">
        <?php query_posts('cat=4');
        while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>

            <p><? the_field('first') ?></p>

            <p><? the_field('second') ?></p>
        <?
        endwhile;
        wp_reset_query();
        ?>
    </div>
</div>
<div class="general">
    <?php query_posts('cat=7');
    while (have_posts()) : the_post(); ?>
        <div class="gen">
            <div class="scale">
                <?php the_content(); ?>
            </div>
            <p><?php the_title(); ?></p>
        </div>

    <?
    endwhile;
    wp_reset_query();
    ?>
</div>
<div class="wrapper">
    <h2>ЧТО О НАС ГОВОРЯТ?</h2>
    <div class="reviews" style="width:100%;height:800px;overflow:hidden;position:static;">
        <iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
                src="https://yandex.ru/maps-reviews-widget/80258952769?comments"></iframe>
        <a href="https://yandex.ru/maps/org/japan_pro/80258952769/" target="_blank"
           style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Japan
            Pro на карте Москвы — Яндекс Карты</a></div>
    <h2>КОНТАКТЫ</h2>
    <div class="mob_contacts">
        <a href="tel:79263184002">+7 (926) 318-40-02</a>
        <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17">Москва,
            Алтуфьевское шоссе, 31, стр. 1</a>
    </div>
</div>
<div class="map" id="contacts">
    <div class="info_map">
        <p>КОНТАКТЫ</p>
        <a href="tel:79263184002">+7 (926) 318-40-02</a>
        <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17">Москва,
            Алтуфьевское шоссе, 31, стр. 1</a>
    </div>
    <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A024c31efb4cae5dbbd8306b6f9fbcadf3acdd4ac53cd823a675f6fc0d0006cd3&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
</div>

<?php get_footer(); ?>