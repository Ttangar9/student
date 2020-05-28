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
<section class="news-container">
	<?php $cat_news_id = get_cat_ID('Новости'); 
		$cat_news_name = get_cat_name($cat_news_id);?>
	<h1><?php echo $cat_news_name ?></h1>
	<?php if(have_posts() ) :query_posts(array('cat' => $cat_news_id, 'posts_per_page'=>'4')); ?>
	<?php while(have_posts() ):the_post(); ?>
	<div class="news-card">
		<h2><?php the_title() ?></h2>
		<?php the_excerpt(); ?>
		<?php the_post_thumbnail(); ?>
		<a href="<?php echo the_permalink();?>">Прочитать</a>
	</div>
<?php endwhile;endif;wp_reset_query(); ?>
</section>
