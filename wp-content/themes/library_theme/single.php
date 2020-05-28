<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package init
 */

get_header();
?>

	<section class="news-container">
        <main id="main" class="site-main">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="news-card">
                <?php
                    get_template_part( 'template-parts/content-page', get_post_type() );
                    the_post_navigation();
                ?>
            </div>
            <?php endwhile; endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
