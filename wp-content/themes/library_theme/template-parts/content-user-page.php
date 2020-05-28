<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

?>

<div class="profil-container">
	<div class="header-profil">
		<?php $current_user = wp_get_current_user();

$user_name = $current_user->user_login;
$user_email = $current_user->user_email;?>
		<h2>Личные данные:</h2>
		<li><?php echo $user_name; ?></li>
		<li><?php echo $user_email; ?></li>
		<li><?php wp_loginout(); ?></li>
	</div>
	<div class="user-info">
		<img src="<?php echo get_template_directory_uri();?>/assets/images/images.jpg" alt="">
		<div class="user-content">
			<div class="subject-card">
				<p>Информатика</p>
			</div>
			<div class="subject-card">
				<p>Дизайн</p>
			</div>
			<div class="subject-card">
				<p>История</p>
			</div>
			<div class="subject-card">
				<p>Английский язык</p>
			</div>
			<div class="subject-card">
				<p>Немецкий язык</p>
			</div>
			<div class="subject-card">
				<p>Француский язык</p>
			</div>
		</div>
	</div>
</div>