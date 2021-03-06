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
                                <i class="fab fa-opencart mr-1"></i> S???n ph???m b??n
                            </a>
                            <div id="submenu-1" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="admin.php?module=book-list-category" class="nav-link">Danh m???c</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-list-product" class="nav-link">S???n ph???m</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-review" class="nav-link">????nh gi?? s???n ph???m</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-review-waiting" class="nav-link">S???n ph???m ch??? duy???t</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-2" aria-expanded="false">
                                <i class="fas fa-money-check-alt mr-1"></i> S???n ph???m cho thu??
                            </a>
                            <div id="submenu-2" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="admin.php?module=book-list-category" class="nav-link">Danh m???c</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-list-product" class="nav-link">S???n ph???m</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-review" class="nav-link">????nh gi?? s???n ph???m</a></li>
                                    <li class="nav-item"><a href="admin.php?module=book-review-waiting" class="nav-link">S???n ph???m ch??? duy???t</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-3" aria-expanded="false">
                                <i class="fas fa-user-circle mr-1"></i> Kh??ch h??ng
                            </a>
                            <div id="submenu-3" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="admin.php?module=post-all" class="nav-link">T??i kho???n ng?????i b??n</a></li>
                                    <li class="nav-item"><a href="admin.php?module=post-waiting" class="nav-link">T??i kho???n kh??ch</a></li>
                                    <li class="nav-item"><a href="admin.php?module=post-approved" class="nav-link">T??i kho???n ng?????i b??n ch??? duy???t</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-item-dad">
                            <a href="" class="dad-nav-link" data-toggle="collapse" data-target="#submenu-4" aria-expanded="false">
                                <i class="fas fa-user-cog mr-1"></i> Qu???n l?? admin
                            </a>
                            <div id="submenu-4" class="submenu collapse">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="admin.php?module=review-web" class="nav-link">Web review's list</a></li>
                                    <li class="nav-item"><a href="admin.php?module=review-web-waiting" class="nav-link">Web review's waiting</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                          <a href="<?php echo e(URL::to('/admin-layout')); ?>"><i class="material-icons">exit_to_app</i></a>
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
                                <h4>Namaeb</h4>
                            </div>
                          </div>
                        </a>
                        <ul class="dropdown-menu">
                      <li class="li"><h5><b>Hellou!</b></h5></li>
                      <li class="li">
                        <a href="" class="dropdown-item">
                        <span>H??? s?? qu???n tr???</span>
                        </a>
                      </li>
                      <li class="li">
                        <a href="" class="dropdown-item">
                          <span>Ho???t ?????ng</span>
                        </a>
                      </li>
                      <li class="li">
                        <a href="https://www.facebook.com/EZEnglishZoneKids" class="dropdown-item">
                          <span>Tr??? gi??p</span>
                        </a>
                      </li>
                      <div class="dropdown-divider"></div>
                      <li class="li">
                        <a href="<?php echo e(URL::to('/logout-action')); ?>" class="dropdown-item">
                          <span>????ng xu???t</span>
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
<?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views//admin-layout.blade.php ENDPATH**/ ?>