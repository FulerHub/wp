
<footer class="footer">
    <div class="container">
        <div class="footer__wrap">
            <?php
            wp_nav_menu( array(
                'items_wrap' => '<div class="%2$s">%3$s</div>',
                'menu_class'      => 'catalog-list catalog-list-gray',          // (string) class самого меню (ul тега)

                'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                'depth'           => 2,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                'walker'          => new Main_Walker_Nav_Menu(),              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                'theme_location'  => 'footer_menu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
            ) );
            ?>
            <div class="footer__copy">Завод стальной ленты и проволки ООО "Интеграл-М" 1999 - 2020 г. Все права защищены.</div>
        </div>

    </div>
</footer>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $('input[type=radio][name=category]').change(function() {
        let self =$(this);
        $.ajax({
            type: "POST",
            url: "<?= admin_url('admin-ajax.php'); ?>",
            data: { action: 'getformrcat',id: $(this).attr('data-id')},
            dataType : "html",
            success: function( data ) {
                self.closest('.form-body').find('.newform__input[data-tab=true]').remove();
                self.closest('.form-body').find('.newform__input-checkbox').before(data);
            }
        }).done(function( msg ) {

        });
    });
</script>
<?php if( have_rows('blueprints')):?>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script>$(document).ready(function(){$("a#drawing").fancybox();});</script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slick/slick.min.js"></script>

<script>
	 $(document).ready(function(){
         $("[name=phone]").mask("+ 7(999) 999-9999");
         $('.carousel').slick({
             infinite: true,
             slidesToShow: 1,
             slidesToScroll: 1,
             prevArrow: $('.arrow_left'),
             nextArrow: $('.arrow_right'),
             draggable: true,
             autoplay: true,
             fade: true,
             dotsClass: "dots",
             dots: true,
             speed: 1000,
             centerMode:true,
             responsive: [{
                 breakpoint: 992, //сообщает, при какой ширине экрана нужно включать настройки
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     infinite: true,
                     draggable: true
                 }
             }]
         });
         $('.preloader').fadeOut(700);
     });

</script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>