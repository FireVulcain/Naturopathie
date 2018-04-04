<?php
/*
    Template Name: Qui suis-je ?
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

<!-- Bandeau -->
<div class="bandeau"></div>

<div id="content" class="site-content">
    <h1 class="page__title">Nelly Violette</h1>

    <p class="name__description">
        Naturopathe  depuis janvier 2018, je me déplace a domicile pour établir votre bilan de vitalité et optimiser
        votre santé. Quelques soit la pathologie dont vous souffrez , la naturopathie vous accompagne pour en soulager
        les symptômes tout en améliorant votre état général.
    </p>


    <div class="about">
        <h3 class="about-me">À propos de moi</h3>
        <img class="about__photo" src = "<?php echo get_stylesheet_directory_uri()?>/img/Photo_Nelly_2.png" alt = "nelly-violette" title="nelly-violette">
        <p class="about-me__description">
            Au cours d'une hospitalisation à l'âge de 9 ans, j'ai pris conscience que la santé était un cadeau dont il fallait
            prendre soin. <br><br>
            Quelques années plus tard, bien qu'attirée par la médecine, je ne me suis pas engagée dans cette voie,
            car je la trouvais: trop centrée sur l'étude de la maladie et pas assez sur les conditions de la bonne santé. <br><br>
            À cette époque, j'ignorais l'existence de la profession de « praticien de santé naturopathe »
        </p>
    </div>


    <div class="parcours">
        <h3 class="mon-parcours">Mon parcours</h3>
        <p class="mon-parcours__description">
            A l'âge de 25 ans, quand j'étais jeune maman, je fus confrontée aux pathologie ORL chronique de ma fille et la succession
            des traitements antibiotiques m'inquiétait profondément. <br><br>
            C'est pourquoi, je me suis tournée les medecines non-conventionelles et c'est un naturopathe qui m'a éxpliqué le lien entre
            la maladie de ma fille et son alimentation. <br><br>
            Après 2 semaines de régime adapté et sans aucun traitement, les symptômes présents depuis 5 ans avaient disparu !
            <br><br>
            Dès lors, je me lançais dans la lecture de nombreux ouvrages sur l'alimentation, à la recherche du régime idéal... Avant
            de m'avouer complètement perdue ! <br><br>
            Toutes ces théories semblaient bien fondées et avaient fait leurs preuves. Mais il m'était impossible d'en faire une
            synthèse. Malgré tout, je n'abandonnais pas ma quête du Graal et je testais en permanence l'une ou l'autre de ces théories
            alimentaires.
            <br><br>
            Un jour, j'ai rencontré le livre de Dominick Léaud-Zachoval: « La naturopathie au quotidien » qui éxplique comment rester en bonne
            santé grâce à des gestes simple.
        </p>
    </div>


    <h3 class="me-contacter">Me contacter</h3>
    <?php echo do_shortcode( '[contact-form-7 id="65" title="Formulaire de contact"]' ); ?>

<?php get_footer(); ?>


