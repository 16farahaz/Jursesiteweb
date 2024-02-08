<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Speaker</title>
   
</head>
<body>

<div class="container mt-5">
    <h2>Update Speaker</h2>

    <form action="/update/<?php echo e($speaker->id); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <!-- Vos champs de formulaire pour la mise à jour -->
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="<?php echo e($speaker->nom); ?>">
        </div>

        <div class="mb-3">
            <label for="des" class="form-label">Description</label>
            <input type="text" class="form-control" id="des" name="des" value="<?php echo e($speaker->des); ?>">
        </div>

        <div class="mb-3">
            <label for="siteweb" class="form-label">Site web</label>
            <input type="text" class="form-control" id="siteweb" name="siteweb" value="<?php echo e($speaker->siteweb); ?>">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image"  value="<?php echo e($speaker->image); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\jur\resources\views/keynotespeaker/update.blade.php ENDPATH**/ ?>