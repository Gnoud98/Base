<?php
include "libs/header-css.php";
?>


<header class="header">
    <div class="header-top d-lg-block d-none">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="menu-top">
                        <ul>
                            <li><a href="">Soi kèo bóng đá</a></li>
                            <li><a href="">Máy tính dự đoán</a></li>
                            <li><a href="">Lịch sử đối đầu</a></li>
                            <li><a href="">Highlight bóng đá</a></li>
                            <li><a href="">Kết quả bóng đá</a></li>
                            <li><a href="">Tỷ lệ bóng đá</a></li>
                            <li><a href="">Link vào nhà cái</a></li>
                            <li><a href="">So sánh nhà cái</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="header-top-right d-flex justify-content-end align-items-center">
                        <div class="header-search position-relative">
                            <div class="search-icon">
                                <?php echo svg('search', '16','16') ?>
                            </div>
                            <form action="">
                                <input type="text" placeholder="Search...">
                                <button type="submit">
                                    <?php echo svg('search', '16','16') ?>
                                </button>
                            </form>
                        </div>
                        <div class="language">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="./assets/images/icon-vn.png" alt="">
                                        Tiếng Việt
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="header-main">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="">
                    <img src="./assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="main-menu d-lg-block d-none">
                <ul>
                    <li class='menu-item-has-children'><a href="">NHÀ CÁI UY TÍN</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="">
                                    Casino Trực Tuyến
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Nhà cái lô đề
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Cá cược Esports
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">Tips bóng đá</a></li>
                    <li><a href="">Nhận định bóng đá</a></li>
                    <li><a href="">Trò chơi</a></li>
                    <li><a href="">Khuyến mãi</a></li>
                    <li><a href="">Thư Viện</a></li>
                    <li><a href="">Video</a></li>
                </ul>
            </div>
            <div class="bar__mb d-xl-none d-block">
                <?php echo svg('menu', '30','30') ?>
            </div>
        </div>
    </div>
    <nav class="menu-mobile">
        <ul>
            <li class='menu-item-has-children'><a href="">NHÀ CÁI UY TÍN</a>
                <ul class="sub-menu">
                    <li>
                        <a href="">
                            Casino Trực Tuyến
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Nhà cái lô đề
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Cá cược Esports
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="">Tips bóng đá</a></li>
            <li><a href="">Nhận định bóng đá</a></li>
            <li><a href="">Trò chơi</a></li>
            <li><a href="">Khuyến mãi</a></li>
            <li><a href="">Thư Viện</a></li>
            <li><a href="">Video</a></li>
        </ul>
    </nav>
    <div class="overlay"></div>
</header>