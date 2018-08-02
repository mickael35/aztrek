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
            <em><?php echo $depart["date_depart"]; ?> Date depart</em>                
            <br>
            <em><?php echo $depart["prix"]; ?> prix</em>                
            <br>
            <em><?php echo $depart["nb_place"]; ?> Nb de places</em>
            <form action="insert_reservation.php" method="post">
                <input type="hidden" name="depart_id" value="<?php echo $depart["id"]; ?>">
                <input type="hidden" name="sejour_id" value="<?php echo $sejour["id"]; ?>">
                <input type="number" name="nb_personne">
                <input type="submit">
            </form>
        </article>
        <hr>
    <?php endforeach; ?>

</section>
<?php get_footer(); ?>