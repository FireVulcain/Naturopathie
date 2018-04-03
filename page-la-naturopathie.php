<?php
/*
    Template Name: La naturopathie
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

<div id="content" class="content">
    <h1 class="page__title">La Naturopathie</h1>

    <div class="definition-naturopathie">
        <h2 class="part part__one">Définition</h2>
        <p class="part__one__definition">
            <b>QU’EST CE QUE LA NATUROPATHIE ?</b> <br>
            La naturopathie est une science humaine qui a pour objectifs : <br>
        </p>
        <ul class="definition__benefits">
            <li>De garder les personnes en bonne santé par des moyens naturels</li>
            <li>De jouer un rôle d’éducateur car elle apprend à chaque personne à devenir autonome et à s’auto guérir</li>
            <li>De responsabiliser chaque personne pour qu'elles prennent conscience des lois de causes à effets</li>
            <li>D’accompagner chaque personne pour qu’elle puisse trouver l’harmonie avec elle-même et son environnement</li>
        </ul>

        <div class="techniques-utilise">
            <p  class="technique">
                LES TECHNIQUES UTILISÉES SONT :<br><br>
            </p>

            <ul>
                <li>L’alimentation,</li>
                <li>Les exercices physiques et respiratoires,</li>
                <li>La relaxation, les techniques de visualisation,</li>
                <li>L’hydrologie,</li>
                <li>L’iridologie,</li>
                <li>La phytologie,</li>
                <li>Les soins énergétiques,</li>
                <li>Le rééquilibrage des chakras,</li>
                <li>Les élixirs floraux (de Bach, d’orchidée)</li>
            </ul>
        </div>
        <img class="image-fleur" src = "<?php echo get_stylesheet_directory_uri() ?>/img/conference.png" alt = "micro" title="micro">

    </div>

    <div class="naturopathie-medecine-tradi">
        <h2 class="part part__two">La naturopathie & <br> les médecines traditionnelles</h2>

        <div class="oms">
            <div class="bandeau text-over"></div>
            <p class="part__two__text">
                L’Organisation Mondiale de la Santé (OMS) reconnaît 3 médecines traditionnelles :<br><br>
            </p>
            <ul>
                <li>La naturopathie (ou médecine traditionnelle occidentale)</li>
                <li>La Médecine Traditionnelle Chinoise</li>
                <li>L’Ayurveda (Médecine Traditionnelle Indienne).</li>
            </ul>
        </div>

        <br><br>

        <p class="medecine-tradi">

            La grande majorité des naturopathes ne sont pas médecins, mais ont suivi un cursus d’études de 3 à 4 ans.
            Il n’existe pas de diplôme d’état, mais les écoles sérieuses sont regroupées au sein de la FENAHMAN (Fédération Française des Ecoles de Naturopathie)
            et agréées OMNES, qui certifient que leurs diplômés ont étudié l’anatomie, la physiologie, les remèdes naturels,
            les cures, les techniques manuelles etc. à un degré nécessaire et suffisant au bon exercice de leur pratique.

            <br><br>

            La naturopathie est une approche <b>globale</b> de terrain: le client est interrogé sur ses antécédants personelles
            et familliale et ses habitude de vie et notamment sur le fonctionnement de l'ensemble des système du client et pas
            uniquement sur ses symptômes.Une large part de la consultation est consacrée au dialogue avec le consultant
            (l’anamnèse), qui est complété par une série d’observations (iridologie, morphopsychologie, pouls, etc...)

            <br><br>

            Le naturopathe n’établit pas de diagnostic (réservé aux médecins), mais on établit un bilan de vitalité
            qui lui permet de choisir le type de cure à proposer à son consultant (drainage, détoxification, revitalisation...)
            et les grandes orientations de son accompagnement.
        </p>
    </div>


    <div class="difference_naturo">
        <h2 class="part part__three">Naturothérapie vs naturopathie</h2>
        <p class="part__three__text">

            La naturothérapie est une <b>science</b> qui regroupe une multitude de connaissances et de techniques qui permettent
            au thérapeute de choisir le traitement le plus efficace pour son client.

            <br><br>

            LA DIFFÉRENCE ENTRE LA NATUROPATHIE ET LA NATUROTHÉRAPIE.

            <br><br>
        </p>
            <div class="versus">

                <div class="versus__naturopathie">
                    <b>La naturopathe</b>, tout comme le naturothérapeute, cherche à stimuler le plus <b>naturellement</b>
                    possible l'organisme pour retrouver l'état de santé.

                    <br><br>

                    Il va stimuler les défences naturelles de l'organisme en proposant des purges, des drainages, un changement
                    d'alimentation et en prescrivant lorsque necessaire, des traitements d'appoints à bases de plantes,
                    oligo-éléments, complément vitaminés.

                    <br><br>

                    Chaque naturopathe pratique également l'oméopathie.
                </div>

                <div class="versus__naturotherapie">
                    <b>La naturothérapie</b> va plus loin. En plus de recourir au principes de la nature pour aider son patient à
                    retrouver son équilibre bio-culturel et son harmonie.

                    <br><br>

                    Le thérapeute va utiliser des tchniques de soin naturels comme
                    <br>
                    des massage energiques,
                    <br>
                    le Rei-ki,
                    <br>
                    le magnétisme,
                    <br>
                    la kinésiologie, <br>
                    la sophrologie et pleins d'autres thérapie.
                </div>

            </div>

    </div>


    <div class="pourquoi">
        <h2 class="part part__four">Pourquoi la naturopathie ?</h2>
        <p class="solutions">La Naturopathie peut apporter des solutions dans les cas suivants :</p>
        <ul class="solutions__list">
            <li>Douleurs musculaire ou articulaire (arthrose, arthrite, rhumatisme);</li>
            <li>Trouble digestifs (acidité gastrique, ballonements, constipations, etc...);</li>
            <li>Affection ORL, grippes, bronchites, sinusites, migraines, laryngite à répétition;</li>
            <li>Problème de circulation (jambes lourdes, hémoroïde, varices, etc...);</li>
            <li>Problème de peau (acné, eczéma, psoriasis, zona, mycoses, etc...);</li>
            <li>Fatigue chronique, convalescence ou troube du sommeil;</li>
            <li>Anxiété, stress, irritabilité, dépression nerveuse, burn out;</li>
            <li>Asthme, problème respiratoire, allergies;</li>
            <li>Troubles liés à la ménopause, syndrome prémestruel;</li>
            <li>Problème de santé chez les enfants ou les femmes enceintes</li>
        </ul>
    </div>


<?php get_footer(); ?>


