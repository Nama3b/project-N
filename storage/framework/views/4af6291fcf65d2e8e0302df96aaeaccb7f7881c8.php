<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="container">
        <div class="card">
            <h3 class="card-header">Edit brand</h3>
            <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <?php $__currentLoopData = $brand_edit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bra_edit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form id="form" method="post" action="<?php echo e(URL::to('/brand-update/'.$bra_edit->brand_id)); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <label for="brand_name" class="col-3 col-lg-3 col-form-label text-right">Name</label>
                        <div class="col-5 col-lg-5 mt-1">
                            <input name="brand_name" type="text" value="<?php echo e($bra_edit->brand_name); ?>" placeholder="Brand name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-lg-3"></label>
                        <div class="col-8 col-lg-8">
                            <button type="submit" name="addBrand" class="btn btn-outline-light">Done</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/brand-edit.blade.php ENDPATH**/ ?>