<?php  
	class controller_view_login extends controller{
		public function __construct(){
			parent:: __construct(); 
			include "view/view_login.php";
		}
	}
	new controller_view_login();
		
 ?>