 
<hr>
<div class="w3-container"> 
    <h5>Danh sách khách hàng <a class="w3-right w3-btn w3-text-green" href="index.php?controller=khachhang_create_view">Thêm</a></h5> 
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
            <td>#</td>
            <td>Tên</td> 
            <td>sđt</td>
            <td>địa chỉ</td>
            <td>mật khẩu</td>
            <td colspan="2">Sự Kiện</td>
        </tr>   
        <?php $count = 0; foreach ($list_khachhang as $khachhang) { $count++;?> 
            <tr>
                <td><?php echo $count ?></td> 
                <td><?php echo $khachhang['ho_ten']; ?></td>     
                <td><?php echo $khachhang['so_dien_thoai']; ?></td>     
                <td><?php echo $khachhang['mat_khau']; ?></td>     
                <td><?php echo $khachhang['dia_chi']; ?></td>     
                <td> <a href="index.php?controller=khachhang_edit_view&id=<?php echo $khachhang['khachhang_ID']; ?>" class="w3-text-blue">Sửa</a></td>
                <td> <a href="index.php?controller=khachhang_delete&id=<?php echo $khachhang['khachhang_ID']; ?>" class="w3-text-red">xóa</a></td> 
            </tr> 
        <?php } ?> 
        
    </table> 
</div> 