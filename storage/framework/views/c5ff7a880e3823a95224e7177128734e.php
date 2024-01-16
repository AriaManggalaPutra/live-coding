<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Ujian</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
              <a class="navbar-brand" href="#">Web Ujian </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('tambah.index')); ?>">Ujian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('siswa.index')); ?>">Data Berdasarkan Siswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('mapel.index')); ?>">Data Berdasarkan Mapel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('tambah.create')); ?>">Tambah Data</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <div class="container mt-5">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

        <?php echo $__env->yieldPushContent('script'); ?>
    </body>
</html><?php /**PATH D:\Aria\PKL\web-ujian\resources\views/layouts/template.blade.php ENDPATH**/ ?>