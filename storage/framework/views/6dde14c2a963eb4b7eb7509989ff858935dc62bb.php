<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page_title">
                <div class="flote-left">
                    <h2>収支編集</h2>
                </div>
            </div>
            <?php echo $__env->make('components.form',['btn_text' => '更新','action' => '/actual/edit'.'/'.$param->id], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/actual/edit.blade.php ENDPATH**/ ?>