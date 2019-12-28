<div class="col-6 mx-auto">
    <form class="" action="" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group form-inline w-100">
            <div class="col-md-3 float-left pl-0">
                <select class="form-control" id="number" name="number">
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value=""><?php echo e($item); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <input class="form-control col-9" type="number" name="" value=""　placeholder="金額">
        </div>

        <div class="form-group">
            <input class="btn-block" type="submit" name="" value="<?php echo e($btn_text); ?>">
        </div>

    </form>
</div>
<?php /**PATH /home/vagrant/code/MyApp/resources/views/components/budget_form.blade.php ENDPATH**/ ?>