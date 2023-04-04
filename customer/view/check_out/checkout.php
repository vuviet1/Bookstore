 <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="background-color: #7fad39">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Kiểm tra hóa đơn</h2>
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
                <h4>CHI TIẾT THANH TOÁN</h4>
                <form action="#">
                    <div class="row">

                        <div class="col-lg-12 col-md-6">
                            <div class="checkout__order">
                                <h4>HÓA ĐƠN CỦA BẠN</h4>
<!--Hiển thị khách hàng-->
                                <div class="card-body">
                                    <?php
                                    foreach($KH as $kh){
                                        ?>
                                        <form id="kh" method="POST" action="index.php?controller=kh&action=update">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <input type="hidden" name="id" value="<?= $kh['id_customer'] ?>">
                                                    <label for="name_kh" class="form-label">Họ và tên</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="name_kh"
                                                            name="name_kh"
                                                            value="<?= $kh['name_customer'] ?>"
                                                            readonly
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6 ">
                                                    <label for="email_kh" class="form-label">E-mail</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="email_kh"
                                                            name="email_kh"
                                                            value="<?= $kh['email'] ?>"
                                                            readonly
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6 ">
                                                    <label for="user_kh" class="form-label">Username</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="user_kh"
                                                            name="user_kh"
                                                            value="<?= $kh['username'] ?>"
                                                            readonly
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6 ">
                                                    <label for="pass_kh" class="form-label">Password</label>
                                                    <input
                                                            class="form-control"
                                                            type="text"
                                                            id="pass_kh"
                                                            name="pass_kh"
                                                            value="<?= $kh['password'] ?>"
                                                            readonly
                                                    />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="phone_kh">số điện thoại</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text">VN (+84)</span>
                                                        <input
                                                                type="text"
                                                                id="phone_kh"
                                                                name="phone_kh"
                                                                class="form-control"
                                                                value="<?= $kh['phone_number'] ?>"
                                                                readonly
                                                        />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="address">Địa chỉ</label>
                                                    <div class="input-group input-group-merge">
                                                        <input
                                                                type="text"
                                                                id="address"
                                                                name="address"
                                                                class="form-control"
                                                                value="<?= $kh['address'] ?>"
                                                                readonly
                                                        />
                                                    </div>
                                                </div>
                                        </form>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <!--Hiển thị khách hàng-->

                                <div class="checkout__order__products">Sản phẩm <span>Tổng tiền</span></div>

<!--                                Hiển thị sản phẩm và giá -->
                                <ul>
                                    <li>Vegetable’s Package <span>$75.99</span></li>
                                </ul>

<!--                                hiển thị tổng tiền -->
                                <div class="checkout__order__total">Tổng tiền <span>$750.99</span></div>


<!--                                Chọn phương thức thanh toán -->
<!--                                <div class="checkout__input__checkbox">-->
<!--                                    <label for="payment">-->
<!--                                        Thanh toán tiền mặt-->
<!--                                        <input type="checkbox" id="payment">-->
<!--                                        <span class="checkmark"></span>-->
<!--                                    </label>-->
<!--                                </div>-->

                                <div class="card-body">
                                    <form id="kh" method="POST" action="index.php?controller=kh&action=store">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <p for="price" class="form-label">Chọn phương thức thanh toán:</p>
                                                <select type="text" id="price" name="category_id"
                                                        style="margin-bottom: 10px">
                                                    <option value=""> - Chọn -</option>
                                                    <?php
                                                    foreach ($arr['category'] as $category) {
                                                        ?>
                                                        <option value="<?= $category['id_category'] ?>">
                                                            <?= $category['name_category'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <p for="price" class="form-label">Chọn phương thức vận chuyển:</p>
                                                <select type="text" id="price" name="category_id"
                                                        style="margin-bottom: 10px">
                                                    <option value=""> - Chọn -</option>
                                                    <?php
                                                    foreach ($arr['category'] as $category) {
                                                        ?>
                                                        <option value="<?= $category['id_category'] ?>">
                                                            <?= $category['name_category'] ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>

<!--                                Chọn phương thức thanh toán -->

                                <button type="submit" class="site-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
