<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Sản phẩm /</span>Hiển thị
        </h4>

        <div class="row">
            <!-- Basic Buttons -->

            <div class="col-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?controller=sp&action=add"><i class="bx bx-plus"></i>Thêm sản phẩm</a>
                    </li>
                </ul>


                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Danh sách sản phẩm</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
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
                                foreach ($array['infor'] as $product){
                            ?>
                                <tr>
                                    <td>
                                        <?= $product['id_product'] ?>
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
                                        <img style="width: 150px;" src="../admin/img/<?= $product['image'] ?>" alt="">
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
                                    <button type="button" class="btn btn-info"><a style="color: white" href="index.php?controller=sp&action=edit&id=<?=$product['id_product']?>">Sửa</a></button>
                                    <button type="button" class="btn btn-danger"><a style="color: white" href="index.php?controller=sp&action=destroy&id=<?=$product['id_product']?>">Xóa</a></button>
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

