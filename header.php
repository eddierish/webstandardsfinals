<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php
           wp_title( '|', true, 'right' );
           bloginfo('name');
           // Add the blog description for the home/front page.
           $site_description = get_bloginfo('description', 'display');
           echo " | $site_description";
            ?>
        </title>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <header class="masthead">
                <div class="inset">
                    <!-- <h1><?php bloginfo('name'); ?></h1>
                    <h2><?php bloginfo('description'); ?></h2> -->
                </div>
            </header>

                <nav class="main">

                    <div class="inset">

						<i class="fa fa-bars" aria-hidden="true"></i>

                          <div class="links">
							  <?php
					 wp_nav_menu(array(
					   'theme_location' => 'main_menu', // menu slug from step 1
					   'container' => false // 'div' container will not be added
					 ));
					  ?>
                         </div>
                    </div>
                </nav>


            	    <div class="inset">