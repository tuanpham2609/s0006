<!DOCTYPE html>
<html>

<head>
    <?php include 'views/head.php';?>
</head>

<body>
    <section class="main">
        <?php include 'views/header.php';?>
        <section class="wrapper">
            <div class="link-back-home">
            	<div class="container">
            		<div class="row">
            			<div class="col-sm-12">
            				<h4><a href="index.php">Home</a> Tin tức</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="news-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <?php include 'views/categories_news.php' ;?>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="right-news">
                                <div class="box-news-page">
                                    <a href="news-detail.php" class="pic-news-page">
                                        <img src="resources/images/news/news-4.jpg" class="img-responsive">
                                    </a>
                                    <ul class="date-box-news-page">
                                        <li>18</li>
                                        <li>Tháng 7</li>
                                    </ul>
                                    <div class="txt-box-news-page">
                                        <a href="news-detail.php"><h4>Những tác phẩm từ sách lên phim hay nhất năm 2017</h4></a>
                                        <ul>
                                            <li>Đăng bởi: Anh Tài</li>
                                            <li>Ngày đăng: 18-07-2018</li>
                                        </ul>
                                        <p>Đương nhiên kịch bản chuyển thể không phải là nguyên nhân duy nhất giúp các bộ phim thành công hay thấ bại, tuy nhiên một kịch bản phim chặt chẽ sẽ giúp người hâm mộ dễ dàng đánh giá tốt hơn tác phẩm họ phải trả tiền để được xem.</p>
                                    </div>
                                </div>
                                <div class="box-news-page">
                                    <a href="news-detail.php" class="pic-news-page">
                                        <img src="resources/images/news/news-5.jpg" class="img-responsive">
                                    </a>
                                    <ul class="date-box-news-page">
                                        <li>18</li>
                                        <li>Tháng 7</li>
                                    </ul>
                                    <div class="txt-box-news-page">
                                        <a href="news-detail.php"><h4>Những tác phẩm từ sách lên phim hay nhất năm 2017</h4></a>
                                        <ul>
                                            <li>Đăng bởi: Anh Tài</li>
                                            <li>Ngày đăng: 18-07-2018</li>
                                        </ul>
                                        <p>Đương nhiên kịch bản chuyển thể không phải là nguyên nhân duy nhất giúp các bộ phim thành công hay thấ bại, tuy nhiên một kịch bản phim chặt chẽ sẽ giúp người hâm mộ dễ dàng đánh giá tốt hơn tác phẩm họ phải trả tiền để được xem.</p>
                                    </div>
                                </div>
                                <div class="box-news-page">
                                    <a href="news-detail.php" class="pic-news-page">
                                        <img src="resources/images/news/news-6.jpg" class="img-responsive">
                                    </a>
                                    <ul class="date-box-news-page">
                                        <li>18</li>
                                        <li>Tháng 7</li>
                                    </ul>
                                    <div class="txt-box-news-page">
                                        <a href="news-detail.php"><h4>Những tác phẩm từ sách lên phim hay nhất năm 2017</h4></a>
                                        <ul>
                                            <li>Đăng bởi: Anh Tài</li>
                                            <li>Ngày đăng: 18-07-2018</li>
                                        </ul>
                                        <p>Đương nhiên kịch bản chuyển thể không phải là nguyên nhân duy nhất giúp các bộ phim thành công hay thấ bại, tuy nhiên một kịch bản phim chặt chẽ sẽ giúp người hâm mộ dễ dàng đánh giá tốt hơn tác phẩm họ phải trả tiền để được xem.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="ed-pagination">
                                <ul class="pagination setting-ul">
                                    <li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" rel="next"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>

                        
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php include 'views/footer.php';?>
    </section>
    <?php include 'views/script.php';?>
</body>

</html>