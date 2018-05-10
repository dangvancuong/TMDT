<?php  
	class controller_sanpham_create_view extends controller{
		public function __construct(){
			parent:: __construct(); 
			include "view/view_sanpham_create.php";
		}
	}
	new controller_sanpham_create_view();
		
 ?>