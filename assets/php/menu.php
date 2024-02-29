<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icotittle.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./menu.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/slide_lib.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- Font -->
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.3-web/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/davida-bold" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
                        $image_path1 = "/PS20232_Tranquocviet_ASMFINAL/assets/img/logo_new.png";
                    ?>
                    <p>
                    <img src="<?php echo $image_path1 ?>" alt="">
                    </p>
                    </a>
                </div>
                <nav class="header__primary-nav">
                    <ul class="header__primary-nav-list">
                        <li class="header__primary-nav-item">
                            <a href="index.php" class="header__primary-nav-item-link">trang chủ</a>
                        </li>
                        <li class="header__primary-nav-item  header__primary-nav-item--active">
                            <a href="menu.php" class="header__primary-nav-item-link">menu</a>
                        </li>
                        <li class="header__primary-nav-item">
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
                        <a href="#">
                            <img src="./assets/img/1-icon-shopping.png" alt="">
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
            <section class="banner-menu-bg">
            </section>
            <section class="outstanding-food outstanding-food--menu">
                <div class="grid wide">
                    <div class="theme__title">
                        <p class="theme__back-text">
                            Menu Maneki Neko Deli
                        </p>
                        <p class="theme__front-text">
                            - RESTAURANT MENU
                        </p>
                    </div>
                </div>
                <section class="grid wide main-nav">
                   <div class="row">
                        <ul class="main-nav__list">
                            <li class="main-nav__list-item">CƠM BENTO</li>
                            <li class="main-nav__list-item">GUNKAN SUSHI</li>
                            <li class="main-nav__list-item">HOSOMAKI SUSHI</li>
                            <li class="main-nav__list-item">MAKI SUSHI</li>
                            <li class="main-nav__list-item">MÌ UDON</li>
                            <li class="main-nav__list-item">MÓN NƯỚNG</li>
                            <li class="main-nav__list-item">OBUNE SASHIMI</li>
                            <li class="main-nav__list-item">SALAD</li>
                            <li class="main-nav__list-item">SASHIMI</li>
                            <li class="main-nav__list-item">SIDE DISH</li>
                            <li class="main-nav__list-item">SUSHI ROLL</li>
                            <li class="main-nav__list-item">TEMAKI SUSHI</li>
                            <li class="main-nav__list-item">TEMPURA</li>
                            <li class="main-nav__list-item">THỨC UỐNG</li>
                            <li class="main-nav__list-item">TRÁNG MIỆNG</li>
                        </ul>
                   </div>
                </section>
                <?php
                    include "connect.php";
                ?>

                <?php
                    $connect = new connect;
                    $show_menu = $connect -> show_menu();
                ?>
                <section class="grid wide list-product">
                    <div class="row">
                        <?php
                            if($show_menu){
                                while($result = $show_menu -> fetch_assoc()){
                                    $image_path = "/PS20232_Tranquocviet_ASMFINAL/assets/img/" . $result['hinhAnh'];

                        ?>
                        <div class="col l-3 m-3 c-6">
                            <a href="#" class="list-product__item">
                                <img src="<?php echo $image_path ?>" alt="" class="list-product__item-img">
                                <div class="list-product__item-text">
                                    <div class="list-product__item-name">
                                        <?php echo $result['tenSanPham']  ?>
                                    </div>
                                    <hr class="list-product__item-hr"/>
                                    <div class="list-product__item-dsc">
                                        <?php echo $result['moTa'] ?>
                                    </div>
                                    <div class="list-product__item-price">
                                        <?php echo $result['Gia'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                       <?php
                                }
                            }
                       ?>
                    </div>
                </section>
                <section class="pagination">
                    <div class="grid wide">
                        <ul class="pagination__list">
                            <li class="pagination__list-item pagination__list-item--active">1</li>
                            <li class="pagination__list-item">2</li>
                            <li class="pagination__list-item">3</li>
                            <li class="pagination__list-item">4</li>
                            <li class="pagination__list-item"><i class="fas fa-chevron-right"></i></li>
                        </ul>
                    </div>
                </section>
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
</body>
</html>