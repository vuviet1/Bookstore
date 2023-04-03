<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ Hàng</h2>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <button><a href="index.php?controller=shop-cart&action=delete_cart">DELETE CART</a></button>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <form action="index.php?controller=shop-cart&action=update" method="post">
                                <?php
                                    foreach($infor['cart'] as $product_id => $value){
                                ?>
<!--                                    dùng PHP để hiển thị giỏ-->
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/<?=$value['image']?>" alt="" width="100px" height="100px">
                                        <!-- <img src="img/<?=$value['image']?>" alt=""> -->
                                        <h5><a href="index.php?controller=shop-details" style="color: black"><?=$value['product_name']?></a></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?=$value['price']?> VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="amount[<?= $product_id ?>]" value="<?= $value['amount']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="index.php?controller=shop-cart&action=delete-product-in-cart&id=<?= $product_id; ?>"><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">

                        <a href="index.php?controller=shop-grid" class="primary-btn cart-btn">TIẾP TỤC MUA SẮM</a>
                        <button>CẬP NHẬT GIỎ HÀNG</button>
                        
                    </div>
                </div>
            </form>
            <form action="index.php?controller=check-out" method="post">
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng giỏ hàng</h5>
                        <ul>
                            <li>Tổng tiền <span>$454.98</span></li>
                        </ul>
                        <button>Tiến hành kiểm tra</button>
                    </div>
                </div>
            </div>
            </form>
            </div>
        
    </section>
    <!-- Shoping Cart Section End -->