<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" style="background-color: #7fad39">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Tài khoản</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>CHI TIẾT TÀI KHOẢN</h4>
            <form action="../../index.php?controller=">
                <div class="row">

                    <div class="col-lg-12 col-md-6">
                        <div class="checkout__order">
                            <h4>THÔNG TIN TÀI KHOẢN</h4>
                            <!--Hiển thị khách hàng-->
                            <div class="card-body">
                                <?php
                                foreach ($KH['users'] as $kh) {
                                    ?>
                                    <form id="kh" method="POST" action="../../index.php?controller=kh&action=update">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <input type="hidden" name="id" value="<?= $kh['id_customer'] ?>">
                                                <label for="name_kh" class="form-label">Họ và tên</label>
                                                <input class="form-control" type="text" id="name_kh" name="name_kh" value="<?= $kh['name_customer'] ?>" readonly />
                                            </div>
                                            <div class="mb-3 col-md-6 ">
                                                <label for="email_kh" class="form-label">E-mail</label>
                                                <input class="form-control" type="text" id="email_kh" name="email_kh" value="<?= $kh['email'] ?>" readonly />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phone_kh">số điện thoại</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">VN (+84)</span>
                                                    <input type="text" id="phone_kh" name="phone_kh" class="form-control" value="<?= $kh['phone_number'] ?>" readonly />
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="address">Địa chỉ</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="address" name="address" class="form-control" value="<?= $kh['address'] ?>" readonly />
                                                </div>
                                            </div>
                                            <button type="submit" class="site-btn">Cập nhật thông tin</button>
                                    </form>
                                    <?php
                                }
                                ?>
                            </div>
                            <!--Hiển thị khách hàng-->
                            <button type="submit" class="site-btn"><a href="index.php?controller=acc-set&action=set">Cập nhật thông tin</a></button>
                            <button type="submit" class="site-btn">Quay lại trang chủ</button>


                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</section>
<!-- Checkout Section End -->