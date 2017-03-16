<?php get_header(); ?>
<div class="full">
<img  src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/slideshow/image05.jpg">
</div>
<div class="hoops">


    [PAGE template]
  <main class="art">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; endif; ?>
  </main>
  <aside class="side">
    <h3>THIS IS THE HEADING</h3>
	  <p> side Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </aside>
</div>
<?php get_footer(); ?>
