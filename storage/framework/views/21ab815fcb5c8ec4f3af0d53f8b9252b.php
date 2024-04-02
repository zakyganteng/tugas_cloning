<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group list-group-numbered mt-4">
            
            <a href="<?php echo e(url('/basic_routing')); ?>" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            <a href="<?php echo e(url('/view_route')); ?>" class="list-group-item list-group-item-action">
                View Route
            </a>

        </div>
<?php /**PATH C:\Users\Asus\Documents\sekolah\Semester 4\framework s4\praktikum_4\routing\resources\views/routing.blade.php ENDPATH**/ ?>