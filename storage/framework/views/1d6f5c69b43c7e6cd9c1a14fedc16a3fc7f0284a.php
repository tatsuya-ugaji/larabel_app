<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="page_title">
                <div class="flote-left">
                    <h2>カテゴリ一覧</h2>
                </div>
            </div>
        </div>
        <form name="category" class="" action="/category/show" method="post">
            <?php echo csrf_field(); ?>
            <div class="col-8 mx-auto">
                <div class="row justify-content-between">
                    <div class="col p-0 text-right">
                        <input class="mb-2 btn btn-pink" type="submit" name="" value="更新">
                    </div>
                    <div class="" id="app">
                        <div class="row justify-content-between">
                            <categories-edit></categories-edit>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/App/resources/views/category/show.blade.php ENDPATH**/ ?>