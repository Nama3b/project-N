<?php $__env->startSection('sell'); ?>


<section id="sell-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 d-flex">
                <div class="col-4">
                    <div class="sell-welcome mt-5 ml-4">
                        <h4><b>Bán và cho thuê <br>không lo tính phí</b></h4>
                        <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Ratione quam rem neque voluptatum quod laboriosam!</p>
                        <ul class="nav nav-pills">
                            <li class="mr-2 active"><a data-toggle="tab" href="#sell"><b>Bán đồ</b></a></li>
                            <li><a data-toggle="tab" href="#forRent" style="color:#0b54a2"><b>Cho thuê</b></a></li>
                        </ul>
                        <hr>
                        <p><a href="" style="color:white">Tìm hiểu thêm về điều khoản và dịch vụ của chúng tôi.</a></p>
                    </div>
                </div>
                <div class="col-8"><img src="<?php echo e('public/frontend/images/banner/renting-banner.png'); ?>" alt="" width="100%" height="77%"></div>
            </div>
        </div>
    </div>
</section>
<section id="sell-body">
    <div class="sell-body">
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
                <div class="col-10 sell-section">
                    <div class="tab-content">
                        <div id="sell" class="tab-pane active">
                            <form action="" method="post">
                                <div class="seller-info">
                                    <h3><b><u>Thông tin người bán</u></b></h3>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Người đăng</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="seller" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Số điện thoại</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="phonenumber" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Địa chỉ</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="address" id="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><b><u>Thông tin sản phẩm</u></b></h3>
                                    <div class="form-group">
                                        <label for="product_name" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Tên sản phẩm</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="product_name" id="product_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_cat" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Danh mục</label>
                                        <select name="product_cat" id="product_cat" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <option value="">Đồng hồ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Giá</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="price" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Số lượng</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="quantity" id="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="qualify" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Chất lượng sản phẩm (%)</label>
                                        <div class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6">
                                            <input type="text" class="" name="qualify" id="qualify"><br>
                                            <small>Dựa vào chất lượng hiện tại của sản phẩm so với lúc mới mua.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_img" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Hình ảnh</label>
                                        <input type="file" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="product_img" id="product_img" style="width: fit-content; padding-top: 1px">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="addProduct">Đăng sản phẩm</button>
                            </form>
                            <form action=""method="post" class="add-Cat">
                                <div class="form-group d-flex">
                                    <input type="text" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-10" name="product_cat" placeholder="Thêm mới danh mục">
                                    <button class="btn btn-sm btn-outline-primary ml-2" type="submit" name="addProCat">Thêm</button>
                                </div>
                            </form>
                        </div>
                        <div id="forRent" class="tab-pane fade">
                            <form action="" method="post">
                                <div class="seller-info">
                                    <h3><b><u>Thông tin người cho thuê</u></b></h3>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Người đăng</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="seller" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Số điện thoại</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="phonenumber" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Địa chỉ</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="address" id="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><b><u>Thông tin sản phẩm</u></b></h3>
                                    <div class="form-group">
                                        <label for="product_name" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Tên sản phẩm</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="product_name" id="product_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="product_cat" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Danh mục</label>
                                        <select name="product_cat" id="product_cat" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <option value="">Đồng hồ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Giá</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="price" id="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Số lượng</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="quantity" id="quantity">
                                    </div>
                                    <div class="form-group">
                                        <label for="limit_time" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Thời gian thuê</label>
                                        <input type="text" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="limit_time" id="limit_time">
                                    </div>
                                    <div class="form-group">
                                        <label for="qualify" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Chất lượng sản phẩm (%)</label>
                                        <div class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6">
                                            <input type="text" class="" name="qualify" id="qualify"><br>
                                            <small>Dựa vào chất lượng hiện tại của sản phẩm so với lúc mới mua.</small>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_img" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3" align="right">Hình ảnh</label>
                                        <input type="file" class="col-7 col-xs-7 col-sm-7 col-md-8 col-lg-6" name="product_img" id="product_img" style="width: fit-content; padding-top: 1px">
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" name="addProduct">Đăng sản phẩm</button>
                            </form>
                            <form action=""method="post" class="add-Cat">
                                <div class="form-group d-flex">
                                    <input type="text" class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-10" name="product_cat" placeholder="Thêm mới danh mục">
                                    <button class="btn btn-sm btn-outline-primary ml-2" type="submit" name="addProCat">Thêm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/pages/sell.blade.php ENDPATH**/ ?>