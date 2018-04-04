<?php

get_header(); ?>

<!-- NAV MENU -->
<div class="header">
    <div class="container">
        <nav id="navigation-principale" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
        </nav>
    </div>
</div><!-- ./end NAV MENU-->

<div class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

                <?php primer_pagination(); ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->

    </div><!-- #primary -->

    <?php get_footer(); ?>
</div>
