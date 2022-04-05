<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/452
 * @link https://codex.wordpress.org/452
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Podjem
 * @since Integral River 1.0
 */

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Главная',
        'menu_title'	=> 'Настройки темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

add_action( 'wp_ajax_getformrcat', 'category_ajax' );
add_action( 'wp_ajax_nopriv_getformrcat', 'category_ajax' );

function category_ajax(){
    $form = [
        'static' => [
            ["name" => "name", "title" => "Введите Ваше имя", "type" => "text", "placeholder" => "Иван", "required" => false],
            ["name" => "mail", "title" => "Введите Ваш почтовый адрес", "type" => "text", "placeholder" => "ural.prokat@mail.ru", "required" => false],
            ["name" => "phone", "title" => "Введите Ваш номер телефона", "type" => "text", "placeholder" => "+7(xxx)-xxx-xx-xx", "required" => true],
        ],
        'categories' => [
            ["id" => 1, "title" => "Главная", "categories" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]],
            ["id" => 2, "title" => "ЛЕНТА ПЛЮЩЕННАЯ", "categories" => [1, 2, 3]],
            ["id" => 3, "title" => "ЛЕНТА НЕРЖАВЕЮЩАЯ", "categories" => [4, 5]],
            ["id" => 4, "title" => "ЛЕНТА СТАЛЬНАЯ", "categories" => [6, 7, 8, 9]],
            ["id" => 5, "title" => "ПРОВОЛОКА СТАЛЬНАЯ НА КАТУШКАХ И МОТКАХ", "categories" => [10, 11]],
            ["id" => 6, "title" => "МЮЗЛЕ", "categories" => [12]],
        ],
        "custom" => [
            [
                "id" => 1,
                "title" => 'Лента омедненная',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["0,5 x 2,5", "0,6 x 2,4", "0,6 x 2,5", "0,7 x 2,4", "0,75 x 1,8", "0,8 x 2,0", "0,94 x 1,8", "Другой размер"]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["10", "08A"]],
                    ["title" => 'Выберите тип изготовления ленты', "type" => "select", "options" => ["На мотках", "На катушках"]],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 100кг", "required" => true],
                ]
            ],
            [
                "id" => 2,
                "title" => 'Лента средней прочности',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["1,5 x 2,5", "0,6 x 3,0", "0,7 x 3,5", "0,7 x 7,0", "0,8 x 3,0", "0,8 x 5,0", "0,8 x 6,5", "1,0 x 2,2", "1,0 x 5,0", "Другой размер"]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["10 с хим сост. ГОСТ 1050-88", "20 с хим сост. ГОСТ 1050-88", "30 с хим сост. ГОСТ 1050-88", "40 с хим сост. ГОСТ 1050-88", "50 с хим сост. ГОСТ 1050-88", "60 с хим сост. ГОСТ 14959-79", "70 с хим сост. ГОСТ 14959-79", "60C2A с хим сост. ГОСТ 14959-79"]],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 100кг", "required" => true],
                ]
            ],
            [
                "id" => 3,
                "title" => 'Лента высокой прочности',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["0,6 x 3,0", "0,7 x 3,5", "0,7 x 7,0", "0,8 x 3,0", "0,8 x 5,0", "0,8 x 6,5", "1,0 x 2,2", "1,0 x 5,0", "1,5 x 2,5", "Другой размер"]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["60С2А с хим. сост. ГОСТ 14959-79", "65Г с хим. сост. ГОСТ 14959-79", "70 с хим. сост. ГОСТ 14959-79",]],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 100кг", "required" => true],
                ]
            ],

            [
                "id" => 4,
                "title" => 'Лента нагартованная',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["0,4 x 40", "0,4 x 70", "0,4 x 100", "Другой размер"]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["AISI 201 - аналог 12Х15Т9НД", "AISI 304 — аналог 08Х18Н10", "AISI 410 — аналог 12Х13", "AISI 430 — аналог 12Х17",]],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],
            [
                "id" => 5,
                "title" => 'Лента холоднокатаная',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["0,4 x 40", "0,4 x 70", "0,4 x 100", "Другой размер"]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["AISI 201 - аналог 12Х15Т9НД", "AISI 304 — аналог 08Х18Н10", "AISI 321 — аналог 08Х18Н10Т", "AISI 410 — аналог 12Х13", "AISI 430 — аналог 12Х17",]],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],

            [
                "id" => 6,
                "title" => 'Лента конструкционная',
                "items" => [
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["20", "20ПС", "25", "30", "40", "45", "50", "60", "65", "70", "ГОСТ 1050-88", "ГОСТ 14959-79",]],
                    ["title" => 'Выберите состояние ленты', "type" => "select", "options" => ["Отоженная", "Нагартованная",]],
                    ["title" => 'Укажите толщину ленты, мм', "type" => "text", "placeholder" => "0,5 - 3,5", "required" => false],
                    ["title" => 'Укажите ширину ленты, мм', "type" => "text", "placeholder" => "10 - 500", "required" => false],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],
            [
                "id" => 7,
                "title" => 'Лента упаковочная с ант. покрытием',
                "items" => [
                    ["title" => 'Укажите размеры ленты, мм', "type" => "select", "options" => ["65Г", "ГОСТ 14959-79", "У8А", "У8Г", "У8ГА", "ГОСТ 1435-74", "50ХФА", "60С2А", "65С2ВА", "70С2ХА",]],
                    ["title" => 'Выберите состояние ленты', "type" => "select", "options" => ["Отоженная", "Нагартованная",]],
                    ["title" => 'Укажите толщину ленты, мм', "type" => "text", "placeholder" => "0,5 - 3,5", "required" => false],
                    ["title" => 'Укажите ширину ленты, мм', "type" => "text", "placeholder" => "10 - 500", "required" => false],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],
            [
                "id" => 8,
                "title" => 'Лента пружинная',
                "items" => [
                    ["title" => 'Выберите состояние ленты', "type" => "select", "options" => ["Мягкая", "Полунагартованная", "Нагартованная",]],
                    ["title" => 'Укажите толщину ленты, мм', "type" => "text", "placeholder" => "0,5 - 1,25", "required" => false],
                    ["title" => 'Укажите ширину ленты, мм', "type" => "text", "placeholder" => "16 - 32", "required" => false],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],
            [
                "id" => 9,
                "title" => 'Лента холоднокатаная',
                "items" => [
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["08КП", "08ПС", "10",]],
                    ["title" => 'Выберите состояние ленты', "type" => "select", "options" => ["Особомягкая", "Мягкая", "Полунагартованная", "Нагартованная", "Высоконагратованная",]],
                    ["title" => 'Укажите толщину ленты, мм', "type" => "text", "placeholder" => "0,5 - 3,5", "required" => false],
                    ["title" => 'Укажите ширину ленты, мм', "type" => "text", "placeholder" => "10 - 500", "required" => false],
                    ["title" => 'Укажите требуемый объем ленты', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],


            [
                "id" => 10,
                "title" => 'Проволока нержавеющая',
                "items" => [
                    ["title" => 'Укажите вид намотки проволоки', "type" => "select", "options" => ["На катушках", "На мотках",]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["AISI 201 — аналог 12Х15Т9НД", "AISI 304 — аналог 08Х18Н10", "AISI 321 — аналог 08Х18Н10Т",]],
                    ["title" => 'Укажите диаметр проволоки, мм', "type" => "text", "placeholder" => "0,5 - 0,8", "required" => false],
                    ["title" => 'Укажите требуемый объем проволоки', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],
            [
                "id" => 11,
                "title" => 'Проволока оцинкованная',
                "items" => [
                    ["title" => 'Укажите вид намотки проволоки', "type" => "select", "options" => ["На катушках", "На мотках",]],
                    ["title" => 'Выберите марку стали', "type" => "select", "options" => ["10",]],
                    ["title" => 'Укажите диаметр проволоки, мм', "type" => "text", "placeholder" => "0,5 - 0,8", "required" => false],
                    ["title" => 'Укажите требуемый объем проволоки', "type" => "text", "placeholder" => "Минимальный заказ 1т", "required" => true],
                ]
            ],

            [
                "id" => 12,
                "title" => 'Мюзле',
                "items" => [
                    ["title" => 'Укажите вид мюзле', "type" => "select", "options" => ["Без плакетки", "С плакеткой",]],
                    ["title" => 'Укажите требуемый объем мюзле', "type" => "select", "options" => ["< 2 000 000 шт.", "> 2 000 000 шт."]],
                ]
            ],

        ],
    ];

    $answer = '';
     foreach ($form['custom'] as $list)
     {
         if($list['id'] == $_POST['id']){
             foreach ($list['items'] as $key => $item) {
                 $title = $item['title'];
                 $type = $item['type'];
                 $optionID = $key+1;
                 if ($item['type'] == "text") {
                     $placeholder = $item['placeholder'];
                     $answer .= '<div class="newform__input" data-tab="true"><div class="form_label">' . $title . '</div><input type="hidden" name="name_option_'.($key + 1) .'" value="'.$item["title"].'"><input type="' . $type . '" name="option_'.$optionID.'" placeholder="' . $placeholder . '"></div>';
                 } elseif ($item['type'] == "select") {
                     $list = '';
                     foreach ($item['options'] as $option) {
                         $list .= '<li class="select__item"><label>' . $option . '</label> <input name="option_'.$optionID.'" type="radio" value="' .$option. '"></li>';
                     }
                     $answer .= '<div class="newform__input" data-tab="true"><div class="form_label"><span>*</span> ' . $title . '</div><input type="hidden" name="name_option_'.($key + 1) .'" value="'.$item["title"].'"><div class="select"><div class="select__current">' . $item['options'][0] . '</div><ul class="select__list">' . $list . '</ul><div class="select__arrow"><span class="glyphicon glyphicon-play"></span></div></div></div>';

                 }
             }
         }
     }

    echo $answer;
    die;
}

function new_excerpt_more($more) {
    global $post;
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

add_theme_support( 'post-thumbnails' ); // для всех типов постов
// Переменные и умная длина цитаты.
function print_excerpt($length) { // Максимальная длина цитаты. Длина задается в символах
    global $post;
    $text = $post->post_excerpt;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    }
    $text = strip_shortcodes($text); // опционально, рекомендуется
    $text = strip_tags($text); // используйте' $text = strip_tags($text,'<p><a>'); ' если хотите оставить некоторые теги

    $text = substr($text,0,$length);
    $excerpt = reverse_strrchr($text, '.', 1);
    if( $excerpt ) {
        echo apply_filters('the_excerpt',$excerpt);
    } else {
        echo apply_filters('the_excerpt',$text);
    }
}

function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}

add_theme_support( 'title-tag' );
function integral_breadcrumbs() {

    $text['home']     = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author']   = 'Статьи автора %s'; // текст для страницы автора
    $text['404']      = 'Ошибка 404'; // текст для страницы 404
    $text['page']     = 'Страница %s'; // текст 'Страница N'
    $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before    = '<ul class="breadcrumbs" >'; // открывающий тег обертки
    $wrap_after     = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep            = ''; // разделитель между "крошками"
    $before         = '<li class="breadcrumbs__item breadcrumbs__current" >'; // тег перед текущей "крошкой"
    $after          = '</li>'; // тег после текущей "крошки"

    $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url       = home_url('/');
    $link           = '<li class="breadcrumbs__item">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" >%2$s</a>';
    $link          .= '</li>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

    if ( is_home() || is_front_page() ) {

        if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

    } else {

        $position = 0;

        echo $wrap_before;

        if ( $show_home_link ) {
            $position += 1;
            echo $home_link;
        }

        if ( is_category() ) {
            $parents = get_ancestors( get_query_var('cat'), 'category' );
            foreach ( array_reverse( $parents ) as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $cat = get_query_var('cat');
                echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_search() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $show_home_link ) echo $sep;
                echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['search'], get_search_query() ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_year() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_time('Y') . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_month() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_day() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
            $position += 1;
            echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_single() && ! is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $position += 1;
                $post_type = get_post_type_object( get_post_type() );
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
                if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                elseif ( $show_last_sep ) echo $sep;
            } else {
                $cat = get_the_category(); $catID = $cat[0]->cat_ID;
                $parents = get_ancestors( $catID, 'category' );
                $parents = array_reverse( $parents );
                $parents[] = $catID;
                foreach ( $parents as $cat ) {
                    $position += 1;
                    if ( $position > 1 ) echo $sep;
                    echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                }
                if ( get_query_var( 'cpage' ) ) {
                    $position += 1;
                    echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
                    echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
                } else {
                    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                    elseif ( $show_last_sep ) echo $sep;
                }
            }

        } elseif ( is_post_type_archive() ) {
            $post_type = get_post_type_object( get_post_type() );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . $post_type->label . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_attachment() ) {
            $parent = get_post( $parent_id );
            $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
            $parents = get_ancestors( $catID, 'category' );
            $parents = array_reverse( $parents );
            $parents[] = $catID;
            foreach ( $parents as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            $position += 1;
            echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_page() && ! $parent_id ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_title() . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_page() && $parent_id ) {
            $parents = get_post_ancestors( get_the_ID() );
            foreach ( array_reverse( $parents ) as $pageID ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
            }
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_tag() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $tagID = get_query_var( 'tag_id' );
                echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_author() ) {
            $author = get_userdata( get_query_var( 'author' ) );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_404() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . $text['404'] . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( has_post_format() && ! is_singular() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
}
register_nav_menus(
    array(
        'main_menu' => 'Меню на главной',
        'sidebar_menu' => 'Сайдбар меню',
        'footer_menu' => 'Меню в подвале'
    )
);

class Main_Walker_Nav_Menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            '',
            ( $display_depth % 2  ? '' : '' ),
            ( $display_depth >=2 ? '' : '' ),
           /* 'menu-depth-' . $display_depth*/
        );
        $class_names = implode( ' ', $classes );

        // build html class="' . $class_names . '"
        $output .= "\n" . $indent . '<ul>' . "\n";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        global $wp_query;

        // Restores the more descriptive, specific name for use within this method.
        $item = $data_object;

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'catalog-list__item' : '' ),
            ( $depth >=2 ? '' : '' ),
            ( $depth % 2 ? '' : '' ),
            /*'menu-item-depth-' . $depth*/
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        //$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html id="nav-menu-item-'. $item->ID . '"
        if($depth == 0){
            $output .= $indent . '<div  class="' . $depth_class_names . ' ">';
            $linkwrapstart = '<div class="catalog-list__category">';
            $linkwrapend = '</div>';
        }
        else{
            $output .= $indent . '<li>';
            $linkwrapstart = '';
            $linkwrapend = '';
        }


        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class=" ' . ( $depth > 0 ? '' : '' ) . '"';



        $item_output = sprintf( '%1$s%7$s<a%2$s>%3$s%4$s%5$s</a>%8$s%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after,
            $linkwrapstart,
            $linkwrapend
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        if($depth == 0){
            $output .= "</div>{$n}";
        }
        else{
            $output .= "</li>{$n}";
        }
    }

}
class Sidebar_Walker_Nav_Menu extends Walker_Nav_Menu {

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = NULL ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'newmenu-sub',
            ( $display_depth % 2  ? '' : '' ),
            ( $display_depth >=2 ? '' : '' ),
            /* 'menu-depth-' . $display_depth*/
        );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        global $wp_query;

        // Restores the more descriptive, specific name for use within this method.
        $item = $data_object;

        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'newmenu__item' : 'newmenu__item newmenu__item-sub' ),
          /*  ( $depth >=2 ? '' : '' ),
            ( $depth % 2 ? '' : '' ),*/
            /*'menu-item-depth-' . $depth*/
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        //$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html id="nav-menu-item-'. $item->ID . '"
            $output .= $indent . '<li  class="' . $depth_class_names . ' ">';

        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class=" ' . ( $depth > 0 ? '' : '' ) . '"';



        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
            $output .= "</li>{$n}";

    }

}

?>