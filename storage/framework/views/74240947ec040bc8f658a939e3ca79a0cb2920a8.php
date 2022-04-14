<?php $__env->startSection('content'); ?>

  <div class="payment-body">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1><b>THANK YOU FOR SHOPPING IN OUR SERVICE!</b></h1>
          <i class="far fa-check-circle" style="font-size: 50px; color: green"></i>
        </div>
        <a href="<?php echo e(URL::to('/product')); ?>"><button class="btn btn-dark">Back to shopping</button></a>
        </div>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/checkout/cash-payment.blade.php ENDPATH**/ ?>