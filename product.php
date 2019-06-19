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
            				<h4><a href="index.php">Home</a> Danh sách sản phẩm</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="news-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 ">
                            <?php include 'views/categories_product.php' ;?>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="right-product-page">
                                <div class="change-list-grid">
                                    <ul>
                                        <li class="active"><a data-toggle="tab" href="#menu1"><i class="fa fa-th"></i></a></li>
                                        <li><a data-toggle="tab" href="#menu2"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                    <p>Hiển thị 12 kết quả</p>
                                    <div class="sort-prd">
                                        <div class="dropdown">
                                            <h5>Sắp xếp: </h5>
                                            <button class="dropdown-toggle" type="button" data-toggle="dropdown">Mới nhất
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Từ a - z</a></li>
                                                <li><a href="#">Từ giá cao - thấp</a></li>
                                                <li><a href="#">Từ giá thấp - cao</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content">
                                    <div id="menu1" class="tab-pane fade in active">
                                        <?php include 'views/product_grid.php' ;?>

                                    </div>
                                    <div id="menu2" class="tab-pane fade ">
                                        <?php include 'views/product_list.php' ;?>

                                    </div>
                                </div>                          

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="ed-pagination">
                                            <ul class="pagination setting-ul">
                                                <li class="disabled"><span><i class="fa fa-long-arrow-left"></i></span></li>
                                                <li class="active"><span>1</span></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#" rel="next"><i class="fa fa-long-arrow-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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