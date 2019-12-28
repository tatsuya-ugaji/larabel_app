<div class="col-6 mx-auto">
    <form class="" action="" method="post">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <input class="form-control" type="date" name="actual_date" value="">
        </div>
        <div class="form-group">
            <select class="form-control" name="bp">
                    <option value="0">収入</option>
                    <option value="1">支出</option>
            </select>
        </div>
        <div class="form-group">　<!-- カテゴリを配列で渡して表示する -->
            <select class="form-control" name="category">
                    <option value="">給料</option>
                    <option value="">家賃</option>
                    <option value="">食費</option>
            </select>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="amount" value=""　placeholder="金額">
        </div>
        <div class="form-group">
            <textarea class="form-control" type="textarea" name="remarks" value=""　placeholder="備考"></textarea>
        </div>
        <?php if(Request::is('budget/register')): ?>
        <div class="form-group">
            <input class="" type="hidden" name="repeat" value="0">
            <input class="" type="checkbox" name="repeat" value="1">
                <p class="d-inline">毎月発生する</p>
        </div>
        <?php endif; ?>
        <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" name="" value="<?php echo e($btn_text); ?>">
        </div>
    </form>
</div>
<?php /**PATH /home/vagrant/code/MyApp/resources/views/components/form.blade.php ENDPATH**/ ?>