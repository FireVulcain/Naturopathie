<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Primer
 * @since   1.0.0
 */

get_header(); ?>
<div class="header">
    <div class="container">
        <nav id="navigation-principale" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
        </nav>
    </div>
</div>
<div class="site-content">
    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content' ); ?>

                <?php primer_post_nav(); ?>

                <?php if ( comments_open() || get_comments_number() ) : ?>

                    <?php comments_template(); ?>

                <?php endif; ?>

            <?php endwhile; ?>

        </main><!-- #main -->

    </div><!-- #primary -->
</div>


<?php get_sidebar(); ?>

<?php get_sidebar( 'tertiary' ); ?>

<?php get_footer(); ?>
