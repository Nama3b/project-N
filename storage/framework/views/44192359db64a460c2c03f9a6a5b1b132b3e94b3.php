<?php $__env->startSection('product-detail'); ?>

<section id="product-detail">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                <div class="col-6">
                    <img src="<?php echo e('public/frontend/images/shopping_product/w1.jpg'); ?>" alt="" width="100%">
                </div>
                <div class="col-6">
                    <div class="product-info">
                        <h1><b>Đồng hồ Thụy Sĩ</b></h1>
                        <div class="price d-flex">
                            <h3>290000$</h3>
                            <small>333000$</small>
                        </div>
                        <div class="quantity">
                            <p>Số lượng: 1</p>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-md btn-outline-primary mr-3"><a href="<?php echo e(URL::to('chat-form')); ?>"><i class="far fa-comments mr-2"></i>Liên hệ với người đăng</a></button>
                            <button class="btn btn-md btn-primary add-cart-btn"><a href="<?php echo e(URL::to('cart')); ?>"><i class="fas fa-cart-plus mr-2"></i>Thêm vào giỏ hàng</a></button>
                        </div>
                        <div class="description">
                            <p><b>Mô tả:</b> Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Blanditiis, fugiat, reiciendis. Ea delectus optio neque.</p>
                        </div>
                        <div class="seller-info col-12">
                            <div class="d-flex">
                                <div class="col-3" align="left"><h6>Người đăng:</h6></div>
                                <div class="col-9"><h6>Lorem ipsum dolor sit.</h6></div>
                            </div>
                            <div class="d-flex">
                                <div class="col-3" align="left"><h6>Địa chỉ: </h6></div>
                                <div class="col-9"><h6>Lorem ipsum dolor sit amet, consectetur adipisicing.</h6></div>
                            </div>
                            <div class="d-flex">
                                <div class="col-3" align="left"><h6>Số điện thoại:</h6></div>
                                <div class="col-9"><h6>Lorem ipsum dolor sit.</h6></div>
                            </div>
                            <div class="d-flex">
                                <div class="col-3" align="left"><h6>Ngày đăng:</h6></div>
                                <div class="col-9"><h6>2/9/2000</h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/pages/product-detail.blade.php ENDPATH**/ ?>