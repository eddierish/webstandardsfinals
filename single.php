<?php get_header(); ?>
	<article>
		<h1>BLOG TEMPLATE</h1>

		<a href="<?php echo bloginfo('wpurl'); ?>/blog/">back to blog</a>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <div class="post">
			<h1><?php the_title(); ?></h1>
			<div class="content">
			  <?php the_content(); ?>
			</div>
		  </div>
		<?php endwhile; endif; ?>

	</article>
	<aside>
		ASIDE
	</aside>
<?php get_footer(); ?>