<?php $__env->startSection('content'); ?>

<div id="table-manage">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card table-responsive m-b-30">
            <h3 class="card-header">Product list</h3>
            <a href="<?php echo e(URL::to('product-add')); ?>"><button class="btn btn-outline-light ml-4">Add product</button></a>
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
                            <th scope="col">Image</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $product_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><img src="public/uploads/product/<?php echo e($pro_list->image); ?>" alt="" width="100px" height="70px"></td>
                            <td><?php echo e($pro_list->product_name); ?></td>
                            <td><?php echo e($pro_list->category_id); ?></td>
                            <td><?php echo e($pro_list->brand_id); ?></td>
                            <td><?php echo e($pro_list->price); ?></td>
                            <td><?php echo e($pro_list->quantity); ?></td>
                            <td>
                                <?php
                                    if($pro_list->status==1){
                                    ?>
                                        <a href="<?php echo e(URL::to('/hide-product/'.$pro_list->product_id)); ?>"><span class="text-alert">Display</span></a>
                                    <?php
                                    } else{
                                    ?>
                                        <a href="<?php echo e(URL::to('/display-product/'.$pro_list->product_id)); ?>">Hide</a>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><a href="<?php echo e(URL::to('/product-edit/'.$pro_list->product_id)); ?>"><i class="fas fa-edit mr-2"></i></a> <a onclick="return confirm('Are you sure to delete this product?')" href="<?php echo e(URL::to('/product-delete/'.$pro_list->product_id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/product-list.blade.php ENDPATH**/ ?>