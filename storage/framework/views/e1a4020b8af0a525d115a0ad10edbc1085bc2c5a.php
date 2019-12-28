<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="flote-left">
                <h1>月次予実</h1>
            </div>
            <div class="">
                <span><h2 class="d-inline"><?php echo e($year); ?> 年 <?php echo e($month); ?> 月</h2></span>
                <div class="btn-group float-right" role="group" aria-label="基本のボタングループ">
                  <button type="button" class="btn page-link text-dark d-inline-block">マトリクス</button>
                  <button type="button" class="btn page-link text-dark d-inline-block">グラフ</button>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th><th>予算</th><th>実績</th><th>差額</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> <!-- 配列で表示する ひとまずダミーデータ-->
                        <th>家賃</th>
                        <td>63,000</td>
                        <td>63,000</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>食費</th>
                        <td>40,000</td>
                        <td>35,000</td>
                        <td>5,000</td>
                    </tr>
                    <tr>
                        <th>光熱費</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/MyApp/resources/views/actual/by_month.blade.php ENDPATH**/ ?>