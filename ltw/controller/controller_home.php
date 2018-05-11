<?php  
	class controller_home extends controller{
		public function __construct(){
			parent:: __construct();

			$list_admin = $this->model->fetch("select * from admin");
			$total_record = $this->model->num_rows("select * from admin"); 
			include "view/view_home.php";
		}
	}
	new controller_home();
		
 ?>