<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *late-partials
 *
 * @package library
 */

?>
	<footer>
		<div class="site-info">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
			<p>Онлайн сервис<br>для студентов</p>
		</div>
		<div class="contact-block">
			<h2>Контакты</h2>
			<p>+375 (25) 716-07-15</p>
			<p>г.Минск, ул Козлова 28</p>
		</div>
	</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
