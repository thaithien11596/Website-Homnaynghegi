
 <style>
 .firstrow{
	  background:#0040FF;
   	  color:#CEF6F5;
	 text-align:center;
	 }
	a{
		text-decoration:none}

 a:hover{
	 color:blue;
	 }
 </style>
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN BÀI HÁT</div>
<div style="color: blue; float: left;"> SỐ TRANG:</div>
<?php 
	
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}
	if($get_trang=='' || $get_trang==1)
	{
		$trang1=0;
	}else{
		$trang1=($get_trang*5)-5;
	}
	
	$sql="select * from baihat limit $trang1,5"; // trang1 (vị trí bài hát hiện tại) , lấy 5 bài hát
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
	
	//-------//đếm số dòng có trong bài hát -> tương ứng đếm số bài hát
	$sql_sql="SELECT count(*) FROM baihat";
	$result = $objPdo->query($sql_sql);
	$row = $result->fetch(PDO::FETCH_NUM);
	$a=ceil($row[0]/5);
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlybaihat&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>';	
	}
	echo '<br>'.'TỔNG BÀI HÁT LÀ: '.$row[0];
	// ---------------------------- tìm kiếm sp
	if(isset($_POST['sub-timkiem'])){
	$matk=$_POST['timkiem'];
	$sql_tk="select * from baihat where idBaihat='$matk'";
	$objStmtk = $objPdo->query($sql_tk);
	$datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
			$m=$rowtk['idBaihat'];
			if($matk=='$m'){
				echo '<script>alert("Không tìm thấy mã bài hát")</script>';
			}else{
	?>
    <BR /><hr /><p style="color:#000;background:pink" align="center">BÀI HÁT TÌM KIẾM:</p>
	<table width="100%" border="1">
      <tr align="center">
      	
        <td>Id Bài Hát</td>
        <td>Tên Bài Hát</td>
        <td>Lời Bài Hát</td>
        <td>Id Nhạc Sĩ</td> 
        <td>Id Quốc Gia</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
      	
        <td><?php echo $rowtk['idBaihat'] ?></td>
        <td><?php echo $rowtk['TenBaihat'] ?></td>
        <td><?php echo $rowtk['LoiBaihat'] ?></td>
        <td><?php echo $rowtk['idNhacsi'] ?></td>
        <td><?php echo $rowtk['idQuocgia'] ?></td> 
        
        <td><a href="index.php?quanly=quanlybaihat&ac=sua&id=<?php echo $rowtk['idBaihat'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlybaihat/xuly.php?id=<?php echo $rowtk['idBaihat'];?>" onclick="return confirm('Bạn có chắc xóa sản phẩm <?php echo $rowtk['idBaihat']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php	
       		} 
		}
	?>
	</table>
	<p style="background:pink;height:20px"></p>
	<?php } ?>
    <!------- END CODE TÌM KIẾM --------->
     <br />
<p style="width:200px;color:#00F;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
		Nhập ID Bài Hát:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm Bài Hát" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center">
    <td>Id Bài Hát</td>
    <td>Tên Bài Hát</td>
    <td>Lời Bài Hát</td>
    <td>Id Nhạc Sĩ</td> 
    <td>Id Quốc Gia</td>
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
  	foreach($data as $row)
	{ 
  ?>
  <tr align="center">
    <td><?php echo $row['idBaihat'] ?></td>
    <td><?php echo $row['TenBaihat'] ?></td>
    <td><?php echo $row['LoiBaihat'] ?></td>
    <td><?php echo $row['idNhacsi'] ?></td>
    <td><?php echo $row['idQuocgia'] ?></td>

    <td ><a href="index.php?quanly=quanlybaihat&ac=sua&id=<?php echo $row['idBaihat'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlybaihat/xuly.php?id=<?php echo $row['idBaihat'];?>" onclick="return confirm('Bạn có chắc xóa Bài Hát thứ <?php echo $row['idBaihat']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php	
   } 
   ?>
</table>
<BR /><HR />

