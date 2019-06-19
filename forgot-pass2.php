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
            				<h4><a href="index.php">Home</a> Đăng ký</h4>
            			</div>
            		</div>
            	</div>
            </div>

            <div class="login-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 ed-pd-log">
                            <div class="form-log form-forget-pass">
                                <div class="icon-user">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <h4>Đặt lại mật khẩu</h4>

                                <form>
                                    
                                    <div class="form-group">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Mật khẩu mới">
                                    </div>
                                    <div class="form-group">
                                        <i class="fa fa-lock"></i>
                                        <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" >
                                    </div>
                                    
                                    <button type="submit" class="btn btn-default">Xác nhận</button>

                                    

                                </form>
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