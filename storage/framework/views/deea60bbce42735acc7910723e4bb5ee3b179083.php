<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="container">
        <div class="card">
            <h3 class="card-header">Edit product</h3>
            <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <?php $__currentLoopData = $product_edit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro_edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form id="form" method="post" action="<?php echo e(URL::to('/product-update/'.$pro_edit->product_id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <label for="book_name" class="col-3 col-lg-3 col-form-label text-right">Name</label>
                        <div class="col-8 col-lg-8">
                            <input name="product_name" value="<?php echo e($pro_edit->product_name); ?>" type="text" placeholder="product name" class="form-control mt-1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-3 col-lg-3 col-form-label text-right">Category</label>
                        <div class="col-8 col-lg-8">
                            <select class="form-control" name="category_id">
                                <?php $__currentLoopData = $cat_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($cate->category_id==$pro_edit->category_id): ?>
                                    <option selected value="<?php echo e($cate->category_id); ?>"><?php echo e($cate->category_name); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($cate->category_id); ?>"><?php echo e($cate->category_name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand_id" class="col-3 col-lg-3 col-form-label text-right">Brand</label>
                        <div class="col-8 col-lg-8">
                            <select class="form-control" name="brand_id">
                                <?php $__currentLoopData = $bra_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($bra->brand_id==$pro_edit->brand_id): ?>
                                    <option selected value="<?php echo e($bra->brand_id); ?>"><?php echo e($bra->brand_name); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo e($bra->brand_id); ?>"><?php echo e($bra->brand_name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-3 col-lg-3 col-form-label text-right">Price</label>
                        <div class="col-8 col-lg-8">
                            <input name="price" value="<?php echo e($pro_edit->price); ?>" type="text" placeholder="price" class="form-control mt-1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-3 col-lg-3 col-form-label text-right">Quantity</label>
                        <div class="col-8 col-lg-8">
                            <input name="quantity" value="<?php echo e($pro_edit->quantity); ?>" type="text" placeholder="product quantity" class="form-control mt-1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="product_img" class="col-3 col-lg-3 col-form-label text-right">Image</label>
                        <div class="col-8 col-lg-8">
                            <input name="image" type="file" >
                            <img src="<?php echo e(URL::to('public/uploads/product/'.$pro_edit->image)); ?>" style="width: 100px; height: 90px;" alt="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-3 col-lg-3 col-form-label text-right">Description</label>
                        <div class="col-8 col-lg-8">
                            <textarea class="form-control" name="description" rows="3" col="50" placeholder="Description"><?php echo e($pro_edit->description); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-3"></label>
                        <div class="col-8 col-lg-8">
                            <button type="submit" name="done" class="btn btn-outline-light">Done</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/product-edit.blade.php ENDPATH**/ ?>