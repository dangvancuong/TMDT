<?php  
	class controller_sanpham extends controller{
		public function __construct(){
			parent:: __construct();

			$list_sanpham = $this->model->fetch("select * from sanpham");
			$total_record = $this->model->num_rows("select * from sanpham"); 
			include "view/view_sanpham.php";
		}
	}
	new controller_sanpham();
		
 ?>