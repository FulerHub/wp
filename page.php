<?php get_header(); ?>
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
                <div class="slider__name"><span><?php the_title(); ?></span></div>
            </div>
        </div>
    </section>
    <section class="category">
        <div class="container">
            <div class="category__breadcrumbs">
                <?php if ( function_exists( 'integral_breadcrumbs' ) ) integral_breadcrumbs(); ?>
            </div>
            <?php if( get_field('header_description') || get_field('page-content') ): ?>
            <div class="category__description">
                <?php if( get_field('header_description') ): ?>
                    <h2 class="h1"><?php the_field('header_description'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('page-content') ): ?>
                    <div class="category__text">
                        <?php the_field('page-content'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if(get_the_content() || get_field('header_main') || have_rows('specific')): ?>
            <div class="category__content category__content-line" >
                <?php if( get_field('header_main') ): ?>
                    <h1 class="h2"><?php the_field('header_main'); ?></h1>
                <?php endif; ?>
                <?php if (have_rows('specific')): ?>

                    <div class="category__table">
                        <table class="table-integral">
                            <?php while (have_rows('specific')): the_row();
                                $name = get_sub_field('name'); $val = get_sub_field('value'); ?>
                                <tr><td><?= $name ?> </td><td><?= $val ?></td></tr>
                            <?php endwhile; ?>
                        </table>
                    </div>

                <?php endif; ?>

                <div class="category__text" style="line-height: 20px;">
                    <?php the_content(); ?>
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
    <?php if(get_field('form')) get_template_part( 'template/form' ); ?>
    <?php if(get_field('maps')) get_template_part( 'template/map' ); ?>

    <?php get_footer(); ?>
