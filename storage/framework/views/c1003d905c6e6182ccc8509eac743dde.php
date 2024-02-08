<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif; /* Applying the custom font */
        }

        .welcome-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #3498db, #2c3e50);
            color: #ffffff;
            text-align: center;
        }

        .welcome-container a {
            text-decoration: none;
            color: #ffffff;
            margin: 0 10px;
        }
    </style>
</head>
<body class="antialiased">
    <div class="welcome-container">
        <div>
            <h1 class="text-4xl font-bold mb-4">Welcome Admin</h1>
            <?php if(Route::has('login')): ?>
                <div class="mb-4">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/dashboard')); ?>" class="btn">Start your journey</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="btn">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="btn"></a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\jur\resources\views/welcome.blade.php ENDPATH**/ ?>