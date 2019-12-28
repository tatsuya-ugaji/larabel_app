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
        <div class="form-group">
            <input class="btn-block" type="submit" name="" value="登録">
        </div>
    </form>
</div>
<?php /**PATH /home/vagrant/code/MyApp/resources/views/components/actual_form.blade.php ENDPATH**/ ?>