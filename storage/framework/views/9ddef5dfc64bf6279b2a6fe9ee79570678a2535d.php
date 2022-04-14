<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="container">
        <div class="card">
            <h3 class="card-header">Edit Category</h3>
            <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <?php $__currentLoopData = $category_edit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat_edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form id="form" method="post" action="<?php echo e(URL::to('/category-update/'.$cat_edit->category_id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <label for="category_name" class="col-3 col-lg-3 col-form-label text-right">Name</label>
                        <div class="col-5 col-lg-5 mt-1">
                            <input name="category_name" type="text" value="<?php echo e($cat_edit->category_name); ?>" placeholder="Category name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-3"></label>
                        <div class="col-8 col-lg-8">
                            <button type="submit" name="addCategory" class="btn btn-outline-light">Done</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/category-edit.blade.php ENDPATH**/ ?>