<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookstore</title>

<!--     Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!--     Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>



<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> a@gmail.com</li>
                            <li>Miễn phí vận chuyển cho đơn hàng 200k</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                            <a href="https://pinterest.com"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="../login.html"><i class="fa fa-user"></i>Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="../../index.php?controller="><img src="img/logo1.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="index.php?controller=">Home</a></li>
                        <li><a href="index.php?controller=shop-grid">Shop</a></li>
                        <li><a href="#">Trang</a>
                            <ul class="header__menu__dropdown">
                                <li><a href="index.php?controller=shop-details">Chi tiết sản phẩm</a></li>
                                <li><a href="index.php?controller=shop-cart">Giỏ hàng</a></li>
                                <li><a href="index.php?controller=check-out">Kiểm tra</a></li>
                            </ul>
                        </li>
                        <li ><a href="index.php?controller=contact">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>#</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>#</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        <li><a href="#">Sách Bán Chạy</a></li>
                        <li><a href="#">Sách Thiếu Nhi</a></li>
                        <li><a href="#">Sách Văn Học</a></li>
                        <li><a href="#">Sách Kỹ Năng Sống</a></li>
                        <li><a href="#">Quản Lý Kinh Doanh</a></li>
                        <li><a href="#">Sách Giáo Khoa - Tham Khảo</a></li>
                        <li><a href="#">Sách Ngoại Ngữ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                Tất cả thể loại
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="Bạn muốn tìm kiếm sách gì?">
                            <button type="submit" class="site-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+0 12.345.678</h5>
                            <span>Hỗ trợ 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->