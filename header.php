<?php /* * The template for displaying the header * * Displays all of the head element and everything up until the "site-content" div. * * @package WordPress * @subpackage Integral * @since Integral River 1.0 */ ?><!DOCTYPE html><html <?php language_attributes(); ?>><head>    <meta charset="UTF-8">    <?php if(is_front_page()): ?>        <title>Где купить стальную ленту и проволоку в Магнитогорске | Каталог. </title>        <meta name="description"              content="Высококачественная стальная лента и проволока оптом в Магнитогорске. Любые типы и размеры по индивидуальному заказу. Сниженные цены и скидки новым заказчикам.">    <?php else: ?>        <title><?= wp_get_document_title();  ?></title>    <?php endif; ?>    <meta name="viewport" content="width=device-width, initial-scale=1">    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap-grid.min.css">    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/gly.css">    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/slick/slick.css"/>    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/favicon.ico" type="image/x-icon">    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/style.css"></head><body><div class="preloader">    <div class="preloader__logo">        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="">    </div>    <div class="i-preloader"></div></div><div class="modal">    <div class="modal__back"></div>    <div class="modal__exit ">        <a href="#">            <svg width="12px" height="12px" stroke="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">                <line stroke-width="4" x1="2" x2="30" y1="2" y2="30"/>                <line stroke-width="4" x1="2" x2="30" y1="30" y2="2"/>            </svg>        </a>    </div>    <div class="container">        <?php get_template_part('template/form',null, ['type' => 1]); ?>    </div></div><div class="phone-button">    <i class="icon-phonealt"></i></div><header class="header">    <div class="container">        <div class="header__wrap">            <div class="row">                <div class="col-4">                    <div class="header__burger">                        <svg height="48" viewBox="0 0 48 48" width="30" xmlns="http://www.w3.org/2000/svg">                            <path d="M0 0h48v48h-48z" fill="none"/>                            <path d="M6 36h36v-4h-36v4zm0-10h36v-4h-36v4zm0-14v4h36v-4h-36z"/>                        </svg>                    </div>                </div>                <div class="col-4">                    <div class="header__logo">                        <a href="<?php echo esc_url(home_url('/')); ?>">                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="">                        </a>                    </div>                </div>                <div class="col-4">                    <div class="header__phone">                        <a href="#"><i class="icon-phonealt"></i></a>                    </div>                </div>            </div>        </div>    </div></header><aside class="sidebar">    <div class="sidebar__close">        <svg stroke="#ffffff" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="width: 10px;height: 10px;">            <line stroke-width="4" x1="2" x2="30" y1="2" y2="30" style=""></line>            <line stroke-width="4" x1="2" x2="30" y1="30" y2="2"></line>        </svg>    </div>    <div class="sidebar__logo">        <?php if(is_front_page()): ?>        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt="">        <?php else: ?>            <a href="<?= home_url('/'); ?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.svg" alt=""></a>        <?php endif; ?>    </div>    <nav id="navigation">        <?php        wp_nav_menu( array(            'items_wrap' => '<ul class="%2$s">%3$s</ul>',            'menu_class'      => 'newmenu',          // (string) class самого меню (ul тега)            'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки            'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)            'walker'          => new Sidebar_Walker_Nav_Menu(),              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu            'theme_location'  => 'sidebar_menu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)        ) );        ?>    </nav>    <div class="sidebar__info">        <ul class="list-info">            <li class="list-info__item"><i class="icon-emailalt"></i>Ural.prokat@mail.ru</li>            <li class="list-info__item"><i class="icon-phonealt"></i>+7 (3519) 38-17-71</li>            <li class="list-info__item"><i class="icon-phonealt"></i>+7 (3519) 46-00-79</li>            <li class="list-info__item"><i class="icon-map-marker"></i>Магнитогорск, герцена 6</li>        </ul><!--        <div class="sidebar__button">            <a class="button button-white-hover" href="">Заказать звонок</a>        </div>-->    </div></aside>