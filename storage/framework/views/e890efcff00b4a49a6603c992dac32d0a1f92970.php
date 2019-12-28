<?php $__env->startSection('content'); ?>

<div class="text-center">
    <h1 class="title">毎月の収支を管理しよう！</h1>
    <div class="col-10 row mx-auto justify-content-around">
        <div class="col-md-6 col-sm-12">
            <img class="w-75" class="main_visual" src="image/main_visual.png" alt="">
        </div>
        <div class="col-md-6 col-sm-12 d-flex align-items-center">
            <div class="w-75 mx-auto">
                <a href="/login" class="btn btn-pink btn-block btn_login">ログイン</a>
                <a href="/register" class="btn btn-pink btn-block">ユーザー登録</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/welcome.blade.php ENDPATH**/ ?>