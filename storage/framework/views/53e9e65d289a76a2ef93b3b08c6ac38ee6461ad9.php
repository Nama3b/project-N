<?php $__env->startSection('content'); ?>

  <div class="cart-body">
    <div class="container">
      <div class="row">
        <?php
          $content = Cart::content();
        ?>
        <div class="product-cart col-12">
          <h6><b>Product cart</b></h6>
          <table width="100%">
            <tr class="tbl-header">
              <td></td>
              <td>Image</td>
              <td>Product name</td>
              <td>Price</td>
              <td>Quantity</td>
              <td>Total</td>
            </tr>
            <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="tbl-body">
              <td><a href="<?php echo e(URL::to('/del-cart').'/'.$v_content->rowId); ?>"><i class="fas fa-trash-alt"></i></a></td>
              <td><img src="<?php echo e(URL::to('public/uploads/product/'.'/'.$v_content->options->image)); ?>" alt="" width="90px"></td>
              <td><b><?php echo e($v_content->name); ?></b></td>
              <td><?php echo e('$'.number_format($v_content->price,0,',','.')); ?></td>
              <td>
                <form action="<?php echo e(URL::to('/update-cart-qty')); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <div class="d-flex">
                    <input type="number" name="cart_quantity" min="1" value="<?php echo e($v_content->qty); ?>" class="text-center" style="width: 55px">
                    <input type="hidden" class="form-control" name="rowId_cart" value="<?php echo e($v_content->rowId); ?>">
                    <input type="submit" class="btn btn-sm btn-dark" name="update_qty" value="Update" style="width: 80px">
                  </div>
                </form>
              </td>
              <td>
                <?php
                  $subtotal = $v_content->price * $v_content->qty;
                  echo '$'.number_format($subtotal,0,',','.');
                ?>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
        <a href="<?php echo e(URL::to('/product')); ?>"><button class="btn btn-dark mt-3 mr-3" name="">Keep shopping</button></a>
        <?php
            $client_id = Session::get('client_id');
            if($client_id == NULL){
        ?>
            <a href="<?php echo e(URL::to('/login')); ?>"><button class="btn btn-outline-dark mt-3" name="">Checkout</button></a>

        <?php } else{
        ?>
            <a href="<?php echo e(URL::to('/checkout')); ?>"><button class="btn btn-outline-dark mt-3" name="">Checkout</button></a>
        <?php } ?>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/cart/show-cart.blade.php ENDPATH**/ ?>