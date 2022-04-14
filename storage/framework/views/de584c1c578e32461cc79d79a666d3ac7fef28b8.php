<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fabu</title>
    <link href="<?php echo e('public/front-end/images/web-logo.jpg'); ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo e('public/front-end/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/front-end/css/fontawesome/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/front-end/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header id="header-section">
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container-fluid">
                <img src="<?php echo e('public/front-end/images/banner/16559063.png'); ?>" alt="">
                <button type="button" class="btn btn-dark navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="nav navbar-nav ml-auto navbar-right d-flex text-center" id="nav-active">
                        <div class="nav-item active"><a href="<?php echo e(URL::to('home')); ?>" class="nav-link scroll">Trang chủ</a></div>
                        <div class="nav-item"><a href="<?php echo e(URL::to('shopping')); ?>" class="nav-link scroll">Mua sắm</a></div>
                        <div class="nav-item"><a href="<?php echo e(URL::to('rent')); ?>" class="nav-link scroll">Thuê đồ</a></div>
                        <div class="nav-item"><a href="<?php echo e(URL::to('sell')); ?>" class="nav-link scroll">Bán & cho thuê</a></div>
                        <div class="nav-item"><a href="" class="nav-link scroll">Thông báo <i class="material-icons">notifications_none</i></a></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php echo $__env->yieldContent('home'); ?>
    <?php echo $__env->yieldContent('shopping'); ?>
    <?php echo $__env->yieldContent('rent'); ?>
    <?php echo $__env->yieldContent('sell'); ?>
    <?php echo $__env->yieldContent('product-detail'); ?>
    <?php echo $__env->yieldContent('cart'); ?>
    <?php echo $__env->yieldContent('checkout'); ?>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row fade-in">
                <div class="col-12 d-flex">
                    <div class="col-3">
                        <h5><b>Fabu</b></h5>
                        <hr>
                        <h5><b>Chứng nhận</b></h5>
                        <ul>
                            <li><a href="">Bởi bộ công thương Việt Nam</a></li>
                            <li><a href="">Bởi Lorem ipsum dolor, sit.</a></li>
                            <li><a href="<?php echo e(URL::to('admin-login')); ?>">Bởi namaeb de creative <i class="fas fa-user-secret"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5><b>Mua sắm</b></h5>
                        <hr>
                        <ul>
                            <li><a href="">Danh mục</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Thanh toán</a></li>
                            <li><a href="">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5><b>Thuê đồ</b></h5>
                        <hr>
                        <ul>
                            <li><a href="">Danh mục</a></li>
                            <li><a href="">Sản phẩm</a></li>
                            <li><a href="">Thanh toán</a></li>
                            <li><a href="">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5><b>Hỗ trợ</b></h5>
                        <hr>
                        <ul>
                            <li><a href="">Quy định cần biết</a></li>
                            <li><a href="">Quy chế riêng tư</a></li>
                            <li><a href="">Góp ý và liên hệ hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-flex footer-bottom">
                    <div class="col-6" align="center"><p>Designed by Le Thanh Long.</p></div>
                    <div class="col-6" align="center"><p>Made with <i class="fa fa-keyboard-o"></i> and <i class="fa fa-hand-stop-o"></i></p></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script defer src="<?php echo e('public/front-end/css/fontawesome/js/fontawesome.js'); ?>"></script>

    <script src="<?php echo e('public/front-end/js/main.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/layout.blade.php ENDPATH**/ ?>