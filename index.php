<?php
include "header.php";
?>

<main>
    <div class="main-content">
        <div class="container">
            <h1 class="heading-title">
                Bảng xếp hạng nhà cái cập nhật 8/2022
            </h1>
            <div class="row g-lg-5 g-4">
                <div class="col-lg-9">
                    <div class="list__rate">
                            <div class="list__rate-header">
                                <ul>
                                    <li class='top d-md-block d-none'>
                                        Top
                                    </li>
                                    <li class="nc">
                                        Nhà cái
                                    </li>
                                    <li class="km d-lg-block d-none">
                                        Khuyến mãi
                                    </li>
                                    <li class="dg d-lg-block d-none">
                                        Đánh giá
                                    </li>
                                    <li class="bc">
                                        Bình chọn
                                    </li>
                                    <li class="lk">
                                        Liên kết
                                    </li>

                                </ul>
                            </div>
                            <div class="list__rate-body">
                                <?php 
                                 for ($i = 0; $i < 12; $i++) {
                                 ?>
                                <div class="list__rate-item">
                                    <div class="item-top d-md-block d-none">
                                        <span>
                                            1
                                        </span>
                                    </div>
                                    <div class="item-nhacai">
                                        <div class="text">
                                            <strong>
                                                Nhà cái W88
                                            </strong>
                                        </div>
                                        <div class="img">
                                            <a href="">
                                                <img src="./assets/images/w88.png" alt="">
                                            </a>

                                        </div>
                                    </div>
                                    <div class="item-km d-lg-block d-none">
                                        <p>
                                            Thưởng <strong>20%</strong> lên đến
                                        </p>
                                        <p class="money">
                                            <strong>
                                                4.000.000 vnđ
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="item-dg d-lg-block d-none">
                                        <ul>
                                            <li>
                                                Rút tiền nhanh
                                            </li>
                                            <li>
                                                Hỗ trợ nhiệt tình
                                            </li>
                                            <li>
                                                Odds cao
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item-bc">
                                        <div class="point">
                                            <strong>9.8</strong>/<span>10</span>
                                        </div>
                                        <div class="star">
                                            <?php echo svg('star', '15','15') ?>
                                            <?php echo svg('star', '15','15') ?>
                                            <?php echo svg('star', '15','15') ?>
                                            <?php echo svg('star', '15','15') ?>
                                            <?php echo svg('star', '15','15') ?>
                                        </div>
                                        <div class="slbc">
                                            <span><strong>985.523</strong> lượt bình chọn</span>
                                        </div>
                                    </div>
                                    <div class="item-lk">
                                        <div class="bxlink">
                                            <a href="" target="_blank" rel="nofollow">Đăng ký
                                                ngay</a>
                                        </div>
                                        <div class="bxdanhgia"><a href="">Đánh giá</a></div>
                                    </div>
                                </div>
                                <?php 
                                 } 
                                ?>

                            </div>
                            <div class="list__rate-all ">
                                <a href="">XEM TẤT CẢ CÁC NHÀ CÁI UY TÍN KHÁC</a>
                            </div>
                        
                    </div>
                    <div class="list__news">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Nhận Định Bóng Đá
                                        </a>
                                    </h4>
                                    <?php 
                                     for ($i = 0; $i < 6; $i++) {
                                     ?>
                                    <div class="news-item">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                <div class="img">
                                                    <a href="" class="c-img scale-hover">
                                                        <img src="./assets/images/news.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-7">
                                                <div class="desc-ct">
                                                    <h4 class="title">
                                                        <a href="">
                                                            Nhận định Barcelona vs Manchester City,
                                                            02h30 ngày 25/08
                                                        </a>
                                                    </h4>
                                                    <div class="desc">
                                                        Trong khuôn khổ vòng tiếp theo La liga giữa
                                                        tuần này sẽ là màn trình diễn hấp dẫn...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <?php 
                                     } 
                                    ?>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Casino Online
                                        </a>
                                    </h4>
                                    <?php 
                                     for ($i = 0; $i < 6; $i++) {
                                     ?>
                                    <div class="news-item">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                <div class="img">
                                                    <a href="" class="c-img scale-hover">
                                                        <img src="./assets/images/news.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-7">
                                                <div class="desc-ct">
                                                    <h4 class="title">
                                                        <a href="">
                                                            Nhận định Barcelona vs Manchester City,
                                                            02h30 ngày 25/08
                                                        </a>
                                                    </h4>
                                                    <div class="desc">
                                                        Trong khuôn khổ vòng tiếp theo La liga giữa
                                                        tuần này sẽ là màn trình diễn hấp dẫn...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <?php 
                                     } 
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list__news-small">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Hướng Dẫn Cá Cược
                                        </a>
                                    </h4>
                                    <?php 
                                     for ($i = 0; $i < 5; $i++) {
                                     ?>
                                    <div class="news-item">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                <div class="img">
                                                    <a href="" class="c-img scale-hover">
                                                        <img src="./assets/images/news.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-7">
                                                <div class="desc-ct">
                                                    <h4 class="title">
                                                        <a href="">
                                                            Nhận định Barcelona vs Manchester City,
                                                            02h30 ngày 25/08
                                                        </a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <?php 
                                     } 
                                    ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Kinh Nghiệm Cá Cược
                                        </a>
                                    </h4>
                                    <?php 
                                     for ($i = 0; $i < 5; $i++) {
                                     ?>
                                    <div class="news-item">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                <div class="img">
                                                    <a href="" class="c-img scale-hover">
                                                        <img src="./assets/images/news.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-7">
                                                <div class="desc-ct">
                                                    <h4 class="title">
                                                        <a href="">
                                                            Nhận định Barcelona vs Manchester City,
                                                            02h30 ngày 25/08
                                                        </a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <?php 
                                     } 
                                    ?>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Tin Tức Cá Cược
                                        </a>
                                    </h4>
                                    <?php 
                                     for ($i = 0; $i < 5; $i++) {
                                     ?>
                                    <div class="news-item">
                                        <div class="row">
                                            <div class="col-md-4 col-5">
                                                <div class="img">
                                                    <a href="" class="c-img scale-hover">
                                                        <img src="./assets/images/news.png" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-7">
                                                <div class="desc-ct">
                                                    <h4 class="title">
                                                        <a href="">
                                                            Nhận định Barcelona vs Manchester City,
                                                            02h30 ngày 25/08
                                                        </a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <?php 
                                     } 
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-qc my-3">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="item">
                                    <a href="" class="d-block">
                                        <img src="./assets/images/banner-1.png" alt=""
                                            class="w-100">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <a href="" class="d-block">
                                        <img src="./assets/images/banner-2.png" alt=""
                                            class="w-100">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list__news-bottom">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Cá Cược Thể Thao
                                        </a>
                                    </h4>
                                    <div class="news-bottom-ct">
                                        <div class="item item-has-thumb">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news4.png" alt="">
                                                </a>
                                            </div>
                                            <a href="">
                                                Tỷ lệ ăn tỉ số là gì? Hướng dẫn cách tính bắt tỉ số
                                                ăn bao nhiêu
                                            </a>
                                        </div>
                                        <?php 
                                         for ($i = 0; $i < 5; $i++) {
                                         ?>
                                        <div class="item">
                                            <a href="">
                                                Tỷ lệ 2in1 là gì? Hướng dẫn cách chơi kèo 2 trong 1
                                                hiệu quả
                                            </a>
                                        </div>
                                        <?php 
                                         } 
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Trò Chơi
                                        </a>
                                    </h4>
                                    <div class="news-bottom-ct">
                                        <div class="item item-has-thumb">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news4.png" alt="">
                                                </a>
                                            </div>
                                            <a href="">
                                                Tỷ lệ ăn tỉ số là gì? Hướng dẫn cách tính bắt tỉ số
                                                ăn bao nhiêu
                                            </a>
                                        </div>
                                        <?php 
                                         for ($i = 0; $i < 5; $i++) {
                                         ?>
                                        <div class="item">
                                            <a href="">
                                                Tỷ lệ 2in1 là gì? Hướng dẫn cách chơi kèo 2 trong 1
                                                hiệu quả
                                            </a>
                                        </div>
                                        <?php 
                                         } 
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list__news-content">
                                    <h4 class="title-news">
                                        <a href="">
                                            Xổ Số - Lô Đề Online
                                        </a>
                                    </h4>
                                    <div class="news-bottom-ct">
                                        <div class="item item-has-thumb">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news4.png" alt="">
                                                </a>
                                            </div>
                                            <a href="">
                                                Tỷ lệ ăn tỉ số là gì? Hướng dẫn cách tính bắt tỉ số
                                                ăn bao nhiêu
                                            </a>
                                        </div>
                                        <?php 
                                         for ($i = 0; $i < 5; $i++) {
                                         ?>
                                        <div class="item">
                                            <a href="">
                                                Tỷ lệ 2in1 là gì? Hướng dẫn cách chơi kèo 2 trong 1
                                                hiệu quả
                                            </a>
                                        </div>
                                        <?php 
                                         } 
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <aside>
                        <div class="sidebar-news">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#ff4b00">
                                    Hot
                                </span>
                                <a href="">
                                    Thư viện cá cược
                                </a>
                            </h5>
                            <div class="list-sidebar-news">
                                <?php 
                                 for ($i = 0; $i < 5; $i++) {
                                 ?>
                                <div class="news-item">
                                    <div class="row">
                                        <div class="col-md-4 col-5">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-7">
                                            <div class="desc-ct">
                                                <h4 class="title">
                                                    <a href="">
                                                        Nhận định Barcelona vs Manchester City,
                                                        02h30 ngày 25/08
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <?php 
                                 } 
                                ?>
                            </div>
                        </div>
                        <div class="sidebar-news">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#19a0e9">
                                    New
                                </span>
                                <a href="">
                                    Video bóng đá
                                </a>
                            </h5>
                            <div class="list-sidebar-news">
                                <?php 
                                 for ($i = 0; $i < 5; $i++) {
                                 ?>
                                <div class="news-item">
                                    <div class="row">
                                        <div class="col-md-4 col-5">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-7">
                                            <div class="desc-ct">
                                                <h4 class="title">
                                                    <a href="">
                                                        Nhận định Barcelona vs Manchester City,
                                                        02h30 ngày 25/08
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <?php 
                                 } 
                                ?>
                            </div>
                        </div>
                        <div class="sidebar-news">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#ff4b00">
                                    Phốt
                                </span>
                                <a href="">
                                    Bóc phốt nhà cái
                                </a>
                            </h5>
                            <div class="list-sidebar-news">
                                <?php 
                                 for ($i = 0; $i < 5; $i++) {
                                 ?>
                                <div class="news-item">
                                    <div class="row">
                                        <div class="col-md-4 col-5">
                                            <div class="img">
                                                <a href="" class="c-img scale-hover">
                                                    <img src="./assets/images/news.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-7">
                                            <div class="desc-ct">
                                                <h4 class="title">
                                                    <a href="">
                                                        Nhận định Barcelona vs Manchester City,
                                                        02h30 ngày 25/08
                                                    </a>
                                                </h4>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <?php 
                                 } 
                                ?>
                            </div>
                        </div>
                        <div class="sidebar-tool">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#13be5f">
                                    Tool
                                </span>
                                <a href="">
                                    Công cụ cá cược
                                </a>
                            </h5>
                            <ul>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <img src="./assets/images/tool1.png" alt="">
                                        </span>
                                        <span class="name">
                                            Tỷ lệ bóng đá
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <img src="./assets/images/tool2.png" alt="">
                                        </span>
                                        <span class="name">
                                            Nhận định bóng đá
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <img src="./assets/images/tool3.png" alt="">
                                        </span>
                                        <span class="name">
                                            Soi kèo bóng đá
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <img src="./assets/images/tool4.png" alt="">
                                        </span>
                                        <span class="name">
                                            Lịch sử đối đầu
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <img src="./assets/images/tool5.png" alt="">
                                        </span>
                                        <span class="name">
                                            Máy tính dự đoán
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-compare">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#13be5f">
                                    Tool
                                </span>
                                <a href="">
                                    So sánh nhà cái
                                </a>
                            </h5>
                            <p class="tt">
                                Vui lòng chọn danh sách nhà cái bên dưới
                            </p>
                            <form action="" class="compare-content">
                                <div class="compare-item compare-item-left">
                                    <button href="#" role="button" data-value=""
                                        class="compare-selected-button">
                                        <img src="" alt="">
                                    </button>
                                    <ul class="compare__list">
                                        <li data-value="1" class="compare__list-item">
                                            <img src="./assets/images/w88.png" alt="">
                                        </li>
                                        <li data-value="2" class="compare__list-item">
                                            <img src="./assets/images/m88.png" alt="">
                                        </li>
                                        <li data-value="3" class="compare__list-item">
                                            <img src="./assets/images/188BET.png" alt="">
                                        </li>
                                        <li data-value="4" class="compare__list-item">
                                            <img src="./assets/images/fun88.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="iconcompare">
                                    <span>
                                        <img src="./assets/images/icon-compare.png" alt="">
                                    </span>
                                </div>
                                <div class="compare-item compare-item-right">
                                    <button href="#" role="button" data-value=""
                                        class="compare-selected-button selected-button-right">
                                        <img src="" alt="">
                                    </button>
                                    <ul class="compare__list">
                                        <li data-value="1" class="compare__list-item">
                                            <img src="./assets/images/w88.png" alt="">
                                        </li>
                                        <li data-value="2" class="compare__list-item">
                                            <img src="./assets/images/m88.png" alt="">
                                        </li>
                                        <li data-value="3" class="compare__list-item">
                                            <img src="./assets/images/188BET.png" alt="">
                                        </li>
                                        <li data-value="4" class="compare__list-item">
                                            <img src="./assets/images/fun88.png" alt="">
                                        </li>
                                    </ul>
                                </div>
                                <div class="action-btn w-100">
                                    <input type="submit" value="So Sánh">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-girl">
                            <h5 class="title-sb">
                                <span class="label" style="--i:#13be5f">
                                    Hot
                                </span>
                                <a href="">
                                    Xem gái xinh
                                </a>
                            </h5>
                            
                            <div class="list__img">
                                <ul>
                                    <?php 
                                     for ($i = 0; $i < 6; $i++) {
                                     ?>
                                   <li><a href="" class="c-img scale-hover"><img src="./assets/images/girl.jpg" alt=""></a></li>
                                      <?php 
                                     } 
                                    ?>
                                   
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>

    </div>
</main>


<?php
include "footer.php";
?>