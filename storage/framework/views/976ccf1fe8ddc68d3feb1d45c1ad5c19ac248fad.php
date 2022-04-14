<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <link href="<?php echo e('public/backend/images/web-logo.jpg'); ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/admin.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/fontawesome/css/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo e('public/backend/css/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-left.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.css">
</head>
<body>
    <section id="menu-left">
        <nav class="navbar-fixed-left">
            <div class="container" style="direction: ltr;margin-left: 0">
                <div class="navbar-header4" align="center">
                    <button type="button" class="navbar-toggle collapsed navbar-dark" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../index.php" class="navbar-branch ">
                        <img src="" alt="" width="60px" align="center">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto cat-list">
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-1" aria-expanded="false">
                                <i class="fab fa-opencart mr-1"></i> Sản phẩm bán
                            </a>
                            <div id="submenu-1" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/category-sell')); ?>" class="nav-link">Danh mục</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-product-category')); ?>" class="nav-link">Sản phẩm</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Đánh giá sản phẩm</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Sản phẩm chờ duyệt</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-2" aria-expanded="false">
                                <i class="fas fa-money-check-alt mr-1"></i> Sản phẩm cho thuê
                            </a>
                            <div id="submenu-2" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Danh mục</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Sản phẩm</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Đánh giá sản phẩm</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Sản phẩm chờ duyệt</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-3" aria-expanded="false">
                                <i class="fas fa-user-circle mr-1"></i> Khách hàng
                            </a>
                            <div id="submenu-3" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Tài khoản người bán</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Tài khoản khách</a></li>
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Tài khoản người bán chờ duyệt</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-4" aria-expanded="false">
                                <i class="fas fa-user-cog mr-1"></i> Quản lý tài khoản
                            </a>
                            <div id="submenu-4" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link"></a></li>
                                    <li class="nav-item">Chỉnh sửa tài khoản<a href="<?php echo e(URL::to('/add-category')); ?>" class="nav-link">Danh sách tài khoản</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                          <a href="<?php echo e(URL::to('/logout-action')); ?>"><i class="material-icons">exit_to_app</i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section id="admin-dashboard">
        <div class="container-fluid">
            <div class="col-md-12 navbar-search mr-3">
                <div class="col-md-9">
                    <form action="" class="form-search">
                        <div class="search-btn">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input type="text" id="searchstring" name="search" placeholder="Search..">
                        </div>
                            <hr class="light">
                    </form>
                </div>
                <div class="col-md-3 admin-profile">
                    <div class="nav-item dropdown">
                        <a class="nav-link pr-0 dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                          <div class="media align-items-center d-flex">
                            <span class="avatar mr-3">
                              <i class="fas fa-user-circle"></i>
                            </span>
                            <div class="media-body">
                                <h4>
                                    <?php
                                        $username = Session::get('username');
                                        if($username){
                                            echo $username;
                                        }
                                    ?>
                                </h4>
                            </div>
                          </div>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="li"><h5><b>Hellou!</b></h5></li>
                          <li class="li">
                            <a href="" class="dropdown-item">
                            <span>Hồ sơ quản trị</span>
                            </a>
                          </li>
                          <li class="li">
                            <a href="" class="dropdown-item">
                              <span>Hoạt động</span>
                            </a>
                          </li>
                          <li class="li">
                            <a href="https://www.facebook.com/EZEnglishZoneKids" class="dropdown-item">
                              <span>Trợ giúp</span>
                            </a>
                          </li>
                          <div class="dropdown-divider"></div>
                          <li class="li">
                            <a href="<?php echo e(URL::to('/logout-action')); ?>" class="dropdown-item">
                              <span>Đăng xuất</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
              </div>
        </div>
        <?php echo $__env->yieldContent('dashboard'); ?>
    </section>

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
<?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/admin-layout.blade.php ENDPATH**/ ?>