<?php
require_once '../../../model/database.php';

$destinations = getAllEntities("pays");

require_once '../../layout/header.php';
?>

    <h1>Ajout d'un séjour</h1>

    <form action="create_query.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label>Catégorie</label>
            <select name="destination_id" class="form-control">
                <?php foreach ($destinations as $destination) : ?>
                    <option value="<?php echo $destination["id"]; ?>">
                        <?php echo $destination["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Durée</label>
            <input type="text" name="duree" class="form-control" placeholder="Durée" required>
        </div>
        <div class="form-group">
            <label>Prix</label>
            <input type="number" name="prix_base" class="form-control" placeholder="Prix" required>
        </div>
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Ajouter
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>