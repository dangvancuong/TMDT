<!DOCTYPE html>
<html lang="en"><head>
    <title> Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <script type="text/javascript" src="layout/vendor/bootstrap.js"></script>
    <link rel="stylesheet" href="layout/vendor/bootstrap.css">
    <link rel="stylesheet" href="layout/css/1.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <script language="javascript" src="public/ckeditor/ckeditor.js"></script>
</head>
<body >

	<nav class="navbar navbar-inverse navbar-fixed-top" style="background:lightblue">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="green" href="#">Chào <?php echo $_SESSION["username"]; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="background:lightblue">
          <ul class="nav navbar-nav"  style="background:lightblue">
            <li class="active"  ><a href="index.php?controller=home" >Trang Chủ</a></li>
            <li class="active"><a href="index.php?controller=staff">Danh sách Nhân Viên</a></li>
            <li class="active"><a href="index.php?controller=user">Tài Khoản Nhân Viên</a></li>
            <li class="active"><a href="index.php?controller=birthday">Sinh Nhật Nhân Viên</a></li>
            <li class="active"><a href="index.php?act=logout">Thoát</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<!-- include controller -->
	<div class="container" style="margin-top: 100px">
		<?php if (file_exists($controller)){
			include $controller;
		} 
		?>
			
	</div>

</body>
</html>