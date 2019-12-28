<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page_title">
                <div class="flote-left">
                    <h2>年次実績</h2>
                </div>
                <div class="">
                    <span><h2 class="d-inline"><?php echo e($date->year); ?> 年</h2></span>
                </div>
                <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <table class="table table-bordered table-year">
                <thead>
                    <tr>
                        <th></th>
                        <?php for($i = 1; $i <= 12 ; $i++): ?>
                        <th class="text-center w-month"><?php echo e($i); ?>月</th>
                        <?php endfor; ?>
                    </tr>
                </thead>
                <tbody>
                    <tr> <!-- 配列で表示する ひとまずダミーデータ-->
                        <th class="text-center">収  入</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <td class="text-right"><?php echo e(number_format($income[$i])); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th class="text-center">支  出</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <td class="text-right"><small>▲</small><?php echo e(number_format($expenses[$i])); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th class="text-center">貯  金</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <td class="text-right"><?php echo e(number_format($difference[$i])); ?></th>
                        <?php endfor; ?>
                    </tr>
                    <tr>
                        <th class="text-center">累  計</th>
                        <?php for($i = 1;$i <= 12;$i++): ?>
                        <td class="text-right"><?php echo e(number_format($total[$i])); ?></th>
                        <?php endfor; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/actual/by_year.blade.php ENDPATH**/ ?>