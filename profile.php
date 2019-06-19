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
            				<h4><a href="index.php">Home</a> Thông tin cá nhân</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <section class="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <ul class="nav nav-tabs chinhsua-nav">
                                <li class="text-center">
                                    
                                    <div class="taikhoan-cuauser">
                                        <form>
                                            <div class="form-group">
                                                <label for="upload-photo">
                                                    <img src="resources/images/avartar/avartar-1.jpg">
                                                    <i class="fa fa-camera"></i>
                                                </label>
                                                <input type="file" name="photo" id="upload-photo" />
                                            </div>
                                        </form>
                                        <h4>Nguyễn A</h4>

                                    </div>
                                </li>
                                <li><h4>Quản lý thông tin</h4></li>
                                <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-user"></i> Thông tin cá nhân</a></li>
                                <li><a data-toggle="tab" href="#menu1"><i class="fa fa-history"></i> Lịch sử mua hàng</a></li>
                                <li><a data-toggle="tab" href="#menu2"><i class="fa fa-lock"></i> Đổi mật khẩu</a></li>
                                <li><a href="#" ><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content chinhsua-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <div class="infor-persional">
                                                <h5>Thông tin cá nhân</h5>
                                                <h6>Bạn có thể sửa thông tin cá nhân của mình tại đây.</h6>
                                            </div>

                                            <div class="form-update-infor">
                                                <form >
                                                    <div class="form-group">
                                                        <label for="name">Họ và tên</label>
                                                        <input type="text" placeholder="Họ tên" class="form-control" id="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" value="annguyen@gmail.com" class="form-control" id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Số diện thoại</label>
                                                        <input type="text" placeholder="Số diện thoại" class="form-control" id="phone">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="sel1">Tỉnh/Thành phố</label>
                                                                <select class="form-control" id="sel1">
                                                                    <option>Tỉnh/Thành phố</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="sel2">Quận/Huyện</label>
                                                                <select class="form-control" id="sel2">
                                                                    <option>Quận/Huyện</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="address">Số nhà/Đường/Phường/Xã</label>
                                                        <input type="text" placeholder="Số nhà/Đường/Phường/Xã" class="form-control" id="address">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="sel2">Giới tính</label>
                                                                <select class="form-control" id="sel2">
                                                                    <option>Chọn giới tính</option>
                                                                    <option>Nam</option>
                                                                    <option>Nữ</option>
                                                                    <option>Khác</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="name">Ngày sinh</label><br>
                                                                <input type="text" placeholder="dd/mm/yy" id="datepicker">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-default">Cập nhập thông tin</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="infor-persional">
                                        <h5>Lịch sử mua hàng</h5>
                                    </div>

                                    <div class="history table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Ngày đặt hàng</th>
                                                    <th>SL sản phẩm</th>
                                                    <th>Địa chỉ nhận hàng</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="order-detail.php">#1234</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>01</td>
                                                    <td>20A Cộng Hòa - Tân Bình - Tp. HCM</td>
                                                    <td>2.000.000đ</td>
                                                    <td><p class="dagiao">Đã giao</p></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="order-detail.php">#1234</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>01</td>
                                                    <td>20A Cộng Hòa - Tân Bình - Tp. HCM</td>
                                                    <td>2.000.000đ</td>
                                                    <td><p class="danggiao">Đang giao</p></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="order-detail.php">#1234</a></td>
                                                    <td>06/06/2018</td>
                                                    <td>01</td>
                                                    <td>20A Cộng Hòa - Tân Bình - Tp. HCM</td>
                                                    <td>2.000.000đ</td>
                                                    <td><p class="choxuly">Chờ xử lý</p></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                            <div class="infor-persional">
                                                <h5>Đổi mật khẩu</h5>
                                                <h6>Bạn có thể đổi mật khẩu của mình tại đây</h6>
                                            </div>

                                            <div class="form-update-infor">
                                                <form >
                                                    <div class="form-group">
                                                        <label for="pass-1">Mật khẩu cũ</label>
                                                        <input type="password" placeholder="Nhập mật khẩu cũ" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass-2">Mật khẩu mới</label>
                                                        <input type="password" placeholder="Nhập mật khẩu mới" class="form-control" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass-3">Xác nhận mật khẩu</label>
                                                        <input type="password" placeholder="Xác nhận mật khẩu" class="form-control" >
                                                    </div>
                                                    

                                                    <button type="submit" class="btn btn-default">Xác nhận</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <?php include 'views/footer.php';?>
    </section>
    <?php include 'views/script.php';?>
</body>

</html>