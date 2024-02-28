<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">商品情報詳細</h1>

    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary mt-3">商品一覧画面に戻る</a>

    <dl class="row mt-3" >
        <dt class="col-sm-3">商品情報ID</dt>
        <dd class="col-sm-9"><?php echo e($product->id); ?></dd>

        <dt class="col-sm-3">商品名</dt>
        <dd class="col-sm-9"><?php echo e($product->product_name); ?></dd>

        <dt class="col-sm-3">メーカー</dt>
        <dd class="col-sm-9"><?php echo e($product->company_name); ?></dd>

        <dt class="col-sm-3">価格</dt>
        <dd class="col-sm-9"><?php echo e($product->price); ?></dd>

        <dt class="col-sm-3">在庫数</dt>
        <dd class="col-sm-9"><?php echo e($product->stock); ?></dd>

        <dt class="col-sm-3">コメント</dt>
        <dd class="col-sm-9"><?php echo e($product->comment); ?></dd>

        <dt class="col-sm-3">商品画像</dt>
        <dd class="col-sm-9"><img src="<?php echo e(asset($product->img_path)); ?>" width="300"></dd>
    </dl>
    <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-primary btn-sm mx-1">商品情報を編集する</a>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/step7/resources/views/show.blade.php ENDPATH**/ ?>