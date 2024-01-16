

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Mata Pelajaran: <?php echo e($jenisMapelMatematika); ?></h5>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Nama Siswa</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mapelMatematika; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->nis); ?></td>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->nilai); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<br>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Mata Pelajaran: <?php echo e($jenisMapelProduktif); ?></h5>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Nama Siswa</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mapelProduktif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->nis); ?></td>
                    <td><?php echo e($item->nama); ?></td>
                    <td><?php echo e($item->nilai); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aria\PKL\web-ujian\resources\views/mapel/index.blade.php ENDPATH**/ ?>