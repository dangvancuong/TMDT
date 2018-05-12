

<div class="w3-row">
	<?php foreach ($list_sanpham as $sanpham) { ?>
		<div class="w3-col s4 w3-center" style="border: 1px solid #ccc;">
	        <p>Tên: <strong><?php echo $sanpham['ten_san_pham']; ?></strong></p>
	        <p>Giá: <strong class="w3-text-red"><?php echo $sanpham['gia_san_pham']; ?></strong> <i> VNĐ</i></p> 
	    </div>
	<?php } ?> 
   
</div>