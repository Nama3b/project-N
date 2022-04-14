<?php $__env->startSection('dashboard'); ?>

            <div id="main-content">
                <div class="container-fluid">
                    <div class="revenue">
                        <div class="col-12 d-flex">
                            <div class="col-3">
                                <h4>Doanh thu năm nay</h4>
                                <h2><b>4.722.000 $</b></h2>
                                <hr>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                            <div class="col-3">
                                <h4>Doanh thu tháng này</h4>
                                <h2><b>529.000 $</b></h2>
                                <hr>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                            <div class="col-3">
                                <h4>Tổng số lượt truy cập</h4>
                                <h2><b>15.908.173</b></h2>
                                <hr>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                            <div class="col-3">
                                <h4>Tổng số giao dịch</h4>
                                <h2><b>29.371</b></h2>
                                <hr>
                                <p>Lorem ipsum dolor, sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="main-dashboard text-center col-lg-12">
                        <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="inner-item">
                                <div class="left-item">
                                    <a href="admin.php?module=post-all"><i class="fas fa-money-check"></i></a>
                                </div>
                                <div class="right-item">
                                    <div class="data-item"></div>
                                    <div class="name-item">
                                        <h3><a href="admin.php?module=post-all">Đơn hàng bán</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="inner-item">
                                <div class="left-item">
                                    <a href="admin.php?module=client-user"><i class="fas fa-money-check-alt"></i></a>
                                </div>
                                <div class="right-item">
                                    <div class="data-item"></div>
                                    <div class="name-item">
                                        <h3><a href="admin.php?module=client-user">Đơn cho thuê</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="inner-item">
                                <div class="left-item">
                                    <a href="admin.php?module=client-user"><i class="fas fa-users-cog"></i></a>
                                </div>
                                <div class="right-item">
                                    <div class="data-item"></div>
                                    <div class="name-item">
                                        <h3><a href="admin.php?module=client-user">Khách hàng</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jumbotron">
                        <h2><b>FABU ADMIN'S DASHBOARD</b></h2>
                        <small><u>Namaeb de creator.</u></small>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, dolor perferendis soluta unde atque, blanditiis, quaerat temporibus possimus hic, totam magni eaque! Pariatur ab, qui eligendi perspiciatis, veniam repellat.</h6>
                        <p>Made with <i class="fas fa-keyboard"></i> and <i class="far fa-hand-paper"></i></p>
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-project\resources\views/admin/admin-dashboard.blade.php ENDPATH**/ ?>