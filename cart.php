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
            				<h4><a href="index.php">Home</a> Giỏ hàng</h4>
            			</div>
            		</div>
            	</div>
            </div>

            
            <div class="wish-list-page">
                <div class="cart-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="ed-table-cart table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá tiền</th>
                                                <th width="25%">Số lượng</th>
                                                <th>Thành tiền</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td ><img src="resources/images/product/pic-3.jpg" alt=""></td>
                                                <td>
                                                    <h4>Tuổi trẻ đáng giá bao nhiêu</h4>
                                                    <p>Tác giả: Hoài Linh</p>
                                                </td>
                                                <td>1.000.000đ</td>
                                                <td>
                                                    <div class="custom-input-number">
                                                        <div class="custom-input-number-1">
                                                            <button type="button" class="cin-btn cin-btn-1 cin-btn-md cin-decrement">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                            <input type="number" class="cin-input basket-quantity" step="1" value="1" min="1" max="999">
                                                            <button type="button" class="cin-btn cin-btn-1 cin-btn-md cin-increment">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.000.000đ</td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><img src="resources/images/product/pic-6.jpg" alt=""></td>
                                                <td>
                                                    <h4>Đắc Nhân Tâm </h4>
                                                    <p>Tác giả: Đàm Vĩnh Hưng</p>
                                                </td>
                                                <td>1.000.000đ</td>
                                                <td>
                                                    <div class="custom-input-number">
                                                        <div class="custom-input-number-1">
                                                            <button type="button" class="cin-btn cin-btn-1 cin-btn-md cin-decrement">
                                                                <i class="fa fa-minus"></i>
                                                            </button>
                                                            <input type="number" class="cin-input basket-quantity" step="1" value="1" min="1" max="999">
                                                            <button type="button" class="cin-btn cin-btn-1 cin-btn-md cin-increment">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>1.000.000đ</td>
                                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <ul>
                                    <li>
                                        <div class="btn-page">
                                            <a href="#">Tiếp tục mua sắm</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-page">
                                            <a href="#">Thanh toán</a>
                                        </div>
                                    </li>
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