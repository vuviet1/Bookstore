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
             <form action="index.php?controller=check-out&action=add-to-db">
                 <div class="row">

                     <div class="col-lg-12 col-md-6">
                         <div class="checkout__order">
                             <h4>HÓA ĐƠN CỦA BẠN</h4>
                             <!--Hiển thị khách hàng-->
                             <div class="card-body">
                                 <?php
                                    foreach ($KH['users'] as $kh) {
                                    ?>
                                     <form id="kh" >
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
                                     </form>
                                 <?php
                                    }
                                    ?>
                             </div>
                             <!--Hiển thị khách hàng-->

                             <div class="checkout__order__products">Sản phẩm </div>

                             <!--                                Hiển thị sản phẩm và giá -->
                             <!--                              
                             <ul>
                                 <li>Vegetable’s Package <span>$75.99</span></li>
                             </ul> -->
                             <?php
                                foreach ($KH['cart'] as $product_id => $value) {
                                ?>
                                 <!--                                    dùng PHP để hiển thị giỏ-->
                                 <ul>
                                    <li>
                                    <img src="img/<?= $value['image'] ?>" alt="" width="100px" height="100px">
                                    </li>
                                     <li class="shoping__cart__item">
                                         <h5><a href="index.php?controller=shop-details" style="color: black"><?= $value['product_name'] ?></a></h5>
                                     </li>
                                     <li class="shoping__cart__quantity">
                                         <?= $value['amount']; ?>

                                     </li>
                                     <li class="shoping__cart__price">
                                         <?= $value['price'] ?> VNĐ
                                     </li>

                                     </tr>
                                 <?php
                                }
                                    ?>
                                 </ul>
                                 <!--                                hiển thị tổng tiền -->
                                 <div class="checkout__order__total">Tổng tiền <span><?=$KH['total']?></span></div>


                                 <!--                                Chọn phương thức thanh toán -->
                                 <!--                                <div class="checkout__input__checkbox">-->
                                 <!--                                    <label for="payment">-->
                                 <!--                                        Thanh toán tiền mặt-->
                                 <!--                                        <input type="checkbox" id="payment">-->
                                 <!--                                        <span class="checkmark"></span>-->
                                 <!--                                    </label>-->
                                 <!--                                </div>-->

                                 <div class="card-body">
                                         <div class="row">
                                             <div class="mb-3 col-md-6">
                                                 <p for="price" class="form-label">Chọn phương thức thanh toán:</p>
                                                 <select type="text" id="price" name="category_id" style="margin-bottom: 10px">
                                                     <option value=""> - Chọn -</option>
                                                     <?php
                                                        foreach ($KH['shipping'] as $shipping) {
                                                        ?>
                                                         <option value="<?= $shipping['id_shipping'] ?>">
                                                             <?= $shipping['name_shipping'] ?>
                                                         </option>
                                                     <?php
                                                        }
                                                        ?>
                                                 </select>
                                             </div>

                                             <div class="mb-3 col-md-6">
                                                 <p for="price" class="form-label">Chọn phương thức vận chuyển:</p>
                                                 <select type="text" id="price" name="category_id" style="margin-bottom: 10px">
                                                     <option value=""> - Chọn -</option>
                                                     <?php
                                                        foreach ($KH['payment'] as $payment) {
                                                        ?>
                                                         <option value="<?= $payment['id_payment'] ?>">
                                                             <?= $payment['name_payment'] ?>
                                                         </option>
                                                     <?php
                                                        }
                                                        ?>
                                                 </select>
                                             </div>
                                         </div>
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