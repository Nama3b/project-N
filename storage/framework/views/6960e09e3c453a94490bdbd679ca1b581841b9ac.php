<?php $__env->startSection('shopping'); ?>

<section id="shopping-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                <div class="col-4">
                    <div class="shopping-welcome mt-5 ml-4">
                        <h4><b>Thoải mái mua sắm <br>không lo giá cả</b></h4>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Ratione quam rem neque voluptatum quod laboriosam!</p>
                        <button class="btn btn-outline-light">Khám phá</button>
                    </div>
                </div>
                <div class="col-8"><img src="<?php echo e('public/frontend/images/banner/shopping-banner.png'); ?>" alt="" width="100%"></div>
            </div>
        </div>
    </div>
</section>
<section id="shopping-body">
    <div class="shopping-body">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="category">
                        <h3><b>Danh mục</b></h3>
                        <ul>
                            <li>Tất cả</li>
                            <li>Quần áo</li>
                            <li>Đồ điện tử</li>
                            <li>Đồ gia dụng</li>
                        </ul>
                    </div>
                </div>
                <div class="col-10">
                    <ul class="nav nav-tabs mb-3">
                        <li class="active"><a href="" data-toggle="tab">Tất cả</a></li>
                        <li class=""><a href="" data-toggle="tab">Quần áo</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ điện từ</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ gia dụng</a></li>
                    </ul>
                    <div class="tab-content col-12 d-flex">
                        <div class="col-3 product-item">
                            <a href="productDetail"><img src="<?php echo e('public/frontend/images/shopping_product/w1.jpg'); ?>" alt="" width="100%"></a>
                            <div class="product-info">
                               <a href="<?php echo e(URL::to('product-detail')); ?>"><h4>Lorem, ipsum, dolor.</h4></a>
                               <div class="d-flex">
                                   <h4>99000</h4>
                                   <small>150000</small>
                                </div>
                            </div>
                            <div class="product-service d-flex">
                                <button class="btn btn-outline-danger mr-2"><i class="fas fa-heart"></i></button>
                                <button class="btn btn-outline-dark mr-2"><i class="fas fa-search"></i></button>
                                <button class="btn btn-outline-primary"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/pages/shopping.blade.php ENDPATH**/ ?>