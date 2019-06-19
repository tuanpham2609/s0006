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
            				<h4><a href="index.php">Home</a> Chi tiết đơn hàng</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="order-detail-page">
                <div class="checkout">
                    <div class="container">
                        <div class="row margin0">
                            <div class="col-sm-12 text-center">
                                <h2 class="tttt">Chi tiết đơn hàng</h2>
                            </div>
                            <div class="col-md-8 col-sm-7">
                                <div class="customer-infor">
                                    <h3>Thông tin khách hàng</h3>
                                    <ul class=" setting-ul">
                                        <li><strong>Tên khách hàng: </strong> Phạm Thị Thiên Nguyên</li>
                                        <li><strong>Số điện thoại: </strong> 0973 152 256</li>
                                        <li><strong>Email: </strong> nguyen@iamsale.com</li>
                                        <li><strong>Địa chỉ nhận hàng: </strong> Tầng 12A - Tòa nhà Pico Plaza, 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh</li>
                                        <li><strong>Hình thức giao hàng: </strong> COD</li>
                                        <li><strong>Đơn vị vận chuyển: </strong> ViettelPost</li>
                                        <li><strong>Hình thức thanh toán: </strong> Thanh toán tiền mặt khi nhận hàng</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-5">
                                <div class="your-order your-order-1">
                                    <h3>Đơn hàng của bạn</h3>
                                    <div class="table-order">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Sản phẩm</th>
                                                    <th></th>
                                                    <th >Thành tiền</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Balo Bỉm sữa mini pofunuo</td>
                                                    <td>x1</td>
                                                    <td>400.000đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Balo Bỉm sữa mini pofunuo</td>
                                                    <td>x1</td>
                                                    <td>400.000đ</td>
                                                </tr>
                                                
                                                <tr class="bordertop">
                                                    <td>Phí vận chuyển</td>
                                                    <td></td>
                                                    <td>0đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Giảm giá: <strong>#345234</strong></td>
                                                    <td></td>
                                                    <td>50.000đ</td>
                                                </tr>
                                                <tr class="tongtien tongtien-1">
                                                    <td colspan="3"><strong>Tổng tiền: 744.000đ</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 bordertop">
                                <div class="row">
                                    <div class="col-sm-8 hidden-xs">
                                        <div class="turn-back">
                                            <a href="profile.html"><i class="fa fa-angle-left"></i> Quay lại</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="thanhtoan-ode-page">
                                            <!-- <a href="#">Thanh toán</a> -->
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