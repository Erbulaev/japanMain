<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--    <link rel="stylesheet" href="css/style.css">-->
    <? wp_head(); ?>
    <title>Japan Pro</title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="/">
                <?php the_custom_logo($blog_id); ?>
            </a>
        </div>
        <div class="nav">
            <div class="navbar">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>
                <div class="menu__box">
                    <?php wp_nav_menu('menu=Верхнее меню'); ?>
                    <div class="mob_cont">
                        <a href="tel:79263184002">+7 (926) 318-40-02</a>
                        <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17">Москва, Алтуфьевское шоссе, 31, стр. 1</a>
                    </div>

                </div>
            </div>

<!--            <nav role="navigation" class="mob_menu">-->
<!--                <div id="menuToggle">-->
<!--                    <input type="checkbox" />-->
<!--                    <span></span>-->
<!--                    <span></span>-->
<!--                    <span></span>-->
<!--                    --><?// wp_nav_menu(); ?>
<!--                </div>-->
<!--            </nav>-->
            <nav class="mane_menu">
                <? wp_nav_menu(); ?>
            </nav>
        </div>
    </div>
</header>