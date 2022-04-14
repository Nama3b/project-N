<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card table-responsive m-b-30">
            <h3 class="card-header">Order list</h3>
            <a href="<?php echo e(URL::to('order-done')); ?>"><button class="btn btn-outline-light ml-4">Order done</button></a>
            <div class="card-body">
                <table id="" class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-header">
                            <th scope="col">#</th>
                            <th scope="col">Client</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $order_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $or_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><?php echo e($or_list->client_fullname); ?></td>
                            <td><?php echo e($or_list->total); ?></td>
                            <td><?php echo e($or_list->status); ?></td>
                            <td>
                                <?php
                                    if($or_list->status==1){
                                    ?>
                                        <a href="<?php echo e(URL::to('/cancel-order/'.$or_list->order_id)); ?>"><span class="text-alert">Cancel</span></a>
                                    <?php
                                    } else{
                                    ?>
                                        <a href="<?php echo e(URL::to('/approve-order/'.$or_list->order_id)); ?>">Approve</a>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><a href="<?php echo e(URL::to('/order-detail/'.$or_list->order_id)); ?>"><i class="fas fa-edit mr-2"></i></a> <a onclick="return confirm('Are you sure to delete this order?')" href="<?php echo e(URL::to('/product-delete/'.$or_list->order_id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/order-list.blade.php ENDPATH**/ ?>