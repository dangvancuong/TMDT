<?php  
	class controller_sanpham_edit_view extends controller{
		public function __construct(){
			parent:: __construct();
			$id = $_GET['id'];
			$list_sanpham = $this->model->fetch_one("select * from sanpham where sanpham_ID = '$id'");
			// var_dump($list_sanpham); die();
			include "view/view_sanpham_edit.php";
		}
	}
	new controller_sanpham_edit_view();
		
 ?>