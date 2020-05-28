<?php
/**
 * The template for displaying all pages
 *
 * This is the template that display news page by default.
 * Please note that this is the WordPress construct of news page
 * and that other 'page' on your WordPress site may use a
 * different template.
 *
 *
 * @package init
 */?>
<section class="services-container">
	<?php $cat_book_id = get_cat_ID('Полезные сайты для студентов'); ?>
	<?php $cat_book_name = get_cat_name($cat_book_id); ?>
	<h1><?php echo $cat_book_name; ?>
	</h1>
	<div class="services-cards">
		<?php if (have_posts() ) : query_posts( array('cat' => $cat_book_id) );?>
		<?php while(have_posts() ) :the_post(); ?>
		<div class="services-card">
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>	
		</div>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</section>

