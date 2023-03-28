<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Khách hàng /</span>Hiển thị
        </h4>

        <div class="row">
            <!-- Basic Buttons -->

            <div class="col-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?controller=kh&action=add"><i class="bx bx-plus"></i>Thêm khách hàng</a>
                    </li>
                </ul>


                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Danh sách khách hàng</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="button" class="btn btn-info"><a style="color: white" href="index.php?controller=kh&action=edit">Sửa</a></button>
                                    <button type="button" class="btn btn-danger">Xóa</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
            </div>
