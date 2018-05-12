<?php   
	 $connect = mysqli_connect("localhost", "root", "", "quanlyhoadon");
	 mysqli_set_charset($connect, "UTF8");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM sanpham 
  WHERE ten_san_pham LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM sanpham
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
        <tr> 
            <td>Tên</td> 
            <td>Giá</td>
            <td colspan="2">Sự Kiện</td>
        </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["ten_san_pham"].'</td>
    <td>'.$row["gia_san_pham"].'</td> 
    <td> <a href="index.php?controller=sanpham_edit_view&id='.$row["sanpham_ID"].'    "class="w3-text-blue">Sửa</a></td>
    <td> <a href="index.php?controller=sanpham_delete&id='.$row['sanpham_ID'].'" class="w3-text-red">xóa</a></td>
   </tr>

  ';
 }
 $output .= '</table>';
 echo $output;
}
else
{
 echo 'Data Not Found';
}
	
 ?>