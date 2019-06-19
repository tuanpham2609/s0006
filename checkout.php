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
            				<h4><a href="index.php">Home</a> Thanh toán</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="checkout">
                <div class="container">
                    <div class="row margin0">
                        
                        <div class="col-md-8">
                            <ul class="ed-checkout setting-ul">
                                <li>
                                    <div class="title-1 "><i class="fa fa-plus"></i> Thông tin khách hàng</div>
                                    <ul class="submenu-1 setting-ul">
                                        <div class="row border-bottom-step1">
                                            <div class="col-md-12 new-customer">
                                                <h4><strong>Thông tin khách hàng</strong></h4>
                                                <!-- <h5>Tùy chọn thanh toán:</h5> -->
                                                <div class="team-radio">
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline not-account-1" name="radios2" value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span>Đăng nhập
                                                    </label>
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline not-account" name="radios2" value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span>Tôi muốn mua hàng không cần đăng nhập
                                                    </label>
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline create-account" name="radios2" checked value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span>Tạo tài khoản
                                                    </label>
                                                </div>
                                                <div class="show-regis">
                                                    <form class="row">
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" placeholder="Họ tên" class="form-control" >
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="email" class="form-control" placeholder="Email" >
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="password" class="form-control" placeholder="Mật khẩu" >
                                                        </div>
                                                        
                                                    </form>
                                                </div>

                                                <div class="show-login">
                                                    <form class="row">
                                                        <div class="form-group col-sm-6">
                                                            <input type="email" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="password" class="form-control" placeholder="Mật khẩu">
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <button type="submit" class="btn btn-default">Đăng Nhập</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li>
                                    <div class="title-1 "><i class="fa fa-plus"></i> Địa chỉ giao hàng</div>
                                    <ul class="submenu-1 setting-ul">
                                        <div class="row">
                                            <div class="col-xs-12 team-rdo-1">
                                                <label class="cus-rdo-btn">
                                                    <input type="radio" class="radio-inline " name="radios3" value="">
                                                    <span class="outside">
                                                        <span class="inside"></span>
                                                    </span>Địa chỉ giao hàng cũ
                                                </label>
                                                <label class="cus-rdo-btn">
                                                    <input type="radio" class="radio-inline " name="radios3" checked value="">
                                                    <span class="outside">
                                                        <span class="inside"></span>
                                                    </span>Địa chỉ giao hàng khác
                                                </label>
                                                
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="old-customer-1">
                                                    <form class="row">
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" placeholder="Tên" class="form-control" >
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="email" placeholder="Email" class="form-control" >
                                                        </div>
                                                        <div class="form-group col-sm-6">
                                                            <input type="text" placeholder="Số điện thoại" class="form-control" >
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <input type="text" placeholder="Địa chỉ giao hàng" class="form-control" >
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control" id="sel23">
                                                                    <option>Quận/Huyện</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select class="form-control" id="sel233">
                                                                    <option>Tỉnh/Thành phố</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="checkbox col-sm-12">
                                                            <label class="checkbox-1">Lưu thông tin cho lần mua hàng tiếp theo
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <textarea class="form-control" placeholder="Ghi chú đơn hàng" rows="5" id="comment"></textarea>
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </ul>
                                </li>
                                <li>
                                    <div class="title-1"><i class="fa fa-plus"></i> Hình thức thanh toán</div>
                                    <ul class="submenu-1 setting-ul">
                                        <div class="cod-qrcode">
                                            <ul class=" setting-ul">
                                                <h4>Vui lòng chọn phương thức thanh toán để sử dụng cho đơn đặt hàng này.</h4>
                                                <li>
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline" name="radios1" value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span>COD - Thanh toán khi nhận hàng
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline" name="radios1" value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span><img src="resources/images/logo/vnpay.png">
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cus-rdo-btn">
                                                        <input type="radio" class="radio-inline" name="radios1" value="">
                                                        <span class="outside">
                                                            <span class="inside"></span>
                                                        </span><img src="resources/images/logo/qrcode.png">
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <div class="your-order">
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
                                            <tr class="apdung-code">
                                                <td colspan="3">
                                                    <form>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Mã giảm giá">
                                                            <div class="input-group-btn">
                                                                <button class="btn " type="submit">
                                                                    Áp dụng
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phí vận chuyển</td>
                                                <td></td>
                                                <td>0đ</td>
                                            </tr>
                                            <tr>
                                                <td>Giảm giá: <strong>#345234</strong></td>
                                                <td></td>
                                                <td>50.000đ</td>
                                            </tr>
                                            <tr class="tongtien">
                                                <td colspan="3">Tổng tiền: 744.000đ</td>
                                            </tr>
                                            <tr class="thanhtoan-btn">
                                                <td colspan="3"><a href="#">Thanh toán</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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