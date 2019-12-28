<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <!-- <div class="">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                You are logged in!
            </div> -->
            <div class="flote-left">
                <h1>ホーム</h1>
            </div>
            <div class="row justify-content-between text-center">
                <div class="col-4">
                    2019年12月
                </div>
                <div class="col-4">
                    今月の残金
                </div>
                <div class="col-4">
                    <a href="/actual/register" class="btn btn-outline-dark">入力する</a>
                </div>
            </div>
            <div class="text-center">
                <h1>￥100,000</h1>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>日付</th><th>カテゴリ</th><th>金額</th><th>備考</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>テスト</td><td>テスト</td><td>テスト</td><td>テスト</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/MyApp/resources/views/home.blade.php ENDPATH**/ ?>