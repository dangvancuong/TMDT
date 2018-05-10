<?php  
	class controller_sanpham_edit extends controller{
		public function __construct(){
			parent:: __construct();  
			$ten = $_POST['ten_san_pham'];
			$gia = $_POST['gia_san_pham']; 
			$id  = (int)$_POST['id']; 
			$data = $this->model->execute(" UPDATE sanpham
											SET ten_san_pham = '$ten', gia_san_pham = '$gia'
											WHERE sanpham_ID = $id"); 
			header("location:index.php?controller=sanpham"); 
		}
	}
	new controller_sanpham_edit();
		
 ?>