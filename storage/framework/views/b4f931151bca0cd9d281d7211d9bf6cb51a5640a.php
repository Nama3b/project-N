<?php $__env->startSection('product-detail'); ?>

<section id="cart">
    <div class="container pt-5">
        <div class="row ">
            <div class="col-12 cart">
                <h2>Thanh toán đơn hàng</h2>
                    <ul class="menu">
                        <li class="col-1 col-xs-1 col-sm-1 col-md-1 col-lg-1 "></li>
                        <li class="col-5 col-xs-5 col-sm-5 col-md-5 col-lg-5 ">Sản phẩm</li>
                        <li class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 ">Giá</li>
                        <li class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">Số lượng</li>
                        <li class="col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">Tổng tiền</li>
                    </ul>
                    <ul class="your_cart" align="">
                        <li class="trash-cart text-center col-1 col-xs-1 col-sm-1 col-md-1 col-lg-1">
                            <div class="trash"><a href=""><i class="fas fa-trash-alt"></i></a></div>
                        </li>
                        <li class="col-5 col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="<?php echo e('public/frontend/images/shopping_product/w1.jpg'); ?>" width="111px" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="" style="text-decoration: none;"><b>Đồng hồ Thụy Sĩ</b></a>
                                </div>
                            </div>
                        </li>
                        <li class="price col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <h5><b>5000$</b></h5>
                        </li>
                        <li class="qty col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <div class="product-count">
                                <input type="text" id="" name="" class="" value=""  >
                                <div class="quantity-ic">
                                    <a href="">
                                        <i class="fas fa-chevron-up"></i>
                                    </a>
                                    <a href="">
                                        <i class="fas fa-chevron-down"></i>
                                    </a>
                                </div>
                                <a class="ml-3 mt-1"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </li>
                        <li class="total col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            <h5>5000$</h5>
                        </li>
                    </ul>
                </div>
                <hr class="light">
                <div class="total-price">
                    <div class="transport-ship">
                        <p>Phí vận chuyển:</p>
                            <form>
                                <button class="" type="radio" name="checkout-method" id="nhanhang" value="1"></button>
                                <label for="nhanhang" class="checkout-method-item">Nhận hàng qua bưu điện</label>
                                <button class="" type="radio" name="checkout-method" id="nhanhang" value="2"></button>
                                <label for="nhanhang" class="checkout-method-item">Viettel post</label>
                                <button class="" type="radio" name="checkout-method" id="nhanhang" value="3"></button>
                                <label for="nhanhang" class="checkout-method-item">Chuyển phát nhanh</label>
                            </form>
                    </div>
                    <div class="checkout-method">
                        <p>Phương thức thanh toán:</p>
                        <form>
                            <button class="" type="radio" name="checkout-method" id="nhanhang" value="1"></button>
                            <label for="nhanhang" class="checkout-method-item">Thanh toán khi nhận hàng</label>
                            <button class="" type="radio" name="checkout-method" id="nhanhang" value="2"></button>
                            <label for="nhanhang" class="checkout-method-item">Thẻ tín dụng/Ghi nợ</label>
                            <button class="" type="radio" name="checkout-method" id="nhanhang" value="3"></button>
                            <label for="nhanhang" class="checkout-method-item">Thẻ ATM nội địa</label>
                            <button class="" type="radio" name="checkout-method" id="nhanhang" value="4"></button>
                            <label for="nhanhang" class="checkout-method-item">Trả góp</label>
                        </form>
                    </div>
                    <div class="price">
                        <p>Total: <span class="text-right"><label id="total"></label> 5000$</span></p>
                    </div>
                </div>
                <div class="col-12">
                    <a href="book.php">
                        <button class="btn btn-md btn-outline-light">Tiếp tục mua sắm</button>
                    </a>
                    <a href="<?php echo e(URL::to('checkout-finish')); ?>">
                        <button class="btn btn-md btn-primary">Thanh toán</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/pages/checkout.blade.php ENDPATH**/ ?>