<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Phương thức thanh toán /</span>Hiển thị
        </h4>

        <div class="row">
            <!-- Basic Buttons -->

            <div class="col-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?controller=pttt&action=add"><i class="bx bx-plus"></i>Thêm phương thức thanh toán</a>
                    </li>
                </ul>


                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Danh sách phương thức thanh toán</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên phương thức thanh toán</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <?php
                                foreach ($array as $payment){
                            ?>
                                <tr>
                                    <td>
                                        <?= $payment['id_payment'] ?>
                                    </td>
                                    <td>
                                        <?= $payment['name_payment'] ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info"><a style="color: white" href="index.php?controller=pttt&action=edit&id=<?= $payment['id_payment'] ?>">Sửa</a></button>
                                        <button type="button" class="btn btn-danger"><a style="color: white" href="index.php?controller=pttt&action=destroy&id=<?= $payment['id_payment'] ?>">Xóa</a></button>
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

