<?php
require_once '../../../model/database.php';

$list_sejours = getAllEntities("sejour");

require_once '../../layout/header.php';
?>

<h1>Ajouter un séjour</h1>

<form action="insert_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Séjour</label>
        <div class="col-sm-10">
            <select name="sejour_id" class="form-control">
                <?php foreach ($list_sejours as $sejour) : ?>
                    <option value="<?php echo $sejour["id"]; ?>">
                        <?php echo $sejour["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">date depart</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" class="form-control" placeholder="date">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" min="1" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">nombre de places</label>
        <div class="col-sm-10">
            <input type="number" name="nb_place" min="1" class="form-control" placeholder="date">
        </div>
    </div>
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

