<?php
/*
    Template Name: Coaching & conférence
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

<div class="bandeau"></div>
<div id="content" class="site-content">
    <h1 class="page__title">Coach & Conférences</h1>

    <h2 class="coach">Coach alimentaire</h2>
    <p class="coach__description">
        Le but de ce cours est de présenter les bases de <b>l’alimentaion équilibrée</b> pour développer une compréhension plus
        profonde des choix alimentaires que nous faisons. Vous serez ainsi capables de mettre en oeuvre des changement
        durables qui permetront améliorer votre qualité de vie ainsi que celle de vos proches. <br><br>
        Je vous propose un coaching en <b>4 scéances d’1h30</b> chacune, pour intégrer les bases de <b>l’alimentation saine</b>
        et passer de la théorie à la pratique <br><br>

    </p>

    <div class="coaching">
        <div class="bloc">
        <span class="program__list">
            Au programme: <br><br>
        </span>
            <ul>
                <li><span class="seance">Séance 1</span>: priorités et basiques en matière de nutrition.</li>
                <li><span class="seance">Séance 2</span>: shopping en boutique pour remplir judicieusement votre panier.</li>
                <li><span class="seance">Séance 3</span>: composition de menus pour tous les jours ou pour recevoir.</li>
                <li><span class="seance">Séance 4</span>: réalisation de recettes.</li>
            </ul>
        </div>
        <img class="repas_coach" src = "<?php echo get_stylesheet_directory_uri() ?>/img/coach_alimentaire.png" alt = "repas" title="repas">
    </div>


    <div class="conference">
        <h3 class="conference__title">Conférences</h3>
        <p class="about-me__description">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>
        <img class="conference_micro" src = "<?php echo get_stylesheet_directory_uri() ?>/img/conference.png" alt = "micro" title="micro">
    </div>


<?php get_footer(); ?>


