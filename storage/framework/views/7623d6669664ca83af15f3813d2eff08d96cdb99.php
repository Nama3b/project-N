<?php $__env->startSection('home'); ?>

<section id="welcome-section">
        <div class="welcome-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="col-4 welcome-form">
                            <h2><b>Khám phá ngay các dịch vụ của chúng tôi</b></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolor. Illum deserunt architecto, pariatur dolor quod dicta enim.</p>
                            <input type="text" placeholder="Tìm kiếm" name="search">
                            <a href=""><i class="fa fa-search"></i></a>
                            <hr>
                            <div class="d-flex mt-3 ml-3" align="right">
                                <a href="" class="mr-3 mt-2" data-toggle="modal" data-target="#login">Đăng nhập</a>
                                <button class="btn btn-md btn-primary" data-toggle="modal" data-target="#register">Đăng kí</button>
                            </div>
                        </div>
                        <div class="col-8 welcome-banner"></div>
                    </div>
                    <div class="modal fade" id="login" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-center justify-content-center">
                                    <h3>Đăng nhập với</h3>
                                    <div class="d-flex mb-3 justify-content-center">
                                        <button class="btn btn-md btn-outline-primary mr-3"><i class="fab fa-facebook"></i></button>
                                        <button class="btn btn-md btn-outline-danger"><i class="fab fa-google"></i></button>
                                    </div>
                                    <form action="">
                                        <div class="form-group ">
                                            <input type="text" class="form-control" placeholder="Nhập tài khoản hoặc emai" name="username" >
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" class="form-control" placeholder="Nhập mật khẩu" name="password" >
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="d-flex justify-content-center mt-0 mb-3">
                                            <h6 class="mr-5"><a href="">Đăng kí</a></h6> <h6 class=""><a href="">Quên mật khẩu?</a></h6>
                                        </div>
                                        <button class="btn btn-md btn-primary" type="submit" name="login">Đăng nhập</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="register" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <h3>Khung đăng kí</h3>
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Tên tài khoản" name="username" >
                                            <i class="fas fa-user-circle"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mật khẩu" name="password" >
                                            <i class="fas fa-unlock"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập lại mật khẩu" name="rePassword" >
                                            <i class="fas fa-lock"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nhập email" name="email" >
                                            <i class="fas fa-mail-bulk"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Số điện thoại" name="phonenumber" >
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <button class="btn btn-md btn-primary" type="submit" name="login">Đăng kí</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="about-main">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="display-4 fade-in">
                            <p>Dịch vụ</p>
                            <h4>Là 1 công ty non trẻ nhưng không làm mất đi giá trị thực sự của chúng tôi.</h4>
                            <hr>
                        </div>
                        <div class="d-flex">
                            <div class="col-3">
                                <div class="about-item fade-in">
                                    <i class="fa fa-shopping-bag"></i>
                                    <h4>Mua sắm</h4>
                                    <p>Thoải mái trao đổi mua sắm với mọi người.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="about-item fade-in">
                                    <i class="fas fa-archive"></i>
                                    <h4>Thuê đồ</h4>
                                    <p>Đa dạng những món đồ cho thuê từ người khác nhưng vẫn đảm bảo chất lượng tốt.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="about-item fade-in">
                                    <i class="fas fa-money-check-alt"></i>
                                    <h4>Kiếm thêm thu nhập</h4>
                                    <p>Bạn có thể đăng bài cho thuê hoặc bán những món đồ còn mới mà chưa sử dụng đến.</p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="about-item fade-in">
                                    <i class="fas fa-user-shield"></i>
                                    <h4>Bảo đảm uy tín</h4>
                                    <p>Chúng tôi đảm bảo bạn sẽ sở hữu những món đồ vừa rẻ mà chất lượng vẫn rất tốt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefit">
        <div class="benefit-main">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="display-4 fade-in">
                            <p>Lợi ích của bạn</p>
                            <h4>Đem lại nhiều lợi ích không chỉ riêng cho bạn mà còn nhiều người hơn nữa.</h4>
                            <hr>
                        </div>
                        <div class="d-flex text-left">
                            <div class="col-4">
                                <div class="benefit-item fade-in">
                                    <img src="" alt="">
                                    <h4>Chi phí hợp lí.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium.</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="benefit-item fade-in">
                                    <img src="" alt="">
                                    <h4>Chất lượng đảm bảo.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium.</p>
                                </div>

                            </div>
                            <div class="col-4">
                                <div class="benefit-item fade-in">
                                    <img src="" alt="">
                                    <h4>Tiết kiệm đôi bên.</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="shopping">
        <div class="shopping-section">
            <div class="container fade-in">
                <h2><a href="">Mua sắm</a></h2>
                <div class="row">
                    <ul class="nav nav-tabs mb-3">
                        <li class="active"><a href="" data-toggle="tab">Tất cả</a></li>
                        <li class=""><a href="" data-toggle="tab">Quần áo</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ điện từ</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ gia dụng</a></li>
                    </ul>
                    <div class="tab-content col-12 d-flex">
                        <div class="col-3 product-item">
                            <a href="<?php echo e(URL::to('product-detail')); ?>"><img src="<?php echo e('public/frontend/images/shopping_product/w1.jpg'); ?>" alt="" width="100%"></a>
                            <div class="product-info">
                                <h4><a href="<?php echo e(URL::to('product-detail')); ?>">Đồng hồ thụy sĩ</a></h4>
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
    </section>
    <section id="rent">
        <div class="rent-section">
            <div class="container fade-in">
                <h2><a href="">Thuê đồ</a></h2>
                <div class="row">
                    <ul class="nav nav-tabs mb-3">
                        <li class="active"><a href="" data-toggle="tab">Tất cả</a></li>
                        <li class=""><a href="" data-toggle="tab">Quần áo</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ điện từ</a></li>
                        <li class=""><a href="" data-toggle="tab">Đồ gia dụng</a></li>
                    </ul>
                    <div class="tab-content col-12 d-flex">
                        <div class="col-3 product-item">
                            <a href="<?php echo e(URL::to('product-detail')); ?>"><img src="<?php echo e('public/frontend/images/shopping_product/w1.jpg'); ?>" alt="" width="100%"></a>
                            <div class="product-info">
                                <h4><a href="<?php echo e(URL::to('product-detail')); ?>">Đồng hồ thụy sĩ</a></h4>
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
    </section>
    <section id="renting">
        <div class="renting-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="jumbotron fade-in">
                        <h2>Cho thuê và mua bán không tính phí</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Facere beatae, deserunt quas placeat laborum odit minima ipsum qui deleniti natus quo omnis dolorum quia exercitationem laboriosam culpa dicta distinctio.</p>
                        <button class="btn btn-primary">Tạo mới tin</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="client">
        <div class="client-section">
            <div class="container">
                <div class="row">
                    <div class="display-4 text-center mb-5 fade-in">
                        <p>Khách hàng</p>
                        <hr>
                        <h6>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste consectetur, ab, inventore hic aut incidunt. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Aliquam, error. Recusandae, magnam fuga, voluptates impedit nostru umquam repellat.</h6>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-md btn-outline-primary mr-3"><a href="">Trở thành khách hàng của chúng tôi</a></button>
                            <button class="btn btn-md btn-primary">Tìm hiểu thêm</button>
                        </div>
                    </div>
                    <div id="slides" class="carousel fade-in slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner col-12">
                            <img src="<?php echo e('public/frontend/images/banner/client-banner.jpg'); ?>" alt="" class="d-block mx-auto" align="center" width="97%">
                            <div class="carousel-items">
                                <div class="carousel-item text-center justify-content-center col-12 active">
                                    <div class="col-12" align="center">
                                        <div class="info">
                                            <div class="info-2 slide-in">
                                                <img src="<?php echo e('public/frontend/images/user.png'); ?>" alt="" class="slide-in">
                                                <h2>DeSuck FACE</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Neque? lorem ipsum dolor sit, amet consectetur, adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item text-center justify-content-center col-12">
                                    <div class="col-12" align="center">
                                        <div class="info">
                                            <div class="info-2 slide-in">
                                                <img src="<?php echo e('public/frontend/images/user.png'); ?>" alt="" class="slide-in">
                                                <h2>Henry Charles Albert David</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea. ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item text-center justify-content-center col-12">
                                    <div class="col-12" align="center">
                                        <div class="info">
                                            <div class="info-2 slide-in">
                                                <img src="<?php echo e('public/frontend/images/user.png'); ?>" alt="" class="slide-in">
                                                <h2>Donal Trump</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Excepturi, pariatur? ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev carousel-nav slide-in" href="#slides" data-slide="prev"><i class="fas fa-chevron-left icon-1"></i><i class="fas fa-chevron-left icon-2" style="margin-left: -10px;"></i></a>
                        <a class="carousel-control-next carousel-nav slide-in" href="#slides" data-slide="next"><i class="fas fa-chevron-right icon-2"></i><i class="fas fa-chevron-right icon-1" style="margin-left: -10px;"></i></a>
                    </div>
                    <div class="client-form fade-in">
                        <div class="col-12 text-center d-flex">
                            <div class="col-6 feedback-form">
                                <h4><b>Đánh giá</b></h4>
                                <hr>
                                <p>Những đóng góp của bạn sẽ giúp chúng tôi cải thiện và phục vụ bạn tốt hơn</p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <textarea name="" id="" rows="5" placeholder="Đánh giá của bạn.."></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-6">
                                <img src="<?php echo e('public/frontend/images/banner/feedback-banner.png'); ?>" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-section">
            <div class="container-fluid">
                <div class="row justify-content-center text-center fade-in">
                    <div class="display-4">
                        <p>Liên hệ với chúng tôi</p>
                    </div>
                    <div class="col-12">
                        <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-lg-8 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14899.362294757368!2d105.81729955!3d20.99902685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1563781037215!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:8px double skyblue" allowfullscreen></iframe>
                        </div>
                        <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center justify-content-center">
                            <div class="contact-form">
                                <h4>Hãy nói gì đó..</h4>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="" name="fullname" placeholder="Họ và tên">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="" name="email" placeholder="Tài khoản email">
                                        <i class="fas fa-mail-bulk"></i>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="" name="phonenumber" placeholder="Số điện thoại">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="contact-content" id="" rows="3" placeholder="Nội dung liên hệ"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="contact-social">
                        <h2>Các trang mạng xã hội khác</h2>
                        <hr>
                        <div class="col-12 d-flex">
                            <div class="col-2 social-icon mr-4"><a href=""><i class="fab fa-facebook"></i></a></div>
                            <div class="col-2 social-icon mr-4"><a href=""><i class="fab fa-google-plus-g"></i></a></div>
                            <div class="col-2 social-icon mr-4"><a href=""><i class="fab fa-youtube"></i></a></div>
                            <div class="col-2 social-icon mr-4"><a href=""><i class="fab fa-twitter"></i></a></div>
                            <div class="col-2 social-icon mr-4"><a href=""><i class="fab fa-reddit-alien"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/pages/home.blade.php ENDPATH**/ ?>