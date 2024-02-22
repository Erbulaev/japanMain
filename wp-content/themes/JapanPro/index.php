<?php get_header(); ?>

    <div class="wrapper">
        <div class="intro">
            <div class="intro_wp">
                <?php query_posts('cat=3');
                while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <div class="left_side">
                        <h1><? the_field('name_service') ?></h1>
                    </div>
                    <div class="right_side">
                        <p><? the_field('about_service') ?></p>
                        <a href="https://wa.me/79263184002">ЗАПИСАТЬСЯ НА СЕРВИС</a>
                    </div>
                <?
                endwhile;
                wp_reset_query();
                ?>

            </div>

        </div>
        <div class="back_intro">
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
        <div class="service" id="service">
            <h2>ОБСЛУЖИВАНИЕ В НАШЕМ КЛУБНОМ СЕРВИСЕ</h2>
            <div class="cards_service">
                <?php query_posts('cat=5');
                while (have_posts()) : the_post(); ?>
                    <div class="card_service">
                        <div class="number">
                            <? the_field('number') ?>
                        </div>
                        <div class="text_card">
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
        </div>
        <div class="general">
            <div class="gen">
                <?php query_posts('cat=16');
                while (have_posts()) : the_post(); ?>

                    <div class="gen_card">
                        <?php the_content(); ?>
                        <span></span>
                        <p><?php the_title(); ?></p>
                    </div>

                <?
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>

<!--        <div class="works" id="works">-->
<!--            --><?php //query_posts('cat=12');
//            while (have_posts()) : the_post(); ?>
<!--                <div class="card_works">-->
<!--                    <a href="--><?// the_field('url_namepg') ?><!--">-->
<!--                        <div class="top_works">-->
<!--                            --><?php //the_content(); ?>
<!--                        </div>-->
<!--                        <div class="bottom_works">-->
<!--                            <p>--><?php //the_title(); ?><!--</p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </div>-->
<!--            --><?//
//            endwhile;
//            wp_reset_query();
//            ?>

            <!--        <div class="card_works">-->
            <!--            <a href="#">-->
            <!--                <div class="top_works">-->
            <!--                    <img src="img/sale.png" alt="works" width="350" height="350">-->
            <!--                </div>-->
            <!--                <div class="bottom_works">-->
            <!--                    <p>asdasdasdsdasdsd</p>-->
            <!--                </div>-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="card_works">-->
            <!--            <a href="#">-->
            <!--                <div class="top_works">-->
            <!--                    <img src="img/sale.png" alt="works" width="350" height="350">-->
            <!--                </div>-->
            <!--                <div class="bottom_works">-->
            <!--                    <p>asdasdasdsdasdsd</p>-->
            <!--                </div>-->
            <!--            </a>-->
            <!--        </div>-->
<!--        </div>-->


            <div class="aks" id = "aks">
                <?php query_posts('cat=6');
                while (have_posts()) : the_post();?>
                    <div class="left_aks">
                        <h2><?php the_title(); ?></h2>
                        <div class="underline"></div>
                        <p><? the_field('desc') ?></p>
                        <a href="tel:79263184002">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                    <div class="right_side">
                        <?php the_content();?>
                    </div>
                <? //
                endwhile;
                wp_reset_query();
                ?>
            </div>


        <div class="contacts" id="contacts">
            <div class="left_contact">
                <h2>КОНТАКТЫ</h2>
                <a href="tel:79263184002">+7 (926) 318-40-02</a>
                <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17.14">Москва,
                    Алтуфьевское шоссе, 31, стр. 1</a>
            </div>
            <div class="right_contact">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A024c31efb4cae5dbbd8306b6f9fbcadf3acdd4ac53cd823a675f6fc0d0006cd3&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
<!--    <div class="reviews" style="width:560px;height:800px;overflow:hidden;position:relative;">-->
<!--        <h2>Что о нас говорят?</h2>-->
<!--        <iframe style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"-->
<!--                src="https://yandex.ru/maps-reviews-widget/80258952769?comments"></iframe>-->
<!--        <a href="https://yandex.ru/maps/org/japan_pro/80258952769/" target="_blank"-->
<!--           style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">Japan-->
<!--            Pro на карте Москвы — Яндекс Карты</a></div>-->

<?php get_footer(); ?>