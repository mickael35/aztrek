<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_pays = getAllEntities("pays");

get_header("Accueil");
?>

<section class="owl-carousel" id="main-slider">
    <article class="item">
        <img src="./uploads/photo_guatemala.jpg" alt="">
    </article>
    <article class="item">
        <img src="./uploads/photo_honduras.jpg" alt="">
    </article>
    <article class="item">
        <img src="./uploads/photo_salvador.jpg" alt="">
    </article>
</section>

<div class="main-content container">

    <section class="destinations">

        <!--  SEJOURS  -->
        <h2 class="title_destinations">Nos destinations</h2>

        <?php foreach ($list_pays as $pays) : ?>
            <section class="sejour">
                <a href="#" class="sejour-home-visuel">
                    <img src="uploads/<?php echo $pays["photo"]; ?>" alt="">
                </a>
                <div class="sejour-home-pres">
                    <article class="sejour-home-infos">
                        <h3 class="title-sejour"><?php echo $pays["nom"]; ?></h3>
                        <p><?php echo $pays["description"]; ?></p>
                    </article>
                    <nav class="sejour-home-ctc">
                        <a href="#" class="detail-sejour">Voir Plus</a>
                    </nav>
                </div>
            </section>
        <?php endforeach; ?>

    </section>

    <aside class="aside">

        <!--  COMMUNAUTE  -->
        <h2 class="title_partage">Pour le partage</h2>

        <section class="partage">
            <h3>Communauté</h3>
            <h3>Récits de voyages</h3>
            <p>Je vous laisse ci-dessous mon petit carnet de voyage au Costa Rica, en espérant qu’il puisse être utile à d’autres
                après moi. Je suis parti seul de Paris et sac au dos, en utilisant les transports en commun. J’avais beaucoup
                préparé mon voyage en amont pour établir.......</p>
            <h3>Avis</h3>
            <p> COSTA RICAS Martine, 69 ans, TOULOUSE, publié le 26/06/2018 Date du voyage : juin 2018 très satisfaite de notre
                voyage: du très haut de gamme,(que nous n'attendions pas !)...
            </p>


            <h3>Photos</h3>
            <img src="images/communaute_photo.png" alt="">
            <h3>Matériel Randonnée</h3>
            <img src="images/image_matériel_randonnee.png" alt="">
        </section>

    </aside>

</div>
<?php get_footer(); ?>

