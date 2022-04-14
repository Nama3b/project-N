<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin</title>
    <link href="<?php echo e('public/backend/images/web-logo.jpg'); ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/admin.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/fontawesome/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header id="header-section">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <img src="<?php echo e('public/backend/images/banner/16559063.png'); ?>" alt="">
                <button type="button" class="btn btn-dark navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <div class="nav navbar-nav ml-auto navbar-right d-flex text-center" id="nav-active">
                        <div class="nav-item"><a href="<?php echo e(URL::to('home')); ?>" class="nav-link"><b>Trở về Fabu</b></a></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section id="admin-login-body">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="form-login col-5">
                    <h3>Đăng nhập cho quản trị viên</h3>
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert text-center" style="color:red">'.$message.'</span>';
                            Session::put('message', null);
                        }
                    ?>
                    <form action="<?php echo e(URL::to('/login-action')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nhập tài khoản hoặc emai" name="username" required="">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password" required="">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="d-flex justify-content-center mt-0 mb-3">
                            <h6 class=""><a href="">Quên mật khẩu?</a></h6>
                        </div>
                        <button class="btn btn-md btn-primary" type="submit" name="login">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex">
                    <img src="" alt="">
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
    <script defer src="<?php echo e('public/backend/css/fontawesome/js/fontawesome.js'); ?>"></script>

    <script src="<?php echo e('public/backend/js/main.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views//admin-login.blade.php ENDPATH**/ ?>