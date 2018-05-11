<?php  
	class controller_khachhang_create_view extends controller{
		public function __construct(){
			parent:: __construct(); 
			include "view/view_khachhang_create.php";
		}
	}
	new controller_khachhang_create_view();
		
 ?>