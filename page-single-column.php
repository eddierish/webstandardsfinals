<?php
// Template Name: Single Column
get_header(); ?>
	<article class="single">
		<h1>SINGLE COLUMN TEMPLATE</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  <div class="post">
			<h1><?php the_title(); ?></h1>
			<div class="content">
			  <?php the_content(); ?>
			</div>
		  </div>
		<?php endwhile; endif; ?>
	</article>
<?php get_footer(); ?>