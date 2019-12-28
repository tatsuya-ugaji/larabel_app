<span class="form-row align-items-center mt-1">
    <div class="col-auto">
        <select class="" name="year" id="year">
            <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($date->year == $year): ?>
                <option selected value="<?php echo e($year); ?>"><?php echo e($year); ?>年</option>
                <?php else: ?>
                <option value="<?php echo e($year); ?>"><?php echo e($year); ?>年</option>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <?php if(Request::is('actual/'.$date->year)): ?>
    <?php else: ?>
    <div class="col-auto">
        <select class="" name="month" id="month">
            <?php for($i = 1; $i <= 12 ; $i++): ?>
                <?php if($date->month == $i): ?>
                <option selected value="<?php echo e($i); ?>"><?php echo e($i); ?>月</option>
                <?php else: ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?>月</option>
                <?php endif; ?>
            <?php endfor; ?>
        </select>
    </div>
    <?php endif; ?>
    <div class="col-auto">
        <?php if(Request::is('home')): ?>
        <input type="submit" class="btn-sm btn-pink" value="OK">
        <?php elseif(Request::is('budget/register')): ?>
        <p class="d-inline">まで発生する</p>
        <?php else: ?>
        <button class="btn-sm btn-pink" onclick="date_change();">OK</botton>
        <?php endif; ?>
    </div>
</span>
<?php /**PATH /home/vagrant/code/App/resources/views/components/date_select.blade.php ENDPATH**/ ?>