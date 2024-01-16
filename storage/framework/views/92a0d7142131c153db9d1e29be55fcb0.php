


<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <h1>Data Ujian</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tambah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->nis); ?></td>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->mapel); ?></td>
                            <td><?php echo e($item->nilai); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aria\PKL\web-ujian\resources\views/tambah/index.blade.php ENDPATH**/ ?>