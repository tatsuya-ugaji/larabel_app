<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="flote-left">
                <h1>月次予実</h1>
            </div>
            <div class="">
                <span><h2 class="d-inline"><?php echo e($year); ?> 年</h2></span>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <?php for($i = 1; $i <= 12 ; $i++): ?>
                        <th><?php echo e($i); ?>月</th>
                        <?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr> <!-- 配列で表示する ひとまずダミーデータ-->
                        <th>収入</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <th><?php echo e($i); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th>支出</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <th><?php echo e($i); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th>貯金</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <th><?php echo e($i); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th>累計</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <th><?php echo e($i); ?></th>
                        <?php endfor; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/MyApp/resources/views/actual/by_year.blade.php ENDPATH**/ ?>