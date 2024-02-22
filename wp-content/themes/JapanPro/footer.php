<script>
    $('.works').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
</script>

<footer>
    <div class="footer">
        <div class="top_foot">
            <div class="foot_nav">
                <? wp_nav_menu(); ?>
            </div>
        </div>
        <div class="bottom_foot">
            <div class="copy">
                <p>©JapanPro 2023</p>
            </div>
            <div class="foot_contact">
                <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17.14">Москва, Алтуфьевское шоссе, 31, стр. 1</a>
                <a href="tel:79263184002">+7 (926) 318-40-02</a>
                <p>пн. — вс. c 9 до 21</p>
            </div>
            <div class="foot_logo">
                <?php the_custom_logo( $blog_id ); ?>
            </div>
        </div>
    </div>
</footer>
</body>

</html>