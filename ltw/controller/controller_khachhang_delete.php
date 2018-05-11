<?php  
	class controller_khachhang_delete extends controller{
		public function __construct(){
			parent:: __construct();  
			$id = $_GET['id'];
			$this->model->execute("DELETE FROM khachhang WHERE khachhang_ID = $id"); 
			header("location:index.php?controller=khachhang");
		}
	}
	new controller_khachhang_delete();
		
 ?>