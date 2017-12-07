<style>
	.firstrow{
		background:#0FF;}
 a:hover{
	 color:#F00;
	 }
	
	a{
		text-decoration:none}

 </style>
<div style="float:right;font-size:30px;color:#F00">QUẢN LÝ THÔNG TIN THỂ LOẠI</div>
TRANG :
<?php
	include('modules/config.php');
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}
	if($get_trang=='' || $get_trang==1)
	{
		$trang1=0;
	}else{
		$trang1=($get_trang*30)-30;
	}
	$sql="select * from loaisize limit $trang1,30"; // trang1 (vị trí sản phẩm hiện tại) , lấy 5 sản phẩm
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
	
	//-------//đếm số dòng có trong sản phẩm -> tương ứng đếm số sản phẩm
	$sql_sql="SELECT count(*) FROM loaisize";
	$result_1 = $objPdo->query($sql_sql);
	$row_1 = $result_1->fetch(PDO::FETCH_NUM);
	$a=ceil($row_1[0]/30);
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlysize&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>';
	}
	echo '<br>'.'tổng sản phẩm là: '.$row_1[0];
	//--------------- size tìm kiếm theo mã sản phẩm
	?>

<br />
	
<p style="color:#00F;size:20px;font-style:inherit"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<a href="index.php?quanly=quanlysize&ac=timkiem"> TÌM KIẾM</a>


<table width="60%" border="1">
  <tr >
    <td width="41%" ><div align="center">MÃ SẢN PHẨM</div></td>
    <td width="37%"><div align="center">SIZE</div></td>
    <td>Sửa</td>
    <td>Xóa</td>
  </tr>
 <?php foreach($data as $row){?>
  <tr>
    <td><?php echo $row['Masp'] ?></td>
    <td><?php echo $row['size'] ?></td> 
    <td width="11%"><div align="center"><a href="index.php?quanly=quanlysize&ac=sua&id=<?php echo $row['Masp'] ?>&size=<?php echo  $row['size']?>"><img src="background/sua.jpg" style="width:30px;height:30px"/></a></div></td>
    <td width="11%"><div align="center"><a href="modules/quanlysize/xuly.php?id=<?php echo $row['Masp'];?>&size=<?php echo  $row['size']?>" onclick="return confirm('Bạn có xác nhận xóa size này hay không')"><img src="background/xoa.jpg" style="width:30px;height:30px"/></a></div></td>
  </tr>
  <?php }?>
</table>
