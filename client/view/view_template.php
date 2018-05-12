<!DOCTYPE html>
<html>
    <title>Trang người dùng</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .w3-row-padding img {margin-bottom: 12px}
        /* Set the width of the sidebar to 120px */
        .w3-sidebar {width: 120px;background: #222;}
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {margin-left: 120px}
        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
    <body>
        <!-- Icon Bar (Sidebar - hidden on small screens) -->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
            <?php  if (isset($_SESSION["client"])) { ?>
            <a href="index.php?act=logout" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-user w3-xxlarge"></i>
                <p>Logout</p>
            </a>
            <?php } else{?>
                <a href="index.php?controller=view_login" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-user w3-xxlarge"></i>
                <p>LOGIN</p>
            </a>
            <?php } ?>
            
            <a href="index.php?controller=view_sanpham" class="w3-bar-item w3-button w3-padding-large">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>HOME</p>
            </a> 
            <a href="index.php?controller=view_donhang" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
                <i class="fa fa-eye w3-xxlarge"></i>
                <p>Đơn Hàng</p>
            </a> 
        </nav> 
        <div class="w3-padding-large" id="main"> 
            <h1 class="w3-center">Chào! <?php  if (isset($_SESSION["client"])) {echo $_SESSION["client"]; }?></h1>
            <?php if (file_exists($controller)){
                include $controller;
                } 
            ?>
            

        </div>
    </body>
</html>