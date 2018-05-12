<?php  
	class controller_hoadon extends controller{
		public function __construct(){
			parent:: __construct();
			$id = 0;
			if (isset($_SESSION['id_client'])) {
				$id = $_SESSION['id_client'] ;
			}
			
			$list_hoadon = $this->model->fetch("
				SELECT hoadon.*, sanpham.*, khachhang.*, hoadon_sanpham.*
				FROM hoadon
				    JOIN hoadon_sanpham
				        ON hoadon.hoadon_ID= hoadon_sanpham.hoadon_ID
				    JOIN sanpham
				        ON sanpham.sanpham_ID = hoadon_sanpham.sanpham_ID
				    JOIN khachhang
				        ON khachhang.khachhang_ID = hoadon.khachhang_ID 
				WHERE khachhang.khachhang_ID = '$id'
				");  
			include "view/view_hoadon.php";
		}
	}
	new controller_hoadon();
		
 ?>