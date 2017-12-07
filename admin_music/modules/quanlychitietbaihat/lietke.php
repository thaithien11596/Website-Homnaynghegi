
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN CHI TIẾT BÀI HÁT</div>
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
		$trang1=($get_trang*6)-6;
	}
	
	$sql="select * from chitietbaihat limit $trang1,6"; // trang1 (vị trí chi tiết bài hát hiện tại) , lấy 6 chi tiết bài hát
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
	
	//-------//đếm số dòng có trong chi tiết bài hát -> tương ứng đếm số chi tiết bài hát
	$sql_sql="SELECT count(*) FROM chitietbaihat";
	$result = $objPdo->query($sql_sql);
	$row = $result->fetch(PDO::FETCH_NUM);
	$a=ceil($row[0]/7);
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlychitietbaihat&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>';	
	}
	echo '<br>'.'TỔNG CHI TIẾT BÀI HÁT LÀ: '.$row[0];
	// ---------------------------- tìm kiếm sp
	if(isset($_POST['sub-timkiem'])){
	$matk=$_POST['timkiem'];
	$sql_tk="select * from chitietbaihat where idChitietbaihat='$matk'";
	$objStmtk = $objPdo->query($sql_tk);
	$datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
			$m=$rowtk['idChitietbaihat'];
			if($matk=='$m'){
				echo '<script>alert("Không tìm thấy Id Chi tiết bài hát")</script>';
			}else{
	?>
    <BR /><hr /><p style="color:#000;background:pink" align="center">CHI TIẾT BÀI HÁT TÌM KIẾM:</p>
	<table width="100%" border="1">
      <tr align="center">
      	
        <td>Id Chi tiết Bài Hát</td>
        <td>Image Bải hát</td>
        <td>Ngày Đăng Bài Hát</td>
        <td>Lượt Nghe Bài Hát</td> 
        <td>Lượt Tải Bài Hát</td>
        <td>Link Bài Hát</td>
        <td>Id Bài Hát</td>
        <td>Id Ca sĩ</td>
        <td>Id Thể Loại</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
      	
        <td><?php echo $rowtk['idChitietbaihat'] ?></td>
        <td><?php echo $rowtk['imageBaihat'] ?></td>
        <td><?php echo $rowtk['NgaydangBaihat'] ?></td>
        <td><?php echo $rowtk['LuotngheBaihat'] ?></td>
        <td><?php echo $rowtk['LuottaiBaihat'] ?></td>
        <td><?php echo $rowtk['LinkBaihat'] ?></td>
        <td><?php echo $rowtk['idBaihat'] ?></td>
        <td><?php echo $rowtk['idCasi'] ?></td>
        <td><?php echo $rowtk['idTheloai'] ?></td>
       
        
        <td><a href="index.php?quanly=quanlychitietbaihat&ac=sua&id=<?php echo $rowtk['idChitietbaihat'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlychitietbaihat/xuly.php?id=<?php echo $rowtk['idChitietbaihat'];?>" onclick="return confirm('Bạn có chắc xóa Chi tiết Bài hát <?php echo $rowtk['idChitietbaihat']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
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
		Nhập ID Chi tiết BH:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm Chi Tiết Bài Hát" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center">
    <td>Id Chi tiết Bài Hát</td>
    <td>Image Bải hát</td>
    <td>Ngày Đăng Bài Hát</td>
    <td>Lượt Nghe Bài Hát</td> 
    <td>Lượt Tải Bài Hát</td>
    <td>Link Bài Hát</td>
    <td>Id Bài Hát</td>
    <td>Id Ca sĩ</td>
    <td>Id Thể Loại</td>
    
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
  	foreach($data as $row)
	{ 
  ?>
  <tr align="center">
    <td><?php echo $row['idChitietbaihat'] ?></td>
    <td><?php echo $row['imageBaihat'] ?></td>
    <td><?php echo $row['NgaydangBaihat'] ?></td>
    <td><?php echo $row['LuotngheBaihat'] ?></td>
    <td><?php echo $row['LuottaiBaihat'] ?></td>
    <td><?php echo $row['LinkBaihat'] ?></td>
    <td><?php echo $row['idBaihat'] ?></td>
    <td><?php echo $row['idCasi'] ?></td>
   	<td><?php echo $row['idTheloai'] ?></td>
   

    <td ><a href="index.php?quanly=quanlychitietbaihat&ac=sua&id=<?php echo $row['idChitietbaihat'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlychitietbaihat/xuly.php?id=<?php echo $row['idChitietbaihat'];?>" onclick="return confirm('Bạn có chắc xóa Chi tiết Bài hát <?php echo $row['idChitietbaihat']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php	
   } 
   ?>
</table>
<BR /><HR />

