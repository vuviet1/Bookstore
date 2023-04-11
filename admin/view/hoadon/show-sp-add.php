<div class="card">
    <h5 class="card-header">Danh sách sản phẩm</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <form action="index.php?controller=hoadon&action=update-cart" method="post">
                    <?php
                    foreach ($infor['cart'] as $product_id => $value) {
                    ?>
                        <tr>
                            <td>
                                <?= $value['id_product'] ?>
                            </td>
                            <td>
                                <?= $value['product_name'] ?>
                            </td>
                            <td>
                                <img style="width: 150px" src="img/<?= $value['image'] ?>" alt="">
                            </td>
                            <td>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="amount[<?= $product_id ?>]" value="<?= $value['amount']; ?>">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?= $value['price'] ?> VNĐ
                            </td>
                            <td>
                                <a style="color: red" href="index.php?controller=hoadon&action=delete-product-in-cart&id=<?= $product_id?>">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

            </tbody>
        </table>
        <button type="submit" name="update" style="border: none" class="primary-btn cart-btn cart-btn-right">
            <span class="icon_loading"></span>
            CẬP NHẬT GIỎ HÀNG
        </button>
        </form>
    </div>
    <a style="color: #8592a3" href="index.php?controller=hoadon&action=information">
        <button class="btn btn-outline-secondary">Quay lại</button>
    </a>
</div>