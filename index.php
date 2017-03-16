<?php get_header(); ?>
<div class="full">
<img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slideshow/image04.jpg">
</div>
<div class="hoops">
	<article class="art">
		<h1>Blog Page</h1>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <div class="post">
			<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="content">
			  <?php the_excerpt(); ?>
			  <p><a href="<?php echo the_permalink(); ?>">Read More</a></p>
			</div>
		  </div>
		<?php endwhile; endif; ?>

	</article>
	<aside class="side">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	</aside>
</div>
<?php get_footer(); ?>