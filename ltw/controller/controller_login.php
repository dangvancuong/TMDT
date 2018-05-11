<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			// 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				# code...
				$username= $_POST["username"];
				$password= $_POST["password"];
				$check = $this->model->fetch_one("select * from admin where ten_dang_nhap = '$username' and mat_khau = '$password' "); 
				if (count($check)>0) { 
				 	$_SESSION["username"]= $username;
				 	header('location:index.php?controller=home'); 

				}else {
					header('location:index.php?err=1');
				} 
				
				 
				
			}
			// load view
			include 'view/view_login.php';
		}
	}
	new controller_login();
 ?>