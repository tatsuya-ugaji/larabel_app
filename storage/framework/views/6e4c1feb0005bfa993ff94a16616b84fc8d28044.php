<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page_title">
                <div class="flote-left">
                    <h2>月次予実</h2>
                </div>
                <div class="">
                    <span><h3 class="d-inline"><?php echo e($date->year); ?> 年 <?php echo e($date->month); ?> 月</h3></span>
                </div>
                <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th></th><th>予算</th><th>実績</th><th>差額</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <?php if($item[1] > 0 or $item[2] > 0): ?>
                        <td class="text-center"><?php echo e($item[0]); ?></td>
                        <td class="text-right">
                            <?php if($item[4] == 1): ?>
                                ▲
                            <?php endif; ?>
                            <?php echo e(number_format($item[1])); ?>

                        </td>
                        <td class="text-right">
                            <?php if($item[4] == 1): ?>
                                ▲
                            <?php endif; ?>
                            <?php echo e(number_format($item[2])); ?>

                        </td>
                        <td class="text-right">
                            <?php echo e(number_format($item[3])); ?>

                        </td>
                        <?php endif; ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center">合計</td>
                        <td class="text-right"><?php echo e(number_format($total['b_total'])); ?></td>
                        <td class="text-right"><?php echo e(number_format($total['a_total'])); ?></td>
                        <td class="text-right"><?php echo e(number_format($total['d_total'])); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/actual/by_month.blade.php ENDPATH**/ ?>