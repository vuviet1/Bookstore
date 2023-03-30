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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Sản phẩm /</span> Thêm sản phẩm</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Sản phẩm</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="index.php?controller=sp&action=store">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="form-label">Tên sản phẩm</label>
                                    <input class="form-control" type="text" id="name" name="name" value="" autofocus />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="page" class="form-label">Số trang</label>
                                    <input class="form-control" type="text" id="page" name="page" value="" />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="price" class="form-label">Giá</label>
                                    <input class="form-control" type="text" id="price" name="price" value="" />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="size" class="form-label">Kích cỡ</label>
                                    <input class="form-control" type="text" id="size" name="size" value="" />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="date" class="form-label">Ngày sản xuất</label>
                                    <input class="form-control" type="date" id="date" name="date" value="" />
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label for="describes" class="form-label">Mô tả</label>
                                    <input class="form-control" type="text" id="describes" name="describes" value="" />
                                </div>

                                <div class="input-group">
                                    <label class="input-group-text" for="inputGroupFile01">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" name="img" id="inputGroupFile01" />
                                </div>
                                <div>
                                    <select name="category_id">
                                        <option value=""> - Choose - </option>
                                        <?php
                                        foreach ($arr['category'] as $category) {
                                        ?>
                                            <option value="<?= $category['id_category'] ?>">
                                                <?= $category['name_category'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select name="author_id">
                                        <option value=""> - Choose - </option>
                                        <?php
                                        foreach ($arr['author'] as $author) {
                                        ?>
                                            <option value="<?= $author['id_author'] ?>">
                                                <?= $author['name_author'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <select name="publis_id">
                                        <option value=""> - Choose - </option>
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
                                    <button type="submit" class="btn btn-primary me-2">Thêm sản phẩm</button>
                                    <button type="reset" class="btn btn-outline-secondary"><a style="color: #8592a3" href="index.php?controller=sp">Hủy bỏ</a></button>
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