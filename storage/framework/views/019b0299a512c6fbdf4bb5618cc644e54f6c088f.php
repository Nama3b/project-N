<?php $__env->startSection('content'); ?>

  <div class="banner-product">
    <div class="container">
        <div class="row">
          <div class="col-5">
            <h1><b>Sneakers</b></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quidem facere aspernatur natus voluptatum ex sequi doloremque molestiae, sunt inventore est exercitationem quia accusamus esse consectetur ipsam corporis, vitae.</p>
          </div>
        </div>
      </div>
  </div>
  <div class="product-body">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <div class="left-item category-item">
            <h5>Category</h5>
            <?php $__currentLoopData = $category_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(URL::to('show-product-by-category'.'/'.$cat_item->category_id)); ?>" class=""><?php echo e($cat_item->category_name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <div class="left-item brand-item">
            <h5>Brand</h5>
            <?php $__currentLoopData = $brand_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bra_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(URL::to('show-product-by-brand'.'/'.$bra_item->brand_id)); ?>" class=""><?php echo e($bra_item->brand_name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <div class="col-10">
          <div class="feature-product">
            <div class="d-flex">
              <div class="col-6">
                <p>Home / Product</p>
              </div>
              <div class="col-6 text-right mb-3">
                <select name="sort" id="">
                  <option value="">Sort By: Feature</option>
                  <option value="">Sort By: Most popular</option>
                  <option value="">Sort By: Lowest Asks</option>
                  <option value="">Sort By: Highest Bids</option>
                </select>
              </div>
            </div>
          </div>
          <div class="product-section">
            <?php $__currentLoopData = $product_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pro_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(URL::to('/add-cart')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                <div class="product">
                  <a href="<?php echo e(URL::to('product-detail'.'/'.$pro_item->product_id)); ?>"><img src="<?php echo e('public/uploads/product/'.$pro_item->image); ?>" alt=""></a>
                    <div class="d-flex">
                        <button class="btn btn-sm btn-outline-dark mr-2">
                            <a href="<?php echo e(URL::to('/add-cart')); ?>">
                                <i class="fas fa-cart-plus"></i>
                                <input type="hidden" name="qty" min="1" value="1">
                                <input type="hidden" name="productId_hidden" value="<?php echo e($pro_item->product_id); ?>">
                            </a>
                        </button>
                        <button class="btn btn-sm btn-outline-dark mr-2"><i class="fas fa-heartbeat"></i></button>
                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-save"></i></button>
                    </div>
                  <div class="product-info">
                    <h6><b><?php echo e($pro_item->product_name); ?></b></h6>
                    <p><?php echo e($pro_item->category_name); ?></p>
                    <h5><b><?php echo e($pro_item->price); ?>$</b></h5>
                  </div>
                </div>
            </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          <div class="pagination"></div>
        </div>
      </div>
    </div>
  </div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/product.blade.php ENDPATH**/ ?>