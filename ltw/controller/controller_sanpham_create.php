<?php  
	class controller_sanpham_create extends controller{
		public function __construct(){
			parent:: __construct();  
			$ten = $_POST['ten_san_pham'];
			$gia = (int)$_POST['gia_san_pham']; 
			$data = $this->model->execute("insert into sanpham(ten_san_pham,gia_san_pham) values('$ten',$gia)"); 
			header("location:index.php?controller=sanpham"); 
		}
	}
	new controller_sanpham_create();
		
 ?>