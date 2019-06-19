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
            				<h4><a href="index.php">Home</a> Thanh toán thành công</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="payment-success">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="border-payment">
                                <h3><i class="fa fa-check-circle"></i> Bạn đã đặt hàng thành công.</h3>
                                <p>Cảm ơn bạn đã đằng hàng tại OZ Place, yêu cầu đặt hàng của bạn đã được tiếp nhận và sẽ được xử lý nhanh chóng trong thời gian sớm nhất.</p>
                                <ul class="bd-top">
                                    <li><h4>Thông tin người nhận hàng</h4></li>
                                    <li>Họ và tên: <strong>Nguyễn Văn A</strong></li>
                                    <li>Email: abc@gmail.com</li>
                                    <li>Số điện thoại: 091234569</li>
                                    <li>Địa chỉ nhận hàng: Tầng 12A - Tòa nhà Pico Plaza, 20 Cộng Hòa, Phường 12, Quận Tân Bình, TP Hồ Chí Minh</li>
                                </ul>
                                <ul>
                                    <li><h4>Thông tin đơn hàng</h4></li>
                                    <li>Mã đơn hàng: <strong>#04E345</strong></li>
                                    <li>Ngày đặt: 12:00 - 14/05/2018</li>
                                    <li>Hình thức thanh toán: Giao hàng nhận tiền</li>
                                </ul>

                                <div class="ed-table-detail-order table-responsive">
                                    <h4>Chi tiết đơn hàng</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th width="25%">Sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Áo thun thể thao Nam Dunlop</td>
                                                <td>1.000.000đ</td>
                                                <td>1</td>
                                                <td><strong>1.000.000đ</strong></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Áo thun thể thao Nam Dunlop</td>
                                                <td>1.000.000đ</td>
                                                <td>1</td>
                                                <td><strong>1.000.000đ</strong></td>
                                            </tr>
                                            <tr class="bg-gray">
                                                <td align="right" colspan="4"><strong>Thành tiền</strong></td>
                                                <td align="right"><strong>2.000.000đ</strong></td>
                                            </tr>
                                            <tr class="bg-gray">
                                                <td align="right" colspan="4">Giảm giá <strong>(#3535345)</strong></td>
                                                <td align="right"><strong>1.000.000đ</strong></td>
                                            </tr>
                                            <tr class="bg-gray">
                                                <td align="right" colspan="4">Phí giao hàng:</td>
                                                <td align="right"><strong>0đ</strong></td>
                                            </tr>
                                            <tr class="bg-gray total-price">
                                                <td align="right" colspan="4"><strong>Tổng tiền:</strong></td>
                                                <td align="right"><strong>2.000.000đ</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="btn-back-turn">
                            <a href="#">Tiếp tục mua hàng</a>
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