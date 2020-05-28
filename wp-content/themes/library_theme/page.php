<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
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

	<div id="primary" class="main-block_pages">
		<?php if (is_page('Контакты')) {
			while(have_posts()) :the_post();
			get_template_part( 'template-parts/contact', 'page' );
		endwhile;
		}else if(is_page('Новости')){
			get_template_part('template-parts/content', 'news-page');
		}else if(is_page('Сервисы')){
			get_template_part('template-parts/content','services');
		}else if(is_page('Личный кабинет')){
			get_template_part('template-parts/content','user-page');
		}
		?>
	</div><!-- #primary -->

<?php
get_footer();?>
