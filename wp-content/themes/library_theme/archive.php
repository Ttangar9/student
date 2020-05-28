<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
