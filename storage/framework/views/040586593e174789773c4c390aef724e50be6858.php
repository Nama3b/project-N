<?php $__env->startSection('content'); ?>
    <div class="category-section">
        <div class="container">
            <div class="d-flex justify-content-center">
                <?php $__currentLoopData = $category_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $cat_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cat-item"><a href="<?php echo e(URL::to('/show-product-by-category'.'/'.$cat_item->category_id)); ?>"><b><?php echo e($cat_item->category_name); ?></b></a></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <div class="carousel-section">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <a href=""><img src="<?php echo e('public/front-end/img/NikeNOCTA_HotStepAirTerra_Translated_Internal_Banners_Primary_Desktop.jpeg'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="<?php echo e('public/front-end/img/FOGEssentialsSS22_Translated_Internal_Banners_Primary_Desktop.webp'); ?>" alt=""></a>
                </div>
                <div class="item">
                    <a href=""><img src="<?php echo e('public/front-end/img/The-Spin-3-22-Primary_Desktop-EN.jpeg'); ?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="shopping-section">
        <div class="container-fluid">
            <div class="sneaker-section">
                <div class="d-flex">
                    <div class="col-3"></div>
                    <div class="col-9 d-flex">
                        <div class="col-6">
                            <h6><i class="far fa-star mr-2"></i>Popular sneakers</h6>
                        </div>
                        <div class="col-6 text-right">
                            <?php $__currentLoopData = $show_by_sneaker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $by_sneaker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><a href="<?php echo e(URL::to('/show-product-by-category'.'/'.$by_sneaker->category_id)); ?>">See all <i class="fas fa-long-arrow-alt-right"></i></a></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="product-img col-3">
                        <img src="<?php echo e('public/front-end/img/poster/255aa206c44c60401a3cf080fdf227e9.jpg'); ?>" alt="" height="100%">
                    </div>
                    <div class="col-9">
                        <?php $__currentLoopData = $sneaker_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sneak_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(URL::to('/add-cart')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="product">
                                <a href="<?php echo e(URL::to('product-detail'.'/'.$sneak_item->product_id)); ?>"><img src="<?php echo e('public/uploads/product/'.$sneak_item->image); ?>" alt=""></a>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-outline-dark mr-2"><a href="<?php echo e(URL::to('/add-cart')); ?>"><i class="fas fa-cart-plus"></i><input type="hidden" name="qty" min="1" value="1"><input type="hidden" name="productId_hidden" value="<?php echo e($sneak_item->product_id); ?>"></a></button>
                                    <button class="btn btn-sm btn-outline-dark mr-2"><i class="fas fa-heartbeat"></i></button>
                                    <button class="btn btn-sm btn-outline-dark"><i class="fas fa-save"></i></button>
                                </div>
                                <div class="product-info">
                                    <h6><b><?php echo e($sneak_item->product_name); ?></b></h6>
                                    <p><?php echo e($sneak_item->brand_name); ?></p>
                                    <h5><b>$<?php echo e($sneak_item->price); ?></b></h5>
                                </div>
                            </div>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <div class="streetwear-section">
                <div class="d-flex">
                    <div class="col-9 d-flex">
                        <div class="col-6">
                            <h6><i class="far fa-star mr-2"></i>Popular streetwear</h6>
                        </div>
                        <div class="col-6 text-right">
                            <?php $__currentLoopData = $show_by_streetwear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $by_streetwear): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p><a href="<?php echo e(URL::to('/show-product-by-category'.'/'.$by_streetwear->category_id)); ?>">See all <i class="fas fa-long-arrow-alt-right"></i></a></p>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
                <div class="d-flex">
                    <div class="col-9">
                        <?php $__currentLoopData = $streetwear_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $stw_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <form action="<?php echo e(URL::to('/add-cart')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="product">
                                <a href="<?php echo e(URL::to('product-detail'.'/'.$stw_item->product_id)); ?>"><img src="<?php echo e('public/uploads/product/'.$stw_item->image); ?>" alt=""></a>
                                <div class="d-flex">
                                    <button class="btn btn-sm btn-outline-dark mr-2"><a href="<?php echo e(URL::to('/add-cart')); ?>"><i class="fas fa-cart-plus"></i><input type="hidden" name="qty" min="1" value="1"><input type="hidden" name="productId_hidden" value="<?php echo e($stw_item->product_id); ?>"></a></button>
                                    <button class="btn btn-sm btn-outline-dark mr-2"><i class="fas fa-heartbeat"></i></button>
                                    <button class="btn btn-sm btn-outline-dark"><i class="fas fa-save"></i></button>
                                </div>
                                <div class="product-info">
                                    <h6><b><?php echo e($stw_item->product_name); ?></b></h6>
                                    <p><?php echo e($stw_item->brand_name); ?></p>
                                    <h5><b>$<?php echo e($stw_item->price); ?></b></h5>
                                </div>
                            </div>
                        </form>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="product-img col-3">
                        <img src="<?php echo e('public/front-end/img/poster/ea5aadb567a56290b1b0e31e81c156a8.jpg'); ?>" alt="" height="100%">
                    </div>
                </div>
            </div>

            <div class="watches-section">
                <div class="container-fluid text-center">
                    <?php $__currentLoopData = $show_by_watches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $by_watches): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h4><b><a href="<?php echo e(URL::to('/show-product-by-category'.'/'.$by_watches->category_id)); ?>">BAPE WATCHES COLLECTION</a></b></h4>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="d-flex">
                        <div class="col-2">
                            <img src="<?php echo e('public/front-end/img/poster/breguet-the-innovator-watch-the-marine-5827-chronograph-johnson-watch-and-co-ad-delhi-times-06-02-2018.png'); ?>" alt="" width="100%">
                            <img src="<?php echo e('public/front-end/img/poster/jaquet-droz-grande-seconde-quantieme-grand-feu-enamel-ad-toi-chennai-31-10-2020.png'); ?>" width="100%" alt="">
                        </div>
                        <div class="col-8 watches-product text-center justify-content-center">
                            <?php $__currentLoopData = $watches_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $watch_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <form action="<?php echo e(URL::to('/add-cart')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="product">
                                    <a href="<?php echo e(URL::to('product-detail'.'/'.$watch_item->product_id)); ?>"><img src="<?php echo e('public/uploads/product/'.$watch_item->image); ?>" alt=""></a>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-outline-dark mr-2"><a href="<?php echo e(URL::to('/add-cart')); ?>"><i class="fas fa-cart-plus"></i><input type="hidden" name="qty" min="1" value="1"><input type="hidden" name="productId_hidden" value="<?php echo e($watch_item->product_id); ?>"></a></button>
                                        <button class="btn btn-sm btn-outline-dark mr-2"><i class="fas fa-heartbeat"></i></button>
                                        <button class="btn btn-sm btn-outline-dark"><i class="fas fa-save"></i></button>
                                    </div>
                                    <div class="product-info">
                                        <h6><b><?php echo e($watch_item->product_name); ?></b></h6>
                                        <p><?php echo e($watch_item->brand_name); ?></p>
                                        <h5><b>$<?php echo e($watch_item->price); ?></b></h5>
                                    </div>
                                </div>
                            </form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-2">
                            <img src="<?php echo e('public/front-end/img/poster/breguet-the-innovator-retrograde-seconds-7097-ad-times-of-india-mumbai-11-12-2018.png'); ?>" alt="" width="100%">
                            <img src="<?php echo e('public/front-end/img/poster/johnson-watch-co-breguet-the-innovator-ad-delhi-times-11-12-2018.png'); ?>" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="brand-section">
                <div class="container">
                    <h4 class="text-center"><b>Popular brands</b></h4>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row justify-content-center">
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/jordan.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/supreme_tile.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/yzy.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/ps4.webp'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/jordan.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/supreme_tile.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/yzy.webp'); ?>" alt="">
                                    </div>
                                    <div class="brand col-md-3">
                                        <img src="<?php echo e('public/front-end/img/brand/ps4.webp'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fashion-news">
                <div class="container">
                    <div class="d-flex">
                        <div class="col-6"><h6><i class="far fa-star mr-2"></i>Popular news</h6></div>
                        <div class="col-6 text-right"><h6><a href="">See all <i class="fas fa-long-arrow-alt-right"></i></a></h6></div>
                    </div>
                    <div class="news-section">
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/2022-3-7-hidden-gems-blog-hero-twitter-square-1200x1200.png'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/blog-header-8-1200x1200.jpg'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/Perfect-Fit-3-10-2022-blog-header-1200x1200.png'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/Pickoftheweek-3-10-22-banners-blog-hero-twitter-square-1200x1200.png'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/The-Rip-03-14-22-blog-header-1200x1200.jpg'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                        <div class="news">
                            <img src="<?php echo e('public/front-end/img/news/2022-3-9-XboxMiniFridge-blog-hero-twitter-square-1200x1200.png'); ?>" width="100%" alt="">
                            <div class="news-info mt-2">
                                <a href="<?php echo e(URL::to('news-detail')); ?>"><h6><b>Xbox Mini Fridge: The #1 Selling Collectible in StockX History</b></h6></a>
                                <small>Michael - 2/9/2000</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-project\resources\views/pages/home.blade.php ENDPATH**/ ?>