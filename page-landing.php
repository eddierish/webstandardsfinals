<?php
// Template Name: Landing/Home page
get_header(); ?>
	<div class="slideshow">

		<?php for ($i=1; $i < 6; $i++) : ?>

		<div class="slide slide<?php echo $i;  ?>">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slideshow/image0<?php echo $i; ?>.jpg">
		</div>

		<?php endfor; ?>
	</div>
	<div class="under">
		<h2>This is my final project and this will be everything I can do.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
	</div>
<?php get_footer(); ?>