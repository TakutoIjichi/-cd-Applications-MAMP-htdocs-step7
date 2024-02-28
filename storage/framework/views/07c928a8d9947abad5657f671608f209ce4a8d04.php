<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="<?php echo e(route('products.index')); ?>" class="btn btn-primary mt-1 mb-3">商品一覧画面に戻る</a>
                <div class="card">
                    <div class="card-header"><h2>商品情報を変更する</h2></div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('products.update', $product)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="mb-3">
                                <label for="product_name" class="form-label">商品名</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo e($product->product_name); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="company_id" class="form-label">会社</label>
                                <select class="form-select" id="company_id" name="company_id">
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($company->id); ?>" <?php echo e($product->company_id == $company->id ? 'selected' : ''); ?>><?php echo e($company->company_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">金額</label>
                                <input type="number" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="stock" class="form-label">在庫数</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo e($product->stock); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="comment" class="form-label">コメント</label>
                                <textarea id="comment" name="comment" class="form-control" rows="3"><?php echo e($product->comment); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="img_path" class="form-label">商品画像:</label>
                                <input id="img_path" type="file" name="img_path" class="form-control">
                                <img src="<?php echo e(asset($product->img_path)); ?>" alt="商品画像" class="product-image">
                            </div>

                            <button type="submit" class="btn btn-primary">変更内容で更新する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/step7/resources/views/edit.blade.php ENDPATH**/ ?>