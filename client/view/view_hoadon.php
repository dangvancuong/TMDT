 
<hr>
<div class="w3-container"> 
    <h5>Danh sách đơn hàng <strong><?php if (isset($_SESSION['client'])) { echo $_SESSION['client']; } ?></strong> </h5> 
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
            <td>#</td>
            <td>Tên</td> 
            <td>Giá</td>
            <td>Số lượng</td>
            <td>SĐT</td>
            <td>Địa Chỉ</td>
            <td>Thời Gian</td> 
        </tr>   
        <?php $count = 0; foreach ($list_hoadon as $hoadon) { $count++;?> 
            <tr>
                <td><?php echo $count ?></td> 
                <td><?php echo $hoadon['ten_san_pham']; ?></td> 
                <td><?php echo $hoadon['gia_san_pham']; ?></td>     
                <td><?php echo $hoadon['so_luong']; ?></td>     
                <td><?php echo $hoadon['so_dien_thoai']; ?></td>     
                <td><?php echo $hoadon['dia_chi']; ?></td>      
                <td><?php echo $hoadon['thoi_gian_tao']; ?></td>      
            </tr> 
        <?php } ?> 
        
    </table> 
</div> 