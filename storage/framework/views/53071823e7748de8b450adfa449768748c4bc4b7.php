<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">

    <title>商品情報一覧</title>
</head>





<div class="search mt-5">

<!-- 検索フォーム。GETメソッドで、商品一覧のルートにデータを送信 -->
<form action="<?php echo e(route('products.index')); ?>" method="GET" class="row g-3">

    <!-- 商品名検索用の入力欄 -->
    <div class="col-sm-12 col-md-3">
        <input type="text" name="search" class="form-control" placeholder="商品名" value="<?php echo e(request('search')); ?>">
    </div>

    <!-- メーカー名検索用の入力欄 -->
    <div class="col-sm-12 col-md-3">
        <input type="text" name="search" class="form-control" placeholder="メーカー名" value="<?php echo e(request('search')); ?>">
    </div>

    <!-- 絞り込みボタン -->
    <div class="col-sm-12 col-md-1">
        <button class="btn btn-outline-secondary" type="submit">絞り込み</button>
    </div>
</form>
</div>



<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">商品情報一覧</h1>

    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary mb-3">商品新規登録</a>



    <div class="products mt-5">
        <h2>商品情報</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>商品名</th>
                    <th>メーカー</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>コメント</th>
                    <th>商品画像</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->product_name); ?></td>
                    <td><?php echo e($product->company->company_name); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->stock); ?></td>
                    <td><?php echo e($product->comment); ?></td>
                    <td><img src="<?php echo e(asset($product->img_path)); ?>" alt="商品画像" width="100"></td>
                    </td>
                    <td>
                        <a href="<?php echo e(route('products.show', $product)); ?>" class="btn btn-info btn-sm mx-1">詳細表示</a>
                        <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-primary btn-sm mx-1">編集</a>
                        
                    </td>
                    <td>
                    
    <form method="POST" action="<?php echo e(route('products.destroy', $product->id)); ?>" class="d-inline">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
    </form> 

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/step7/resources/views/index.blade.php ENDPATH**/ ?>