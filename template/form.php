<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral River 1.0
 */
?>
<?php
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
$getid =(is_front_page()) ? get_field('type_category_form', 'option')-1 : get_field('type_category_form')-1;
$getid = (is_category()) ? get_field('type_category_form',get_queried_object())-1 : $getid;
$getid = ($args['type'] == 1) ? $args['type']-1 : $getid;
$form_category = $form['categories'][$getid]['categories'];
?>
<section class="newform">
    <div class="container">
        <?php if( get_field('header_form') || get_field('header_form', 'option')): ?>
            <h2 class="h1"><?php (is_front_page()) ? the_field('header_form', 'option') : ((is_category()) ? the_field('header_form',get_queried_object()) :  the_field('header_form')); ?></h2>
        <?php endif; ?>
        <?php if( get_field('description_form') || get_field('description_form',get_queried_object()) || get_field('description_form','option')): ?>
            <div class="newform__description"><?php (is_front_page()) ? the_field('description_form', 'option') : ((is_category()) ? the_field('description_form',get_queried_object()) : the_field('description_form')); ?></div>
        <?php endif; ?>
        <form action="<?php echo esc_url(get_template_directory_uri()); ?>/mail.php" method="POST">
            <div class="form-body newform__wrap">

                <?php foreach ($form['static'] as $item): ?>
                    <div class="newform__input">
                        <div class="form_label">
                            <?= $item['title'] ?>
                        </div>
                        <input type="<?= $item['type'] ?>" name="<?= $item['name'] ?>"
                               placeholder="<?= $item['placeholder'] ?>">
                    </div>
                <?php endforeach; ?>


                <?php if ($args['type'] == 1 || (get_field('type_category_form',get_queried_object()) !== 0 && (is_front_page() || is_category() || is_page()))  || get_field('type_category_form') !== 0 && (is_front_page() || is_category()|| is_page()) ): ?>
                <div class="newform__input">
                    <div class="form_label"><span>*</span> Выберите категорию продукции</div>
                    <div class="select">
                        <div class="select__current"><?= $form['custom'][$form_category[0]-1]['title'] ?></div>
                        <ul class="select__list">
                            <?php foreach ($form['custom'] as $key => $item): ?>
                            <?php if (in_array($item['id'], $form_category)): ?>
                            <li class="select__item"><label><?= $item['title'] ?></label><input
                                        name="category" type="radio"
                                        value="<?= $item['title'] ?>"  data-id="<?= $item['id'] ?>"></li>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="select__arrow">
                            <span class="glyphicon glyphicon-play"></span>
                        </div>
                    </div>
                </div>

                <?php endif; ?>
                <?php foreach ($form['custom'] as $list): ?>

                    <?php if (in_array($list['id'], $form_category) || $list['id'] == get_field('type_form')): ?>

                        <?php foreach ($list['items'] as $key => $item): ?>

                            <?php if ($item['type'] == "text"): ?>

                                <div class="newform__input" data-tab="true">
                                    <div class="form_label">
                                        <?= $item['title'] ?>
                                    </div>
                                    <input type="hidden" name="name_option_<?= $key + 1 ?>"
                                           value="<?= $item['title'] ?>">
                                    <input type="<?= $item['type'] ?>" name="option_<?= $key + 1 ?>"
                                           placeholder="<?= $item['placeholder'] ?>">
                                </div>

                            <?php elseif ($item['type'] == "select"): ?>

                                <div class="newform__input" data-tab="true">
                                    <div class="form_label"><span>*</span> <?= $item['title'] ?></div>
                                    <input type="hidden" name="name_option_<?= $key + 1 ?>"
                                           value="<?= $item['title'] ?>">
                                    <div class="select">
                                        <div class="select__current"><?= $item['options'][0] ?></div>
                                        <ul class="select__list">
                                            <?php foreach ($item['options'] as $option): ?>
                                                <li class="select__item"><label><?= $option ?></label><input
                                                            name="option_<?= $key + 1 ?>" type="radio"
                                                            value="<?= $option ?>"></li>
                                            <?php endforeach; ?>
                                        </ul>
                                        <div class="select__arrow">
                                            <span class="glyphicon glyphicon-play"></span>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>

                        <?php endforeach; ?>

                        <?php break; ?>

                    <?php endif; ?>

                <?php endforeach; ?>
                <div class="newform__input newform__input-checkbox">
                    <div class="checkbox">
                        <input class="custom-checkbox" type="checkbox" name="checkbox" id="checkbox<?= $args['type'] ?>">
                        <label for="checkbox<?= $args['type'] ?>">Я принимаю условия <a target="_blank" href="/integral-m_agreement.pdf">пользовательского
                                соглашения и политики конфиденциальности</a></label>
                    </div>
                </div>
                <div class="newform__input newform__input-button">
                    <button class="button">Отправить</button>
                </div>

            </div>
        </form>
    </div>
</section>