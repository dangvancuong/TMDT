<?php  
	class controller_khachhang_edit_view extends controller{
		public function __construct(){
			parent:: __construct();
			$id = $_GET['id'];
			$list_khachhang = $this->model->fetch_one("select * from khachhang where khachhang_ID = '$id'");
			// var_dump($list_khachhang); die();
			include "view/view_khachhang_edit.php";
		}
	}
	new controller_khachhang_edit_view();
		
 ?>