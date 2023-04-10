<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Hóa đơn chi tiết /</span>Thêm hóa đơn
        </h4>

        <div class="row">
            <!-- Basic Buttons -->
            <div class="col-12">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Chi tiết hóa đơn</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Tên sản phẩm</th>
                                <th>Số trang</th>
                                <th>Giá</th>
                                <th>Ảnh</th>
                                <th>Kích cỡ</th>
                                <th>Tác giả</th>
                                <th>Thể loại</th>
                                <th>Nhà phát hành</th>
                                <th>Ngày phát hành</th>
                                <th>Mô tả</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                            foreach ($product as $product){
                                ?>
                                <tr>
                                    <td>
                                        <?= $product['id_product'] ?>
                                    </td>
                                    <td>
                                        <?= $product['customer_name'] ?>
                                    </td>
                                    <td>
                                        <?= $product['product_name'] ?>
                                    </td>
                                    <td>
                                        <?= $product['number_of_pages'] ?>
                                    </td>
                                    <td>
                                        <?= $product['price'] ?>
                                    </td>
                                    <td>
                                        <img style="width: 150px" src="../../img/<?= $product['image'] ?>" alt="" >
                                    </td>
                                    <td>
                                        <?= $product['size'] ?>
                                    </td>
                                    <td>
                                        <?= $product['name_author'] ?>
                                    </td>
                                    <td>
                                        <?= $product['name_category'] ?>
                                    </td>
                                    <td>
                                        <?= $product['publishing_company_name'] ?>
                                    </td>
                                    <td>
                                        <?= $product['publication_date'] ?>
                                    </td>
                                    <td>
                                        <?= $product['describes'] ?>
                                    </td>
                                    <td>
                                        <a style="color: white" href="index.php?controller=sp&action=edit&id=<?=$product['id_product']?>"><button type="button" class="btn btn-info">Sửa</button></a>
                                        <a style="color: white" href="index.php?controller=sp&action="><button type="button" class="btn btn-secondary">Trở lại</button></a>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>

