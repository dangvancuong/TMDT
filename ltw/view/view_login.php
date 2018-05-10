<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 30px;">
		<div class="col-md-4 col-xs-offset-4">
		<?php
			//bao hieu dang nhap thanh cong hay that bai 
			if (isset($_GET["err"])==true) { 
		 ?>
		 <div class="alert alert-danger">
		 	sai tài khoản và mật khẩu
		 </div>
		 <?php } ?>
			<div class="panel panel-primary">
				<div class="panel-heading">Đăng nhập</div>
				<div class="panel-body">
					<form method="post" action="">
						<!-- row -->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-3">Tài khoản</div>
							<div class="col-md-9">
								<input type="text" name="username" class="form-control" required>
							</div>
						</div>
						<!-- end-row -->
						<!-- row -->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-3">Mật khẩu</div>
							<div class="col-md-9">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<!-- end-row -->
						<!-- row -->
						<div class="row" style="margin-top: 5px;">
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<input type="submit" value="Login" class="btn btn-primary"> 
							</div>
						</div>
						<!-- end-row -->
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>