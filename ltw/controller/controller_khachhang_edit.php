<?php  
	class controller_khachhang_edit extends controller{
		public function __construct(){
			parent:: __construct(); 
			$id = $_POST['id'];
			$ten = $_POST['ho_ten'];
			$sdt = $_POST['so_dien_thoai']; 
			$diachi =  $_POST['dia_chi']; 
			$mk =  $_POST['mat_khau'];
			$data = $this->model->execute(" UPDATE khachhang
											SET ho_ten = '$ten',so_dien_thoai = '$sdt',dia_chi ='$diachi' ,mat_khau = '$mk'
											WHERE khachhang_ID = $id"); 
			header("location:index.php?controller=khachhang"); 
		}
	}
	new controller_khachhang_edit();
		
 ?>