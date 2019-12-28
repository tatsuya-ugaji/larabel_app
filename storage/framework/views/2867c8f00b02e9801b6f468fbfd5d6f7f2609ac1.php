<div class="col-md-6 col-sm-8 mx-auto" onload="change_bpflg();">
    <form class="" action="<?php echo e($action); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
        <div class="form-group">
            <?php if(isset($param->actual_date)): ?>
            <input type="date" class="form-control <?php $__errorArgs = ['actual_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="actual_date" value="<?php echo e($param->actual_date); ?>" autofocus>
            <?php else: ?>
            <input type="date" class="form-control <?php $__errorArgs = ['actual_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="actual_date" value="<?php echo e(old('actual_date')); ?>" autofocus>
            <?php endif; ?>
            <?php if($errors->has('actual_date')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('actual_date')); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <select id="bp_flg" class="form-control" name="bp_flg" onchange="change_bpflg();">
                <?php if(isset($param->bp_flg)): ?>
                    <?php if($param->bp_flg == 0): ?>
                    <option selected value="0">収入</option>
                    <option value="1">支出</option>
                    <?php else: ?>
                    <option value="0">収入</option>
                    <option selected value="1">支出</option>
                    <?php endif; ?>
                <?php else: ?>
                <option value="0">収入</option>
                <option value="1">支出</option>
                <?php endif; ?>
            </select>
        </div>
        <div class="form-group"><!-- カテゴリを配列で渡して表示する -->
            <select id="category" name="category" class="form-control">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <?php if(isset($param->amount)): ?>
            <input type="number" class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="amount" value="<?php echo e($param->amount); ?>" placeholder="金額" autofocus>
            <?php else: ?>
            <input type="number" class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="amount" value="<?php echo e(old('amount')); ?>" placeholder="金額" autofocus>
            <?php endif; ?>
            <?php if($errors->has('amount')): ?>
                <span class="invalid-feedback" role="alert">
                    <strong><?php echo e($errors->first('amount')); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <?php if(isset($param->remarks)): ?>
            <textarea class="form-control" type="textarea" name="remarks" value=""　placeholder="備考"><?php echo e($param->remarks); ?></textarea>
            <?php else: ?>
            <textarea class="form-control" type="textarea" name="remarks" value=""　placeholder="備考"></textarea>
            <?php endif; ?>
        </div>
        <?php if(Request::is('budget/register')): ?>
        <div class="form-group form-inline">
            <input class="" type="hidden" name="repeat" value="0">
            <input class="mr-2" type="checkbox" name="repeat" value="1">
            <?php echo $__env->make('components.date_select', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php endif; ?>
        <div class="form-group">
            <input class="btn btn-pink btn-block" type="submit" name="" value="<?php echo e($btn_text); ?>">
        </div>
    </form>
</div>
<?php /**PATH /home/vagrant/code/App/resources/views/components/form.blade.php ENDPATH**/ ?>