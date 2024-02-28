<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">商品新規登録</h1>

    <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary mb-3">商品一覧に戻る</a>

    <form method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>



        <div class="mb-3">
            <label for="product_name" class="form-label">商品名:</label>
            <input id="product_name" type="text" name="product_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="company_id" class="form-label">メーカー</label>
            <select class="form-select" id="company_id" name="company_id">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($company->id); ?>"><?php echo e($company->company_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">価格:</label>
            <input id="price" type="text" name="price" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">在庫数:</label>
            <input id="stock" type="text" name="stock" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">コメント:</label>
            <textarea id="comment" name="comment" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="img_path" class="form-label">商品画像:</label>
            <input id="img_path" type="file" name="img_path" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">登録</button>
    </form>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/step7/resources/views/create.blade.php ENDPATH**/ ?>