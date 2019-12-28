<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <?php if($detect->isMobile() || $detect->isTablet()): ?>
                <div class="flote-left">
                    <h2>ホーム</h2>
                </div>
                <div class="row justify-content-between mb-3">
                    <div class="col-6">
                        <h3><?php echo e($date->year); ?>年<?php echo e($date->month); ?>月</h3>
                    </div>
                    <div class="col-4  text-right">
                        <a href="/actual/register" class="btn btn-pink">入力する</a>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <h3>今月の支出</h3>
                </div>
                <div class="col-12 text-center mb-3">
                    <h1 class="">￥<?php echo e(number_format($total)); ?></h1>
                </div>
                <div class="row justify-content-between">
                    <form class="col-12" action="/home" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>

                    <div class="col-4"></div>
                </div>
                <?php else: ?>
                <div class="flote-left">
                    <h2>ホーム</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h3><?php echo e($date->year); ?>年<?php echo e($date->month); ?>月</h3>
                    </div>
                    <div class="col-4 text-center">
                        <h3>今月の支出</h3>
                    </div>
                    <div class="col-4  text-right">
                        <a href="/actual/register" class="btn btn-pink">入力する</a>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <form class="col-4" action="/home" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
                    <div class="col-4 text-center">
                        <h1 class="">￥<?php echo e(number_format($total)); ?></h1>
                    </div>
                    <div class="col-4"></div>
                </div>
                <?php endif; ?>
            </div>
            <?php echo $__env->make('components.table',['bp' => 'actual'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/home.blade.php ENDPATH**/ ?>