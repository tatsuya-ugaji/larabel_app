<table class="table table-bordered">
    <thead>
        <tr class="text-center">
            <th>日付</th>
            <th>カテゴリ</th>
            <th>金額</th>
            <?php if($detect->isMobile() || $detect->isTablet()): ?>
            <?php else: ?>
            <th>備考</th>
            <?php endif; ?>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center">
                <a href="<?php echo e(url('/'.$bp.'/edit/'.$item->id )); ?>">
                    <?php if($detect->isMobile() || $detect->isTablet()): ?>
                    <?php
                        $i = substr($item->actual_date,-2)
                    ?>
                        <?php echo e($i); ?>日
                    <?php else: ?>
                    <?php echo e($item->actual_date); ?>

                    <?php endif; ?>
                </a>
            </td>
            <td class="text-center"><?php echo e($item->category); ?></td>
            <td class="text-right">
                <?php if($item->bp_flg == 1): ?>
                    <small>▲</small>
                <?php endif; ?>
                <?php echo e(number_format($item->amount)); ?>

            </td>
            <?php if($detect->isMobile() || $detect->isTablet()): ?>
            <?php else: ?>
            <td><?php echo e($item->remarks); ?></td>
            <?php endif; ?>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /home/vagrant/code/App/resources/views/components/table.blade.php ENDPATH**/ ?>