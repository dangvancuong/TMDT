<?php  
	class controller_hoadon extends controller{
		public function __construct(){
			parent:: __construct();
			$list_hoadon = $this->model->fetch("
				SELECT hoadon.*, sanpham.*, khachhang.*, hoadon_sanpham.*
				FROM hoadon
				    JOIN hoadon_sanpham
				        ON hoadon.hoadon_ID= hoadon_sanpham.hoadon_ID
				    JOIN sanpham
				        ON sanpham.sanpham_ID = hoadon_sanpham.sanpham_ID
				    JOIN khachhang
				        ON khachhang.khachhang_ID = hoadon.khachhang_ID 
				GROUP BY hoadon.hoadon_ID  
				");
			$list_donhang = $this->model->fetch("
				SELECT hoadon.*, sanpham.*, khachhang.*, hoadon_sanpham.*
				FROM hoadon
				    JOIN hoadon_sanpham
				        ON hoadon.hoadon_ID= hoadon_sanpham.hoadon_ID
				    JOIN sanpham
				        ON sanpham.sanpham_ID = hoadon_sanpham.sanpham_ID
				    JOIN khachhang
				        ON khachhang.khachhang_ID = hoadon.khachhang_ID 
				
				");
 
			include "view/view_hoadon.php";
		}
	}
	new controller_hoadon();
		
 ?>