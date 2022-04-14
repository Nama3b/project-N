<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="<?php echo e('public/front-end/img/logo.png'); ?>" rel="icon">
    <link rel="stylesheet" href="<?php echo e('public/front-end/css/login.css'); ?>">

    <link rel="stylesheet" href="<?php echo e('public/front-end/assets/fontawesome/css/all.css'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
  <div class="header">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-3">
          <img src="<?php echo e('public/front-end/img/16559063 (1).png'); ?>" alt="" width="100%">
        </div>
        <hr>
      </div>
    </div>

  </div>
  <div class="body">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-5">
          <div class="form-input">
            <ul class="nav nav-tabs mb-3 d-flex">
                <li class="active col-6 text-center"><a data-toggle="tab" href="#home">Sign Up</a></li>
                <li class="col-6 text-center"><a data-toggle="tab" href="#menu1">Log In</a></li>
            </ul>
            <a href="<?php echo e(URL::to('login-google')); ?>"><button class="btn btn-outline-dark mb-2">
              <i class="fab fa-google mr-2"></i>Continue with Google
            </button></a>
            <a href="<?php echo e(URL::to('login-facebook')); ?>"><button class="btn btn-outline-dark mb-2">
              <i class="fab fa-facebook mr-2"></i>Continue with Facebook
            </button></a>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert text-center" style="color:red">'.$message.'</span>';
                    Session::put('message', null);
                    }
                ?>
                <form method="post" action="<?php echo e(URL::to('/create-client')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="error-item">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul class="errors">
                            <li><small><?php echo e($val); ?></small></li>
                        </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <input type="text" name="client_fullname" placeholder="Client name">
                    <input type="text" name="client_email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="text" name="client_phonenumber" placeholder="Phonenumber">
                    <input type="text" name="client_address" placeholder="Address">
                    <div class="d-flex">
                      <input type="checkbox" class="checkbox" name="policy" value="">
                      <label for="policy"> <small>By signing up, you agree to the <b>Terms of Service</b> and <b>Privacy Policy</b></small></label>
                    </div>
                    <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
                    <br/>
                    <?php if($errors->has('g-recaptcha-response')): ?>
                    <span class="invalid-feedback" style="display:block">
                        <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                    </span>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-dark">Sign Up</button>
                </form>
              </div>
              <div id="menu1" class="tab-pane fade">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert text-center" style="color:red">'.$message.'</span>';
                    Session::put('message', null);
                    }
                ?>
                <form action="<?php echo e(URL::to('/login-client')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="error-item">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <ul class="errors">
                            <li><small><?php echo e($val); ?></small></li>
                        </ul>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <input type="text" name="client_email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <small class="text-right">Forgot Password?</small>
                    <div class="g-recaptcha" data-sitekey="<?php echo e(env('CAPTCHA_KEY')); ?>"></div>
                    <br/>
                    <?php if($errors->has('g-recaptcha-response')): ?>
                    <span class="invalid-feedback" style="display:block">
                        <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                    </span>
                    <?php endif; ?>
                    <button class="btn btn-dark" name="login">Sign Up</button>
                    <small>By signing up, you agree to the <b>Terms of Service</b> and <b>Privacy Policy</b></small>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
<?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/login.blade.php ENDPATH**/ ?>