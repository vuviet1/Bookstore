
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div>
        <?php
        $test = 0;
        if($test == 1){
            echo "<div style='color:red' >This name already exists!</div>";
        }
        ?>
    </div>

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Hóa đơn /</span> Thêm hóa đơn</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Hóa đơn</h5>

                    <hr class="my-0" />
                    <div style="display: flex ;justify-content: right; margin-top: 15px; margin-right: 20px">
                        <ul class="nav nav-pills flex-column flex-md-row mb-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php?controller=hoadon&action=hd-sp-ct"><i
                                            class="bx bx-plus"></i>Thêm sản phẩm</a>
                            </li>
                        </ul>
                    </div>

                    <hr class="my-0" />

<!--                 Danh sách sản phẩm   -->

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
                                            <img style="width: 150px" src="../../img/<?= $product['image'] ?>" alt="" >
                                        </td>
                                        <td>
                                            <?= $product['amount'] ?>
                                        </td>
                                        <td>
                                            <a style="color: white" href="index.php?controller=sp&action=destroy&id=<?= $product['id_product'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

<!--                Danh sách sản phẩm    -->

                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="index.php?controller=hoadon&action=store">
                            <div class="row">
                                <div class="mb-3 col-md-6 ">
                                    <label for="email" class="form-label">Ngày mua</label>
                                    <input
                                        class="form-control"
                                        type="date"
                                        id="email"
                                        name="email"
                                        value=""
                                    />
                                </div>

                                <div class="mb-3 col-md-6 ">
                                    <label for="total" class="form-label">Tổng giá</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="total"
                                        name="total"
                                        value=""
                                    />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="price" class="form-label">Tên khách hàng</label>
                                    <select class="form-control" type="text" id="employee" name="category_id">
                                        <option value=""> - Chọn - </option>
                                        <?php
                                        foreach ($arr['name_employee'] as $category) {
                                            ?>
                                            <option value="<?= $category['id_employee'] ?>">
                                                <?= $category['name_employee'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="price" class="form-label">Phương thức thanh toán</label>
                                    <select class="form-control" type="text" id="price" name="publis_id">
                                        <option value=""> - Chọn - </option>
                                        <?php
                                        foreach ($arr['publis'] as $publis) {
                                            ?>
                                            <option value="<?= $publis['id_publishing_company'] ?>">
                                                <?= $publis['publishing_company_name'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="price" class="form-label">Phương thức vận chuyển</label>
                                    <select class="form-control" type="text" id="price" name="publis_id">
                                        <option value=""> - Chọn - </option>
                                        <?php
                                        foreach ($arr['publis'] as $publis) {
                                            ?>
                                            <option value="<?= $publis['id_publishing_company'] ?>">
                                                <?= $publis['publishing_company_name'] ?>
                                            </option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Thêm hóa đơn</button>
                                    <a style="color: #8592a3" href="index.php?controller=hoadon"><button type="reset" class="btn btn-outline-secondary">Hủy bỏ</button></a>
                                </div>
                        </form>
                    </div>
                    <!-- /Thông tin -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

