<!DOCTYPE html>
<html>
    <title>admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../public/font-awesome/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
    <style>
        html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    <body class="w3-light-grey">
        <!-- Top container -->
        <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
            <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
            <a href="index.php?act=logout"><span class="w3-bar-item w3-right">Logout</span></a>
            
        </div>
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
            <br>
            <div class="w3-container w3-row"> 
                <div class="w3-col s8 w3-bar">
                    <span>Welcome, <strong><?php echo $_SESSION["username"]; ?></strong></span><br> 
                </div>
            </div>
            <hr> 
            <div class="w3-bar-block">
                <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
                <a href="index.php?controller=home" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Trang chủ</a>
                <a href="index.php?controller=hoadon" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Danh sách hóa đơn</a>
                <a href="index.php?controller=sanpham" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Danh sách sản phẩm</a>
                <a href="index.php?controller=khachhang" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Danh sách khách hàng</a>
                 
            </div>
        </nav> 
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:300px;margin-top:43px;"> 
            <?php 
                if (file_exists($controller)){
                    include $controller;
                } 
            ?>
        </div>
        <script>
            // Get the Sidebar
            var mySidebar = document.getElementById("mySidebar");
            
            // Get the DIV with overlay effect
            var overlayBg = document.getElementById("myOverlay");
            
            // Toggle between showing and hiding the sidebar, and add overlay effect
            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                    overlayBg.style.display = "none";
                } else {
                    mySidebar.style.display = 'block';
                    overlayBg.style.display = "block";
                }
            }
            
            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
                overlayBg.style.display = "none";
            }
        </script>
    </body>
</html>