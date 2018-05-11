
<div class="w3-container">  
	<div class="w3-green">
		<p class="w3-padding">Nhập khách hàng</p>
	</div> 
	<form class="w3-container" action="index.php?controller=khachhang_edit" method="post">
		<p>      
			<label class="w3-text-green">Tên</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="ho_ten" type="text" value="<?php echo $list_khachhang['ho_ten']; ?>">
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="id" type="hidden" value="<?php echo $list_khachhang['khachhang_ID']; ?>">
		</p> 
		<p>      
			<label class="w3-text-green">số điện thoại</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="so_dien_thoai" type="text"  value="<?php echo $list_khachhang['so_dien_thoai']; ?>">
		</p> 
		<p>      
			<label class="w3-text-green">địa chỉ</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="dia_chi" type="text" value="<?php echo $list_khachhang['dia_chi']; ?>">
		</p> 
		<p>      
			<label class="w3-text-green">mật khẩu</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="mat_khau" type="password" value="<?php echo $list_khachhang['mat_khau']; ?>">
		</p> 

		<p>
			<button class="w3-btn w3-green">SỬA</button>
		</p>
	</form>
    <br> 
</div>