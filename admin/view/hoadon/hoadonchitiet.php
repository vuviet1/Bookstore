<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Hóa đơn chi tiết /</span>Hiển thị
        </h4>

        <div class="row">
            <!-- Basic Buttons -->

            <div class="col-12">


                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Hóa đơn chi tiết</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Khách hàng</th>
                                <th>Ngày mua</th>
                                <th>Trạng thái</th>
                                <th>Tên sản phẩm</th>
                                <th>Số trang</th>
                                <th>Giá</th>
                                <th>Ảnh</th>
                                <th>Kích cỡ</th>
                                <th>Ngày sản xuất</th>
                                <th>Mô tả</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

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
                                <button type="reset" class="btn btn-outline-secondary"><a style="color: #8592a3" href="index.php?controller=hoadon">Hủy bỏ</a></button>
                            </div>
                    </form>
                </div>

                <!--/ Basic Bootstrap Table -->
            </div>


