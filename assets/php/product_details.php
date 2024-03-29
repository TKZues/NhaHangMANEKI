<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icotittle.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./product-details.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- <script src="./assets/js/slide_lib.js"></script> -->
    <script src="./assets/js/carousel.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/davida-bold" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Trang chủ - Maneki</title>
</head>
<body>
    <div class="wrapper grid">
        <header class="header">
            <div class="header__top">
                <div class="header__top-hotline-box">
                    <span class="header__top-hotline">Hotline: 
                        <span class="header__top-hotline-num">1900.63.66.50</span>
                    </span>
                    <span class="header__top-language">
                        <a class="header__top-language-link" href="#">VI</a>
                        /
                        <a class="header__top-language-link" href="#">EN</a>
                    </span>
                </div>
            </div>
            <div class="header__primary">
                <div class="header__primary-logo">
                    <a href="index.php">
                    <?php
                    $image_path3 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/logo_new.png";
                ?>
                    <a href="index.php">
                        <img src="<?php echo $image_path3 ?>" alt="">
                    </a>
                    </a>
                </div>
                <nav class="header__primary-nav">
                    <ul class="header__primary-nav-list">
                        <li class="header__primary-nav-item">
                            <a href="index.php" class="header__primary-nav-item-link">trang chủ</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="menu.php" class="header__primary-nav-item-link">menu</a>
                        </li>
                        <li class="header__primary-nav-item  header__primary-nav-item--active">
                            <a href="shopsystem.php" class="header__primary-nav-item-link">hệ thống nhà hàng</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="news.php" class="header__primary-nav-item-link">khuyến mãi</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="booking.php" class="header__primary-nav-item-link">đặt bàn</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="blog.php" class="header__primary-nav-item-link">blog</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__primary-control">
                    <div class="header__primary-control-search">
                        <div class="header__primary-control-search-form">
                            <input class="header__primary-control-search-input" type="text" placeholder="Nhập từ cần tìm">
                            <div class="header__primary-control-search-ico">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>                        
                    </div>
                    <div class="header__primary-control-cart">
                        <a href="cart.php">
                        <?php
                        $image_path1 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/1-icon-shopping.png";
                    ?>
                    <p>
                    <img src="<?php echo $image_path1 ?>" alt="">
                    </p>
                        </a>
                    </div>
                </div>
                <button class="header__primary-btn-mobile">
                    <i class="fas fa-bars"></i> MENU
                </button>
            </div>
        </header>
        <div class="nav-mobile">
            <ul class="nav-mobile__list">
                <li class="nav-mobile__list-item">
                    <a href="index.php" class="nav-mobile__list-link">trang chủ</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="menu.php" class="nav-mobile__list-link">menu</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="shopsystem.php" class="nav-mobile__list-link">hệ thống nhà hàng</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="news.php" class="nav-mobile__list-link">khuyến mại</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="booking.php" class="nav-mobile__list-link">đặt bàn</a>
                </li>
                <li class="nav-mobile__list-item">
                    <a href="blog.php" class="nav-mobile__list-link">blog</a>
                </li>
            </ul>
            <div class="nav-mobile-close-btn">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <main class="main">
            <section class="product-details__wrapper">
                <div class="product-details__content__wrapper">
                    <div class="product-details__grid">
                        <div class="product-details__grid-item">
                            <div class="product-details__info">
                            <?php
                                         if (isset($_GET['image']) && isset($_GET['name']) && isset($_GET['price'])){
                                            $imageUrl = $_GET['image'];
                                            $productName = $_GET['name'];
                                            $productPrice = $_GET['price'];
                                    ?>
                                <div class="product-details__info-item">
                                    <img src="./assets/img/8-108-yellow-herring-nigiri.png" alt="" class="product-details__info-img product-details__info-img--active">
                                    <img src="./assets/img/sm-19.png" alt="" class="product-details__info-img">
                                </div>
                                <div class="product-details__info-item product-details__info-img-primary-wrapper">
                                    
                                    <img src=" <?php echo $imageUrl ?> " alt="" class="product-details__info-img-primary">
                                    <i class="fas fa-expand-alt product-details-primary__icon"></i>
                                    
                                </div>
                                <div class="product-details__info-item">
                                    <h1 class="product-title">
                                       <?php echo $productName  ?>
                                    </h1>
                                    <h2 class="product-price">
                                        <?php echo $productPrice ?> <span>đ</span>
                                    </h2>
                                    <p class="product-dsc">
                                        Là phần không thể thiếu trong thực đơn nhà hàng nhằm giúp khơi dậy vị giác. Từ món đơn giản cho đến món phức tạp đều nằm trong danh sách món khai vị hấp dẫn và thu hút.
                                    </p>
                                    <button class="product-btn">
                                        Đặt bàn ngay
                                    </button>
                                </div>
                                <?php
                                        }
                                    ?>
                            </div>
                            
                        </div>
                        <div class="product-details__grid-item">
                            <div class="product-list">
                                <div class="product-list__title">
                                    # Sản phẩm mới
                                </div>
                                <ul class="product-list__item-grid">
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/Nigiri-trứng-ngọt-100x100.jpg" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                                Sushi Nigiri Trứng Ngọt
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                19,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/appetizer-1846083_1920-100x100.jpg" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                                Khoai tây Mỹ chiên
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                29,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/IMG_0716-100x100.png" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                                Sushi Nigiri Tôm và Quả Bơ
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                29,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/THĂN-LỢN-TẨM-BỘT-CHIÊN-e1555644170566-100x100.jpg" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                               Thăn lợn tẩm bột chiên
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                79,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/THỊT-ĐÙI-GÀ-CHIÊN-KIỂU-NHẬT-100x100.jpg" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                               Thịt đùi gà chiên kiểu Nhật
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                59,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="product-list">
                                <div class="product-list__title">
                                    # MÓN ĂN ĐƯỢC XEM NHIỀU
                                </div>
                                <ul class="product-list__item-grid">
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/THỊT-CUA-ĐỎ-TEMPURA-100x100.png" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                                Thịt cua đỏ Tempura
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                59,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                    <li class="product-list__item-grid-item">
                                        <img src="./assets/img/Nigiri-trứng-ngọt-100x100.jpg" alt="" class="product-list__img">
                                        <div class="grid-item__dsc">
                                            <p class="grid-item__dsc-title">
                                                Sushi Nigiri Trứng Ngọt
                                            </p>
                                            <p class="grid-item__dsc-price">
                                                19,000 ₫
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-content-inner">
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-4 m-4 c-12">
                                <div class="footer__info">
                                    <div class="footer__info-brand">
                                        <img src="./assets/img/logoshc.jpg" alt="" class="footer__info-brand-logo">
                                    </div>
                                    <div class="footer__info-brand-desc">
                                        CÔNG TY CỔ PHẦN ĐẦU TƯ THƯƠNG MẠI VÀ DỊCH VỤ SHC VIỆT NAM
                                    </div>
                                </div>
                                <div class="footer_info-desc">
                                    <p>TRỤ SỞ CHÍNH
                                        <br>Tầng 12, tháp B, tòa nhà Sông Đà,
                                        <br>18 Phạm Hùng, Nam Từ Liêm, Hà Nội
                                        <br>CHI NHÁNH
                                        <br>34 Phan Đình Giót, phường 2,
                                        <br>quận Tân Bình, TP.HCM
                                        <br>LIÊN HỆ
                                        <br>024 3200 5108 hoặc 028 3997 4780
                                        </p>
                                </div>
                            </div>
                            <div class="col l-4 m-4 c-12">
                                <div class="row">
                                    <div class="col l-6 m-6 c-6">
                                        <div class="footer__info">
                                            <div class="footer__info-brand-desc">
                                                TẢI VÀ CÀI ĐẶT ỨNG DỤNG SHC FOOD
                                            </div>
                                        </div>
                                        <div class="footer_info-desc">
                                            iOS
                                            <img src="./assets/img/appstore.png" alt="">
                                            ANDROID
                                            <img src="./assets/img/chplay.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col l-6 m-6 c-6">
                                        <div class="footer__info">
                                            <div class="footer__info-brand-desc">
                                                HỆ THỐNG NHÀ HÀNG MANEKI NEKO DELI
                                            </div>
                                        </div>
                                        <div class="footer_info-desc">
                                            <p>GIỜ MỞ CỬA
                                                <br>10:00 - 22:00
                                                <br>HOTLINE
                                                <br>1900 36 6650
                                                <br>hoặc
                                                <br>024 3902 8999
                                                <br>EMAIL
                                                <br>cskh@shcvietnam.com.vn
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l-4 m-4 c-12">
                                <div class="footer__info">
                                    <div class="footer__info-brand-desc">
                                        FANPAGE FACEBOOK
                                    </div>
                                   
                                </div>
                                <div class="footer_info-desc">
                                    <p>
                                        https://www.facebook.com/manekinekodeli/
                                    </p>
                                    <p class="footer_info-login-count">
                                        Bạn đã truy cập: <span class="footer_info-number-count"></span> lần
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scrollTop">
        <i class="fas fa-chevron-up"></i>
    </div>
    <div class="product__slide">
        <div class="product__slide-primary">
            <i class="fas fa-arrow-left product-details__prev"></i>
            <img src="./assets/img/8-108-yellow-herring-nigiri.png" alt="" class="product__slide-img-primary-img">
            <i class="fas fa-arrow-right product-details__next"></i>
        </div>
        <div class="product__slide-close">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <script src="./assets/js/geolocation.js"></script>
</body>
</html>