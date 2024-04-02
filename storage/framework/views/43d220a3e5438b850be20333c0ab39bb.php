<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <div class="container m-5">
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/poto_1.jpg')); ?>" alt="image">
        <h1>halo ini jaki</h1>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Asus\Documents\sekolah\Semester 4\framework s4\praktikum_4\routing\resources\views/welcome.blade.php ENDPATH**/ ?>