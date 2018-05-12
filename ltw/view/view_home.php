 
<hr>
<div class="w3-container"> 
    <h5>Danh sách Admin</h5> 
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr>
            <td>#</td>
            <td>Tên</td> 
            <td>Mật Khẩu</td> 
            <td>Cập Nhật Lần Cuối</td> 
        </tr> 
        <?php $count = 0; foreach ($list_admin as $admin) { $count++;?> 
            <tr>
                <td><?php echo $count ?></td> 
                <td><?php echo $admin['ten_dang_nhap']; ?></td> 
                <td><?php echo $admin['mat_khau']; ?></td> 
                <td><?php echo $admin['dang_nhap_lan_cuoi']; ?></td>   
            </tr> 
        <?php } ?>  
        
        
    </table>
    <br>
    <button class="w3-button w3-dark-grey">More Countries &nbsp;<i class="fa fa-arrow-right"></i></button>
</div> 