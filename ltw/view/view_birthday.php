<div class="col-md-8 col-xs-offset-2">

</div>
	<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Sinh Nhật Nhân Viên</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 250px;text-align: center;">Họ Tên</th>
				
					<th style="text-align: center;">Sinh Nhật Tuổi</th>
					<th style="text-align: center;width: 150px">Còn</th>
				</tr>
				<?php 
					foreach ($arr as $key => $value) {
						# code...
						
				 ?>
				<tr>
					<td  style="text-align: center;">
						<?php echo $value["hoten"] ?>
						</td>
					
					<td style="text-align: center;">
						<?php
						$a=substr($value['ngaysinh'],0,4);
						// echo $a;
						$b=date('Y');
						// echo $b;
						$c= $b-$a;
						echo $c;
						 ?>
					</td>
					<td style="text-align: center;">
						<?php
						$ngay=substr($value['ngaysinh'],8,10);
						// echo $ngay;
						$thang=substr($value['ngaysinh'],5,2);
						$ngayht=date('d')+1;
						// echo $ngayht;
						$thanght=date('m');
						// echo $thanght;
						if ($thang =$thanght) {
							# code...
							echo abs($ngayht-$ngay)." Ngày";
						}
						else {
							# code...
							echo abs($thang-$thanght)." Tháng".abs($ngayht-$ngay)." Ngày";
						}
						// echo $b;
						// $c= $b-$a;
						// echo $c;
						 ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<style type="text/css">
				.pagination{
					padding: 0px;
					margin: 0px;
				}
			</style>
			<ul class="pagination">
				<li class="active"><a href="#">Trang</a></li>
				<?php 
				for($i = 1; $i<=$page; $i++){
			 	?>
				<li>
				<a href="index.php?controller=birthday&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>