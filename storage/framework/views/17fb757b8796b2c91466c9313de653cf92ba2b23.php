<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <!-- <div class="">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                You are logged in!
            </div> -->
            <div class="flote-left">
                <h1>ホーム</h1>
            </div>
            <div class="row justify-content-between text-center">
                <div class="col-4">
                    <?php echo e($date->year); ?>年<?php echo e($date->month); ?>月
                </div>
                <div class="col-4">
                    今月の支出
                </div>
                <div class="col-4">
                    <a href="/actual/register" class="btn btn-outline-dark">入力する</a>
                </div>
            </div>
            <div class="text-center">
                <h1>￥<?php echo e($total); ?></h1>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>日付</th><th>カテゴリ</th><th>金額</th><th>備考</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $actuals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="<?php echo e(url('/actual/edit/'.$actual->id )); ?>"><?php echo e($actual->actual_date); ?></a></td>
                        <td class="text-center"><?php echo e($actual->category); ?></td>
                        <td class="text-right"><?php echo e(number_format($actual->amount)); ?></td>
                        <td><?php echo e($actual->remarks); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views//home.blade.php ENDPATH**/ ?>