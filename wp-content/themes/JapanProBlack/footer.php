<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script>
    document.querySelector('#menu__toggle').addEventListener('change', function(e) {
        document.body.style.overflow = e.target.checked === true ? 'hidden' : '';
    });
</script>
<script>
    $('.menu__box ul a').on('click', function(){
        if($('.menu__toggle').css('display') !=='none'){
            $(".menu__toggle").trigger( "click" );
        }
    });
</script>
<footer>
    <div class="footer">
        <div class="foot_nav">
            <? wp_nav_menu(); ?>
        </div>
        <div class="b_foot">
            <div class="left_foot">
                <a href="/">
                    <?php the_custom_logo( $blog_id ); ?>
                </a>
            </div>
            <div class="right_foot">
                <a href="tel:79263184002">+7 (926) 318-40-02</a>
                <a href="https://yandex.ru/maps/213/moscow/house/altufyevskoye_shosse_31s1/Z04Ycw9gTUUOQFtvfXR3cHhlYA==/?ll=37.580409%2C55.861464&z=17">Москва,
                    Алтуфьевское шоссе, 31, стр. 1</a>
                <p>пн. — вс. c 9 до 21</p>
                <p>©JapanPro 2023</p>
                <p>Сайт разработан Web-студией: <a href="http://webkurkin.ru/">WEBKURKIN</a> </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>