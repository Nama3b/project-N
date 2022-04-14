<?php $__env->startSection('content'); ?>

  <div class="payment-body">
    <div class="container">
      <div class="row">
        <div class="col-8 pl-0 pr-0">
            <?php
              $content = Cart::content();
            ?>
            <div class="product-cart">
              <h6><b>Product cart</b></h6>
              <table>
                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class="tbl-body">
                  <td><a href="<?php echo e(URL::to('/del-cart').'/'.$v_content->rowId); ?>"><i class="fas fa-trash-alt"></i></a></td>
                  <td><img src="<?php echo e(URL::to('public/uploads/product/'.'/'.$v_content->options->image)); ?>" alt="" width="70px"></td>
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
          <a href="<?php echo e(URL::to('/checkout')); ?>"><button class="btn btn-dark">Back to checkout</button></a>
        </div>
        <div class="col-4 pl-0 pr-0">
          <form action="<?php echo e(URL::to('order')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

              <div class="checkout-section">
                <h6><b>Payment options</b></h6>
                <div class="payment-item">
                  <label for=""><input type="checkbox" name="payment_option" value="1">Direct bank transfer</label>
                </div>
                <div class="payment-item">
                  <label for=""><input type="checkbox" name="payment_option" value="2">Cash payment</label>
                </div>
                <div class="payment-item">
                  <label for=""><input type="checkbox" name="payment_option" value="3">Paypal</label>
                </div>
                <button type="submit" class="btn btn-dark" name="order">Order</button>
              </div>
            </form>
        </div>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/checkout/payment.blade.php ENDPATH**/ ?>