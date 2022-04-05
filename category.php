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

<section class="slider">
    <?php if( get_field('image') ): ?>
        <img src="<?php the_field('image'); ?>" alt="">
    <?php else: ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/nerzhaveyuschaya_lenta.jpg" alt="">
    <?php endif; ?>

    <div class="slider__content">
        <div class="container">
            <div class="slider__logo"><span>Интеграл-М</span></div>
            <div class="slider__name"><span><?php single_cat_title(); ?></span></div>
        </div>
    </div>
</section>
<section class="category">
    <div class="container">
        <div class="category__breadcrumbs">
            <?php if ( function_exists( 'integral_breadcrumbs' ) ) integral_breadcrumbs(); ?>
        </div>
        <div class="category__description">
            <?php if( get_field('header_description') ): ?>
                <h2 class="h1"><?php the_field('header_description'); ?></h2>
            <?php endif; ?>
            <div class="category__text">
                <?php the_archive_description( ); ?>
            </div>
        </div>
        <div class="category__content">
            <?php if( get_field('header_main') ): ?>
                <h1 class="h2"><?php the_field('header_main'); ?></h1>
            <?php endif; ?>

            <?php if( get_field('page-content') ): ?>
                <div class="category__text">
                    <?php the_field('page-content'); ?>
                </div>
            <?php endif; ?>


        </div>
        <div class="category__list">
            <div class="category-list">
                <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post();?>
                        <div class="category-list__item">
                            <h2 class="h1"><?php the_title(); ?></h2>
                            <?php if (have_rows('specific')): ?>
                                <table class="table-integral">
                                    <?php while (have_rows('specific')): the_row();
                                        $name = get_sub_field('name'); $val = get_sub_field('value'); ?>
                                        <tr><td><?= $name ?> </td><td><?= $val ?></td></tr>
                                    <?php endwhile; ?>
                                </table>
                            <?php endif; ?>

                            <div class="category-list__button">
                                <a class="button" href="<?php the_permalink(); ?>">Подробнее</a>
                            </div>
                        </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php if (have_rows('blueprints')): ?>
        <div class="category__blueprints">
            <div class="row">
                <?php while (have_rows('blueprints')): the_row();
                    $img = get_sub_field('image'); $name = get_sub_field('text'); ?>
                    <div class="col-lg-6">
                        <div class="drawing_img_block">
                            <a data-fancybox="gallery" href="<?= $img ?>">
                                <img src="<?= $img ?>" alt="">
                                <span><?= $name ?></span>
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( get_field('add_content') || get_field('add_header') ): ?>
        <div class="category__additional">
            <h2 class="h2"><? the_field('add_header'); ?></h2>
            <div class="category__text">
                <?php the_field('add_content'); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php get_footer('newform'); ?>
<?php get_footer('map'); ?>
<?php get_footer(); ?>







