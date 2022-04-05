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
	<style>
		.error_404
		{
			margin-top: 210px;
			padding-bottom: 210px;
			font-size:30px;
			font-family: Roboto-BoldCondensed;
			text-transform: uppercase;
			text-align: center;
		}
		.mini_404
		{
    margin-top: 15px;
    font-size: 14px;
    font-family: Roboto-Condensed;
    text-transform: uppercase;
    text-align: center;
    padding-left: 65px;
		}
		.berror
		{
			
		}
	</style>
<div class="berror">
<div class="error_404">
	<div class="container">

	Ошибка 404
<div class="mini_404">Страница не найдена или удалена</div>		
	</div>

</div>
</div>


<?php get_footer(); ?>