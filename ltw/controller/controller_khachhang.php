<?php  
	class controller_khachhang extends controller{
		public function __construct(){
			parent:: __construct();

			$list_khachhang = $this->model->fetch("select * from khachhang");
			$total_record = $this->model->num_rows("select * from khachhang"); 
			include "view/view_khachhang.php";
		}
	}
	new controller_khachhang();
		
 ?>