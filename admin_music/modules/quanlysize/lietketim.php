<style>
 a:hover{
	 color:#F00;
	 }
 </style>
TRANG :
<?php
	include('modules/config.php');
	if(isset($_POST['timkiem'])){
	$matim=$_POST['masp'];
	echo $matim;
	$sql="select * from loaisize where Masp='$matim'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
	?>

<br />
<table width="60%" border="1">
  <tr>
    <td width="41%"><div align="center">MÃ SẢN PHẨM</div></td>
    <td width="37%"><div align="center">SIZE</div></td>
    <td colspan="2"><div align="center">QUẢN LÝ</div></td>
  </tr>
 <?php foreach($data as $row){?>
  <tr>
    <td><?php echo $row['Masp'] ?></td>
    <td><?php echo $row['size'] ?></td> 
    <td width="11%"><div align="center"><a href="index.php?quanly=quanlysize&ac=sua&id=<?php echo $row['Masp'] ?>&size=<?php echo  $row['size']?>">SỬA</a></div></td>
    <td width="11%"><div align="center"><a href="modules/quanlysize/xuly.php?id=<?php echo $row['Masp'];?>&size=<?php echo  $row['size']?>">XÓA</a></div></td>
  </tr>
  <?php }
  }?>
</table>
