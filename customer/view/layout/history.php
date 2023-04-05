<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" style="background-color: #7fad39">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Lịch sử mua hàng</h2>

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
                    <table>
                        <thead>
                        <tr>
                            <th class="shoping__product">Số thứ tự</th>
                            <th>Ngày mua</th>
                            <th>Trạng thái</th>
                            <th>Giá</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <form action="index.php?controller=shop-cart&action=update" method="post">
                            <?php
                            foreach ($infor['cart'] as $product_id => $value) {
                                ?>
                                <!--                                    dùng PHP để hiển thị giỏ-->
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/<?= $value['image'] ?>" alt="" width="100px" height="100px">
                                        <!-- <img src="img/<?= $value['image'] ?>" alt=""> -->
                                        <h5><a href="index.php?controller=shop-details"
                                               style="color: black"><?= $value['product_name'] ?></a></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        <?= $value['price'] ?> VNĐ
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="amount[<?= $product_id ?>]"
                                                       value="<?= $value['amount']; ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="index.php?controller=shop-cart&action=delete-product-in-cart&id=<?= $product_id; ?>"><span
                                                class="icon_close"></span></a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <button>Chi tiết</button>
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
    </div>

</section>
<!-- Shoping Cart Section End -->