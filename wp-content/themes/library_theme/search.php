<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package init
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<h1>Поиск по: "<?php echo $_GET['s'];?>"</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="book-card">
			<?php the_post_thumbnail(); ?>
			<div class="book-info">
				<?php the_content(); ?>
				<a href="#">Добавить в карзину</a>
			</div>	
		</div>
		</div>
	 	<?php endwhile; else: ?>
		 	<p>Поиск не дал результатов.</p>
 		<?php endif;?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
