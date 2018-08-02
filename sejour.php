<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);

$list_departs = getAllDepartsBySejour($id);

get_header($sejour["titre"]);
?>
<section class= "container">
    <h1><?php echo $sejour["titre"]; ?></h1>
  
        <?php foreach ($list_departs as $depart) : ?>
            <article>
                <img src="<?php echo get_avatar($sejour["photo"]); ?>" alt="">
                <div>
                    <a href="sejour.php?id=<?php echo $sejour["id"]; ?>">
                        <h2><?php echo $sejour["titre"]; ?></h2>
                    </a>
                    <em><?php echo $sejour["duree"]; ?> jours</em>                
                    <br>
                    <em><?php echo $sejour["niveau"]; ?> niveau</em>                
                    <br>
                    <em><?php echo $sejour["description_longue"]; ?></em>
                </div>
            </article>
        <?php endforeach; ?>
  
</section>
<?php get_footer(); ?>