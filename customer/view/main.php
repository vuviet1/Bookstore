
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="index.php?controller=shop-grid">Sách Văn Học</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="index.php?controller=shop-grid">Sách Thiếu Nhi</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg" >
                            <h5><a href="index.php?controller=shop-grid">Sách Kỹ Năng Sống</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="index.php?controller=shop-grid">Quản Lý Kinh Doanh</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="index.php?controller=shop-grid">Sách Giáo Khoa - Tham Khảo</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
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
                                <li><a href="index.php?controller=shop-details"><i class="fa fa-info"></i></a></li>
                                <li><a href="index.php?controller=shop-cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            
                            <h6><a href="index.php?controller=shop-details"><?=$product['product_name']?></a></h6>
                            <h5 style="color: red"><?=$product['price']?>VNĐ</h5>
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
