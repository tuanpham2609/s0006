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
                            <div class="error-search">
                                <h4>Xin lỗi sản phẩm của bạn không được tìm thấy</h4>
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