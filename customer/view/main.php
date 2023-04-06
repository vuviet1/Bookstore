
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="img/vanhoc0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Sách Văn Học</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="img/thieunhi0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Sách Thiếu Nhi</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="img/kns0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Sách Kỹ Năng Sống</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="img/qlkd0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Quản Lý Kinh Doanh</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                            <img src="img/sgk0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Sách Giáo Khoa - Tham Khảo</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item set-bg">
                        <img src="img/nn0.png" alt="">
                            <h5><a href="index.php?controller=shop-grid">Sách Ngoại Ngữ</a></h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Xu Hướng Mua Sắm</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".oranges">Thiếu Nhi</li>
                            <li data-filter=".fresh-meat">Văn Học</li>
                            <li data-filter=".vegetables">Kỹ Năng Sống</li>
                            <li data-filter=".fastfood">Quản Lý Kinh Doanh</li>
                            <li data-filter=".fastfood">Giáo Khoa - Tham Khảo</li>
                            <li data-filter=".fastfood">Ngoại Ngữ</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php
                    foreach($array['infor'] as $product){
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/<?=$product['image']?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="index.php?controller=shop-details&action=detail&id=<?=$product['id_product']?>"><i class="fa fa-info"></i></a></li>
                                <li><a href="index.php?controller=shop-cart&action=add&id=<?=$product['id_product']?>"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            
                            <h6><a href="index.php?controller=shop-details"><?=$product['product_name']?></a></h6>
                            <h5 style="color: red"><?=$product['price_product']?>VNĐ</h5>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
    </section>
    <!-- Latest Product Section End -->
    <script>
        // Lọc sản phẩm khi click vào nút danh mục
        const categoryButtons = document.querySelectorAll('.category-button');
        const productCards = document.querySelectorAll('.product-card');
        const allProductsButton = document.querySelector('.all-products-button');

        categoryButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                event.preventDefault();

                // Lấy tên danh mục được lưu trữ trong data attribute của nút
                const category = button.dataset.category;

                // Hiển thị các sản phẩm của danh mục tương ứng và ẩn các sản phẩm khác
                productCards.forEach(card => {
                    if (category === 'all' || card.dataset.category === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        allProductsButton.addEventListener('click', (event) => {
            event.preventDefault();

            // Hiển thị tất cả sản phẩm
            productCards.forEach(card => {
                card.style.display = 'block';
            });
        });
    </script>
