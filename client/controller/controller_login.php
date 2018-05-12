<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			// 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				# code...
				$username= $_POST["ho_ten"];
				$password= $_POST["mat_khau"]; 
				$check = $this->model->fetch_one("select * from khachhang where ho_ten = '$username' and mat_khau = '$password' "); 
				if (count($check)>0) {  
				 	$_SESSION["id_client"]= $check['khachhang_ID'];
				 	$_SESSION["client"]= $username;
				 	header('location:index.php?controller=view_sanpham'); 

				}else {
					header('location:index.php?err=1');
				} 
				
				 
				
			}
			// load view
			include 'view/view_sanpham.php';
		}
	}
	new controller_login();
 ?>