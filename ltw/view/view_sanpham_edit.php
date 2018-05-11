
<div class="w3-container">  
	<div class="w3-green">
		<p class="w3-padding">Nhập sản phẩm</p>
	</div> 
	<form class="w3-container" action="index.php?controller=sanpham_edit" method="post">
		<p>      
			<label class="w3-text-green">Tên</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="ten_san_pham" type="text" value="<?php echo $list_sanpham['ten_san_pham']; ?>">
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="id" type="hidden" value="<?php echo $list_sanpham['sanpham_ID']; ?>">
		</p> 
		<p>      
			<label class="w3-text-green">Giá</label>
			<input class="w3-block w3-border w3-sand" style="padding: 3px;" name="gia_san_pham" type="number" min= "0" value="<?php echo $list_sanpham['gia_san_pham']; ?>">
		</p> 
		<p>
			<button class="w3-btn w3-green">Sửa</button>
		</p>
	</form>
    <br> 
</div>