<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card table-responsive m-b-30">
            <h3 class="card-header">Brand list</h3>
            <a href="<?php echo e(URL::to('brand-add')); ?>"><button class="btn btn-outline-light ml-4">Add brand</button></a>
            <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <table id="book_data" class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-header">
                            <th scope="col">#</th>
                            <th scope="col">Brand name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $brand_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bra_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><?php echo e($bra_list->brand_name); ?></td>
                            <td>
                                <?php
                                    if($bra_list->status==0){
                                    ?>
                                        <a href="<?php echo e(URL::to('/display-brand/'.$bra_list->brand_id)); ?>">Hide</a>
                                    <?php
                                    } else{
                                    ?>
                                        <a href="<?php echo e(URL::to('/hide-brand/'.$bra_list->brand_id)); ?>"><span class="text-alert">Display</span></a>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><a href="<?php echo e(URL::to('/brand-edit/'.$bra_list->brand_id)); ?>"><i class="fas fa-edit mr-2"></i></a> <a onclick="return confirm('Are you sure to delete this brand?')" href="<?php echo e(URL::to('/brand-delete/'.$bra_list->brand_id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/brand-list.blade.php ENDPATH**/ ?>