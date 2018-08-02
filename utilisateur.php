<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$utilisateur = getOneEntity("utilisateur", $id);
$list_participations = getAllParticipationsByUtilisateur($id);

get_header($utilisateur["prenom"] . " " . $utilisateur["nom"]);
?>

<section class="container">
    <h1><?php echo $utilisateur["prenom"] . " " . $utilisateur["nom"]; ?></h1>
    
    <aside class="list-users">
        <?php foreach ($list_participations as $participation) : ?>
            <article>
                <img src="uploads/<?php echo $participation["image"]; ?>" alt="">
                <div>
                    <a href="project.php?id=<?php echo $participation["projet_id"]; ?>">
                        <?php echo $participation["titre"]; ?>
                    </a>
                    <em><?php echo $participation["montant"]; ?> €</em>
                </div>
            </article>
        <?php endforeach; ?>
    </aside>
    
</section>

<?php get_footer(); ?>