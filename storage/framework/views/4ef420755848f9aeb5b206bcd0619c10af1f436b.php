<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>予算</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h3><?php echo e($date->year); ?>年<?php echo e($date->month); ?>月</h3>
                    </div>
                </div>
                <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo $__env->make('components.table',['bp' => 'budget'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/budget/show.blade.php ENDPATH**/ ?>