<?php $__env->startSection('client-user-manage'); ?>

<div id="table-manage">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card table-responsive m-b-30">
            <h3 class="card-header">Client user manage</h3>
            <div class="card-body">
                <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
                <table id="" class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-header">
                            <th scope="col">#</th>
                            <th scope="col">Client</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $client_user_manage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client_manage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td></td>
                            <td><?php echo e($client_manage->fullname); ?></td>
                            <td><?php echo e($client_manage->email); ?></td>
                            <td><?php echo e($client_manage->address); ?></td>
                            <td><?php echo e($client_manage->phonenumber); ?></td>
                            <td><img src="public/uploads/avatar/<?php echo e($client_manage->avatar); ?>" alt="" width="100px" height="70px"></td>
                            <td>
                                <?php
                                    if($client_manage->status==1){
                                    ?>
                                        <a href="<?php echo e(URL::to('/unactive-client/'.$client_manage->client_id)); ?>"><span class="text-alert">Acitve</span></a>
                                    <?php
                                    } else{
                                    ?>
                                        <a href="<?php echo e(URL::to('/active-client/'.$client_manage->client_id)); ?>">Unactive</a>
                                <?php
                                    }
                                ?>
                            </td>
                            <td><a onclick="return confirm('Are you sure to delete a client?')" href="<?php echo e(URL::to('/client-delete/'.$client_manage->client_id)); ?>"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/admin-pages/client-user-manage.blade.php ENDPATH**/ ?>