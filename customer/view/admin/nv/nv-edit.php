
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Nhân viên /</span> Sửa nhân viên</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Chi tiết hồ sơ</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">Họ và tên</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="firstName"
                                        name="firstName"
                                        value=""
                                        autofocus
                                    />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input
                                        class="form-control"
                                        type="text"
                                        id="email"
                                        name="email"
                                        value=""
                                        placeholder="a@gmail.com"
                                    />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">số điện thoại</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">VN (+84)</span>
                                        <input
                                            type="text"
                                            id="phoneNumber"
                                            name="phoneNumber"
                                            class="form-control"
                                            placeholder="202 555 0111"
                                        />
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Sửa</button>
                                    <button type="reset" class="btn btn-outline-secondary"><a style="color: #8592a3" href="index.php?controller=nv">Hủy bỏ</a></button>
                                </div>
                        </form>
                    </div>
                    <!-- /Account -->
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


