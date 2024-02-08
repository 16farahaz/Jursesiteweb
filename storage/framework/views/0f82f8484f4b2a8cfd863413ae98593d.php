<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keynotes | JURSE 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <style>
        body {
            font-family: 'figtree', sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar a {
            color: #ffffff;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ffffff;
            color: #343a40;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 15;
            font-size: 14px;
            font-weight: bold;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media (max-width: 768px) {
            .navbar a, .dropdown .dropbtn {
                float: none;
                width: 100%;
                text-align: left;
            }
        }

        .table-container {
            max-width: 800px;
            margin: 20px auto;
        }

        .table-container img {
            max-width: 50px;
            height: auto;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">JURSE 2024</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/Ajout')); ?>">Ajouter un nouveau speaker</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="table-container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th class="text-center">Images</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Website</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $speakers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img src="<?php echo e(asset($speaker->image)); ?>" class="img img-responsive" alt="<?php echo e($speaker->nom); ?>" />
                        </td>
                        <td><?php echo e($speaker->nom); ?></td>
                        <td><?php echo e($speaker->siteweb); ?></td>
                        <td>
                            <a href="/update/<?php echo e($speaker->id); ?>" class="btn btn-primary">Modifier</a>
                            <form action="/delete/<?php echo e($speaker->id); ?>" method="post" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this speaker?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jur\resources\views/keynotespeaker/index.blade.php ENDPATH**/ ?>