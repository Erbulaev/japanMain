<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="assets/js/slick.js"></script>
    <!--    <link rel="stylesheet" href="--><?php //bloginfo('stylesheet_url');?><!--">-->
    <? wp_head(); ?>
    <title>Автосервис</title>
</head>

<body>
<header>
    <div class="header">
        <div class="top_head">
            <div class="top_head_btn">
                <a href="tel:79263184002">+7 (926) 318-40-02</a>
                <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17.14">Москва,
                    Алтуфьевское шоссе, 31, стр. 1</a>
            </div>
        </div>
        <div class="bottom_head">
            <div class="left_side_head">
                <div class="logo">
                    <?php the_custom_logo($blog_id); ?>
                </div>
                <div class="menu">
                    <nav>
                        <? wp_nav_menu(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>