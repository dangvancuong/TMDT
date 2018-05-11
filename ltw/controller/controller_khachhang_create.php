<?php  
	class controller_khachhang_create extends controller{
		public function __construct(){
			parent:: __construct();  
			$ten = $_POST['ho_ten'];
			$sdt = $_POST['so_dien_thoai']; 
			$diachi =  $_POST['dia_chi']; 
			$mk =  $_POST['mat_khau']; 
			$data = $this->model->execute("insert into khachhang(ho_ten,so_dien_thoai,dia_chi,mat_khau) values('$ten','$sdt','$diachi','$mk')"); 
			header("location:index.php?controller=khachhang"); 
		}
	}
	new controller_khachhang_create();
		
 ?>