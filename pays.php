<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);

$list_sejours = getAllSejoursByPays($id);

get_header($pays["nom"]);
?>
<section class= "container">
    <h2><?php echo $pays["nom"]; ?></h2>

    <section class="grid">
        <?php foreach ($list_sejours as $sejour) : ?>
            <article>
                <img src="uploads/<?php echo $sejour["image"]; ?>" alt="">
                <div>
                    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
                        <h2><?php echo $sejour["titre"]; ?></h2>
                    </a>
                    <em><?php echo $sejour["duree"]; ?> jours</em>                
                    <br>
                    <em><?php echo $sejour["niveau"]; ?> jours</em>                
                    <br>
                    <em><?php echo $sejour["description"]; ?></em>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

</section>
<?php get_footer(); ?>