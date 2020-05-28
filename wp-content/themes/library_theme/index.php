<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *

 * @package library
 */
$url = get_template_directory_uri();
$user_id = get_current_user_id();
if ($user_id== false) {
	$url_login= wp_login_url();
	wp_redirect($url_login);
exit;
}else{
	$user = get_userdata( $user_id );
	$user_name = $user->user_login;
	$user_email = $user->user_email;
	$user_last_name = $user->user_last_name;
}
get_header();
?>
<section class="statistic-site-container" style="">
	<h2>www.students.by</h2>
	<p>«Students.by» – это безопасный онлайн-сервис помощи студентам. </p>
	<ul>
		<li><p>2548</p><p>Студентов</p></li>
		<li><p>578</p><p>Резюме</p></li>
		<li><p>25</p><p>Работадателей</p></li>
	</ul>
	<?php if ($user_id == "") {
		echo wp_loginout();
	} ?>
</section>
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



<!-- ======news========== -->
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

<?php get_footer(); ?>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
