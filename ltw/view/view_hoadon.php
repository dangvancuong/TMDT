 
<hr>
<div class="w3-container"> 
    <h5>Danh sách hóa đơn </h5> 
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white"> 

        <?php 
            foreach ($list_hoadon as $hoadon) {
        ?>
        <tr></tr>
        <tr class="w3-text-white     w3-blue">
            <td><strong> Đơn hàng Số : </strong><?php echo $hoadon['hoadon_ID']; ?></td>
            <td><strong> tên: </strong><?php echo $hoadon['ho_ten']; ?></td>
            <td><strong> số điện thoại: </strong><?php echo $hoadon['so_dien_thoai']; ?></td>
            <td><strong> Địa chỉ: </strong><?php echo $hoadon['dia_chi']; ?></td>
        </tr>
        <tr class="w3-text-blue">
            <td colspan="2">tên sản phẩm </td>  
            <td>giá (VNĐ) </td>  
            <td>Số Lượng </td>     
        </tr>
        <?php 
                $tong = 0;
                foreach ($list_donhang as $donhang) {
                    if ($donhang['hoadon_ID']==$hoadon['hoadon_ID']) {
                        
                        ?>
                        <tr>
                            <td colspan="2"><?php echo $donhang['ten_san_pham']; ?></td> 
                            <td><?php echo $donhang['gia_san_pham']; ?></td> 
                            <td><?php echo $donhang['so_luong']; ?></td> 
                        <?php $tong = $tong + $donhang['so_luong']*$donhang['gia_san_pham'];  ?>
                        </tr>
                        <?php 
                        

                    }

                }
                ?>
                <tr class="w3-text-red"><td colspan="3"><strong>tổng tiền: </strong></td><td><?php echo $tong; ?></td></tr>
                <?php
            }
         ?>
        
        
    </table>
    <br> 
</div> 