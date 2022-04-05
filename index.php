<?php

/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style-last.css).

 * It is used to display a page when nothing more specific matches a query.

 * e.g., it puts together the home page when no home.php file exists.

 *

 *

 * @package WordPress

 * @subpackage Integral

 * @since Integral River 1.0

 */



get_header(); ?>

<div class="body_main">

    <section class="carousel slider">
        <?php if (have_rows('slider','option')): ?>
            <?php while (have_rows('slider','option')): the_row();
                $img = get_sub_field('img');
                $link = get_sub_field('link');
                $name = get_sub_field('header');
                ?>
                <div>
                    <img src="<?= $img; ?>" alt="">
                    <div class="slider__content">
                        <div class="container">
                            <div class="slider__logo"><span>Интеграл-М</span></div>
                            <div class="slider__name"><span><?= $name; ?></span></div>
                            <div class="slider__item slider__button">
                                <a href="<?= $link; ?>" class="button button-white-hover">
                                    Перейти в раздел <span class="glyphicon glyphicon-play icon_2"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
<section class="catalog">
    <div class="container">
        <h2 class="h1">Каталог продукции</h2>
        <div class="catalog__wrap">
            <?php
            wp_nav_menu( array(
                'items_wrap' => '<div class="%2$s">%3$s</div>',
                'menu_class'      => 'catalog-list catalog-list-dark',          // (string) class самого меню (ul тега)

                'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                'depth'           => 2,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                'walker'          => new Main_Walker_Nav_Menu(),              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
                'theme_location'  => 'main_menu'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
            ) );
            ?>


        </div>
        </div>
    </div>
</section>
<?php if(get_field('info_header','option') || get_field('info_content','option')) ?>
<section class="information">
    <div class="container">
        <h2 class="h1 information__h1"><?php the_field('info_header','option') ?></h2>
        <div class="information__wrap">
            <?php the_field('info_content','option') ?>
        </div>
    </div>
</section>
<?php get_template_part( 'template/form' ); ?>
<?php get_template_part( 'template/map' ); ?>

<?php get_footer(); ?>