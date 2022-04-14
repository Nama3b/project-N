<?php $__env->startSection('content'); ?>

<div class="product-detail-body">
    <div class="container">
      <div class="row">
        <div class="product-detail">
          <?php $__currentLoopData = $product_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="product-detail-title">
            <p>Home / <a href="<?php echo e(URL::to('product'.'/'.$pro_detail->category_id)); ?>"><?php echo e($pro_detail->category_name); ?></a> / <a href="<?php echo e(URL::to('product'.'/'.$pro_detail->brand_id)); ?>"><?php echo e($pro_detail->brand_name); ?></a> / <?php echo e($pro_detail->product_name); ?></p>
          </div>
          <div class="d-flex">
            <div class="col-6 text-center">
              <div class="tag text-left">
                <a href="" class="">100% Authentic</a>
                <a href="" class="">Condition: New</a>
              </div>
              <img src="<?php echo e('../public/uploads/product/'.$pro_detail->image); ?>" alt="" width="80%">
            </div>
            <div class="col-6">
              <div class="product-detail-title text-center">
                <h2><u><?php echo e($pro_detail->product_name); ?></u></h2>
                <div class="product-detail-selection">
                  <h2><b>$<?php echo e($pro_detail->price); ?></b></h2>
                    <form action="<?php echo e(URL::to('add-cart')); ?>" method="post">
                      <div class="qty-select d-flex">
                        <?php echo e(csrf_field()); ?>

                        <div class="qty col-6 d-flex">
                            <p>Quantity: </p> <input type="number" name="qty" min="1" value="1">
                            <input type="hidden" name="productId_hidden" value="<?php echo e($pro_detail->product_id); ?>">
                        </div>
                        <div class="col-6">
                            <select name="" id="">
                                <option value="">Size: All</option>
                                <option value="">Size: 37</option>
                            </select>
                        </div>
                      </div>
                      <a href="<?php echo e(URL::to('checkout')); ?>"><button class="btn btn-dark"><i class="mr-2"></i>Buy</button></a>
                      <div class="d-flex">
                        <button class="btn btn-outline-dark mr-2"><a href="<?php echo e(URL::to('add-cart')); ?>"><i class="fas fa-cart-plus"></i></a></button>
                        <button class="btn btn-outline-dark mr-2"><i class="fas fa-heart"></i></button>
                        <button class="btn btn-outline-dark"><i class="fas fa-share-square"></i></button>
                        
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-detail-info">
          <h4>Product Details</h4>
          <div class="d-flex">
            <div class="col-6">
              <p>The Air Jordan 1 Retro High Rebellionaire draws inspiration from the original Air Jordan 1 Shadow with its simple black and grey color blocked upper. Printed on the leather construction, graffiti style text covers the upper. At the base, a white and grey Air sole completes the design.
                <br>
              The Air Jordan 1 Retro High Rebellionaire released in March of 2022 and retailed for $170.
              </p>
            </div>
            <div class="col-6 table-info">
              <table>
                <tr>
                  <td>Style</td>
                  <td>555088-036</td>
                </tr>
                <tr>
                  <td>Colorway</td>
                  <td>BLACK/WHITE-PARTICLE GREY</td>
                </tr>
                <tr>
                  <td>Retail Price</td>
                  <td><?php echo e($pro_detail->price); ?></td>
                </tr>
                <tr>
                  <td>Release Date</td>
                  <td>03/12/2022</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="related-product">
          <h4>Related product</h4>
          <div class="d-flex">
            <?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product col-3">
              <a href="<?php echo e($related->product_id); ?>"><img src="<?php echo e('../public/uploads/product/'.$related->image); ?>" alt=""></a>
              <div class="product-info">
                <h6><b><?php echo e($related->product_name); ?></b></h6>
                <p><?php echo e($related->brand_name); ?></p>
                <h5><b>$<?php echo e($related->price); ?></b></h5>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/product-detail.blade.php ENDPATH**/ ?>