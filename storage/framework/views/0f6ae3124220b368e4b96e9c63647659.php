

<?php $__env->startSection('content'); ?>
<style>
    .center-text {
        text-align: center;
    }
</style>
    <form action="<?php echo e(route('tambah.store')); ?>" method="POST" class="card p-5">
        <?php echo csrf_field(); ?>
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
        <div class="center-text mb-4">
            <h1 >Masukan Data Siswa</h1>
        </div>
        <div class="mb-3 row">
            <label for="nis" class="col-sm-2 col-form-label">Nis Siswa :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nis" name="nis">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Siswa :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mapel" name="mapel">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="nilai" class="col-sm-2 col-form-label">Nilai Siswa : </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="nilai" name="nilai">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aria\PKL\web-ujian\resources\views/tambah/create.blade.php ENDPATH**/ ?>