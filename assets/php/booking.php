<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/icotittle.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="./base.css">
    <link rel="stylesheet" href="./booking.css">
    <link rel="stylesheet" href="./main.css">
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
                        <li class="header__primary-nav-item">
                            <a href="menu.php" class="header__primary-nav-item-link">menu</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="shopsystem.php" class="header__primary-nav-item-link">hệ thống nhà hàng</a>
                        </li>
                        <li class="header__primary-nav-item">
                            <a href="news.php" class="header__primary-nav-item-link">khuyến mãi</a>
                        </li>
                        <li class="header__primary-nav-item  header__primary-nav-item--active">
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
        <?php
            include "connect.php";
        ?>  
        <?php
            $connect = new connect;
            if($_SERVER['REQUEST_METHOD']=== 'POST'){
                $hoTen = $_POST['hoTen'];
                $ngayDatBan = $_POST['ngayDatBan'];
                $soDienThoai = $_POST['soDienThoai'];
                $nguoiLon = $_POST['nguoiLon'];
                $email = $_POST['email'];
                $treEm = $_POST['treEm'];
                $nhaHang = $_POST['nhaHang'];
                $chonGio = $_POST['chonGio'];
                $chonPhut = $_POST['chonPhut'];
                $moTa = $_POST['moTa'];
                $insert_connect = $connect -> insert_cart($hoTen, $ngayDatBan,$soDienThoai,$nguoiLon ,$email,$treEm ,$nhaHang,$chonGio,$chonPhut, $moTa);
            }
        ?>
        <main class="main">
            <section class="booking">
                <div class="grid wide">
                    <div class="row theme__title">
                        <h3 class="theme__back-text">
                            BOOKING
                        </h3>
                        <h4 class="theme__front-text">
                            - THÔNG TIN KHÁCH HÀNG (Vui lòng đặt bàn trước giờ dùng bữa ít nhất 1 tiếng)

                        </h4>
                    </div>
                    <form method="post" action="booking.php">
                        <div class="row row__form">
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <input name = "hoTen" type="text" placeholder="Họ và tên" class="booking__input" >
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <input name="ngayDatBan" type="text" placeholder="Ngày đặt bàn" class="booking__input">
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <input name ="soDienThoai" type="text" placeholder="Điện thoại di động" class="booking__input">
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <select class="booking__input" name="nguoiLon" id="">
                                    <option value="">Người lớn</option>
                                    <option value="1 người">1 người</option>
                                    <option value="2 người">2 người</option>
                                    <option value="3 người">3 người</option>
                                    <option value="4 người">4 người</option>
                                    <option value="5 người">5 người</option>
                                    <option value="6 người">6 người</option>
                                    <option value="7 người">7 người</option>
                                    <option value="8 người">8 người</option>
                                    <option value="9 người">9 người</option>
                                    <option value="10 người">10 người</option>
                                </select>
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <input name = "email" type="text" placeholder="Email" class="booking__input">
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <div class="booking__item">
                                <select class="booking__input" name="treEm" id="">
                                    <option value="">Trẻ em</option>
                                    <option value="1 người">1 người</option>
                                    <option value="2 người">2 người</option>
                                    <option value="3 người">3 người</option>
                                    <option value="4 người">4 người</option>
                                    <option value="5 người">5 người</option>
                                    <option value="6 người">6 người</option>
                                    <option value="7 người">7 người</option>
                                    <option value="8 người">8 người</option>
                                    <option value="9 người">9 người</option>
                                    <option value="10 người">10 người</option>
                                </select>
                            </div>
                        </div>
                        <div class="col l-6 m-5 c-12">
                            <select name="nhaHang" id="" class="booking__input">
                                <option value="">Chọn nhà hàng</option>
                                <option value="Maneki Lotte Tây Sơn - Tầng 1, TTTM Lotte Mart, 229 Tây Sơn, Đống Đa, Hà Nội">Maneki Lotte Tây Sơn - Tầng 1, TTTM Lotte Mart, 229 Tây Sơn, Đống Đa, Hà Nội</option>
                                <option value="Maneki The Garden - Gian Hàng DO - 10, tầng G, TTTM The Garden, Mễ Trì, Hà Nội">Maneki The Garden - Gian Hàng DO - 10, tầng G, TTTM The Garden, Mễ Trì, Hà Nội</option>
                                <option value="Maneki IPH - Tầng 1, TTTM Indochina Plaza Hanoi, 241 Xuân Thủy, Cầu Giấy, Hà Nội">Maneki IPH - Tầng 1, TTTM Indochina Plaza Hanoi, 241 Xuân Thủy, Cầu Giấy, Hà Nội</option>
                                <option value="Maneki Vincom Phạm Ngọc Thạch - Tầng 5, TTTM Vincom Phạm Ngọc Thạch, 02 Phạm Ngọc Thạch, Trung Tự, Đống Đa, Hà Nội">Maneki Vincom Phạm Ngọc Thạch - Tầng 5, TTTM Vincom Phạm Ngọc Thạch, 02 Phạm Ngọc Thạch, Trung Tự, Đống Đa, Hà Nội</option>
                            </select>
                        </div>
                        <div class="col l-6 m-5 c-12 mobile-fix">
                            <div class="row">
                                <div class="col l-6 m-6 c-6">
                                    <select name="chonGio" id="" class="booking__input">
                                        <option value="">Chọn giờ</option>
                                        <option value="10 giờ">10 giờ</option>
                                        <option value="11 giờ">11 giờ</option>
                                        <option value="12 giờ">12 giờ</option>
                                        <option value="13 giờ">13 giờ</option>
                                        <option value="14 giờ">14 giờ</option>
                                        <option value="15 giờ">15 giờ</option>
                                        <option value="16 giờ">16 giờ</option>
                                        <option value="17 giờ">17 giờ</option>
                                        <option value="18 giờ">18 giờ</option>
                                        <option value="19 giờ">19 giờ</option>
                                        <option value="20 giờ">20 giờ</option>
                                        <option value="21 giờ">21 giờ</option>
                                        <option value="22 giờ">22 giờ</option>
                                    </select>
                                </div>
                                <div class="col l-6 m-6 c-6">
                                    <select name="chonPhut" id="" class="booking__input">
                                        <option value="">Phút</option>
                                        <option value="00 phút">00 phút</option>
                                        <option value="15 phút">115 phút/option>
                                        <option value="30 phút">30 phút</option>    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col l-12 m-10 c-12">
                            <textarea name="moTa" id="" cols="40" rows="10" placeholder="Mô tả chi tiết yêu cầu đặt bàn" class="booking__input"></textarea>
                        </div>
                    </div>
                        <button type="submit" name="submit" class="booking-btn">Đặt bàn</button>
                    </form>
                    <div class="booking-hotline-wrap">
                        <h4>HOTLINE: 1900 63 6650 – 024 3902 8999</h4>
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
</body>
</html>


