<?php  
	class controller_sanpham_delete extends controller{
		public function __construct(){
			parent:: __construct();  
			$id = $_GET['id'];
			$this->model->execute("DELETE FROM sanpham WHERE sanpham_ID = $id"); 
			header("location:index.php?controller=sanpham");
		}
	}
	new controller_sanpham_delete();
		
 ?>