 
<hr>
<div class="w3-container"> 
    <h5>Danh sách sản phẩm <a class="w3-right w3-btn w3-text-green" href="index.php?controller=sanpham_create_view">Thêm</a></h5> 
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
            <td>#</td>
            <td>Tên</td> 
            <td>Giá</td>
            <td colspan="2">Sự Kiện</td>
        </tr>   
        <?php $count = 0; foreach ($list_sanpham as $sanpham) { $count++;?> 
            <tr>
                <td><?php echo $count ?></td> 
                <td><?php echo $sanpham['ten_san_pham']; ?></td> 
                <td><?php echo $sanpham['gia_san_pham']; ?></td>     
                <td> <a href="index.php?controller=sanpham_edit_view&id=<?php echo $sanpham['sanpham_ID']; ?>" class="w3-text-blue">Sửa</a></td>
                <td> <a href="index.php?controller=sanpham_delete&id=<?php echo $sanpham['sanpham_ID']; ?>" class="w3-text-red">xóa</a></td> 
            </tr> 
        <?php } ?> 
        
    </table> 
</div> 