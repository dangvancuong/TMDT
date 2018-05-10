<?php  
	class controller_hoadon extends controller{
		public function __construct(){
			parent:: __construct();
			include "view/view_hoadon.php";
		}
	}
	new controller_hoadon();
		
 ?>