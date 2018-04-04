<?php 
/*
    Template Name: Accueil
*/
?>
<?php get_header(); ?>
    <!-- NAV MENU -->
    <div class="header">
        <div class="container">
            <nav id="navigation-principale" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
            </nav>
        </div>
    </div><!-- ./end NAV MENU-->

    <header id="masthead" class="site-header" role="banner">
        <a href = "index.php">
            <img src = "<?php echo get_stylesheet_directory_uri(); ?>/img/logo-typo.png" alt = "logo" title="logo">
        </a>
        <?php
        /**
         * Render the video header element
         *
         * @hooked primer_video_header - 5
         *
         * @since 1.7.0
         */
        do_action( 'primer_before_header_wrapper' );


        ?>

        <div class="site-header-wrapper">

            <?php

            /**
             * Fires inside the `<header>` element.
             *
             * @hooked primer_add_site_title - 5
             * @hooked primer_add_hero - 7
             *
             * @since 1.0.0
             */
            do_action( 'primer_header' );

            ?>
        </div><!-- .site-header-wrapper -->

        <?php

        /**
         * Fires inside the `<div class="site-header-wrapper">` element.
         *
         * @since 1.0.0
         */
        do_action( 'primer_after_site_header_wrapper' );

        ?>

    </header><!-- #masthead -->


    <div id="content" class="site-content">

        <div class="definition">
            <h2 class="definition__title">La Naturopathie</h2>
            <p class="definition__text">
                La naturopathie est un système médical complet et cohérent qui mise avant tous sur la stimulation des mécanismes naturels d’autoguérison du corp.
                Les intervention du naturopathe visent en premier lieu a activer, nourrir et renforcer ces mécanismesplutôt qu’a éliminer les symptômes ou attaquerdirectement des agents pathogènes. Elles se veulent aussi douces et non
                effratives que posible.
            </p>
            <a href="index.php/la-naturopathie" class="savoirPlus">En savoir plus</a>
        </div>

        <section class="article">
            <article>
                <div class="row">
                    <?php
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('posts_per_page=3' . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                            <div class="articleList">
                                <h2>
                                    <a href="<?php the_permalink(); ?>" class="article__title" title="Read more"><?php the_title(); ?></a>
                                </h2>
                                <p class="article__content">
                                    <?php the_excerpt(); ?>
                                </p>

                                <p class="article__savoirPlus">
                                    <a class="button savoirPlus" href="<?php the_permalink(); ?>">
                                        Lire la suite
                                    </a>
                                </p>
                            </div>
                    <?php endwhile; ?>
                </div>
            </article>
        </section>



        <section class="apropos">
            <img class="photo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Photo_Nelly.png" />
            <a href="index.php/qui-suis-je">
                <div class="description">
                    <p class="title">Nelly Violette</p>
                    <p class="subtitle">Naturopathe</p>
                    <p class="description__texte">

                            Passioné de santé, médecine, nutrition et des sciences dans leur ensemble, j'ai toujours été fasciné par le pouvoir de guérison et la capacité d'adaptibilité du corps humain.

                    </p>
                </div>
            </a>
        </section>

        <section class="consultations">
            <h3 class="consultations__title">Consultations</h3>
            <p class="consultations__lieu">À domicile</p>
            <p class="consultations__horaire">Horaires: 9h-18h</p>
            <p class="consultations__list">Déroulement</p>
            <p class="consultations__type">Bilan de vitalité | Anamnèse | Fiche de conseil</p>
            <a href="index.php/consultation" class="savoirPlus">En savoir plus</a>
        </section>

<?php get_footer(); ?>