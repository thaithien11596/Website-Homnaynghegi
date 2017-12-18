
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN CHI TIẾT ALBUM</div>
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
		$trang1=($get_trang*7)-7;
	}
	
	$sql="select * from chitietalbum limit $trang1,7"; // trang1 (vị trí chitietalbum hiện tại) , lấy 7 chi tiết album
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC);
	
	//-------//đếm số dòng có trong chitietalbum -> tương ứng đếm số chitietalbum
	$sql_sql="SELECT count(*) FROM chitietalbum";
	$result = $objPdo->query($sql_sql);
	$row = $result->fetch(PDO::FETCH_NUM);
	$a=ceil($row[0]/7);
	for($b=1;$b<=$a;$b++){
		echo '<a href="index.php?quanly=quanlychitietalbum&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>';	
	}
	echo '<br>'.'TỔNG CHI TIẾT ALBUM LÀ: '.$row[0];
	// ---------------------------- tìm kiếm sp
	if(isset($_POST['sub-timkiem'])){
	$matk=$_POST['timkiem'];
	$sql_tk="select * from chitietalbum where idchitietAlbum='$matk'";
	$objStmtk = $objPdo->query($sql_tk);
	$datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
			$m=$rowtk['idchitietAlbum'];
			if($matk=='$m'){
				echo '<script> alert ("Không tìm thấy Id Chi tiết album")</script>';
			}else{
	?>
    <BR /><hr /><p style="color:#000;background:pink" align="center">THÔNG TIN CHI TIẾT ALBUM TÌM KIẾM:</p>
	<table width="100%" border="1">
      <tr align="center">
      	
        <td>Id Chi Tiết Album</td>
        <td>Id Album</td> 
        <td>Id Chi Tiết Bài hát</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
      	
        <td><?php echo $rowtk['idchitietAlbum'] ?></td>
        <td><?php echo $rowtk['idAlbum'] ?></td>
        <td><?php echo $rowtk['idChitietbaihat'] ?></td> 
        
        <td><a href="index.php?quanly=quanlychitietalbum&ac=sua&id=<?php echo $rowtk['idchitietAlbum'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlychitietalbum/xuly.php?id=<?php echo $rowtk['idchitietAlbum'];?>" onclick="return confirm('Bạn có chắc xóa Chi tiết album <?php echo $rowtk['idchitietAlbum']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php	
       		} 
		}
	?>
	</table>
	<p style="background:pink;height:20px"></p>
	<?php } ?>
    <!-- END CODE TÌM KIẾM -->
     <br />
<p style="width:200px;color:#00F;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
		Nhập Tên Album:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm Chi Tiết Album" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center">
    <td>Id Chi Tiết Album</td>
    <td>Id Album</td> 
    <td>Id Chi Tiết Bài hát</td>
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
  	foreach($data as $row)
	{ 
  ?>
  <tr align="center">
    <td><?php echo $row['idchitietAlbum'] ?></td>
    <td><?php echo $row['idAlbum'] ?></td>
    <td><?php echo $row['idChitietbaihat'] ?></td> 

    <td ><a href="index.php?quanly=quanlychitietalbum&ac=sua&id=<?php echo $row['idchitietAlbum'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlychitietalbum/xuly.php?id=<?php echo $row['idchitietAlbum'];?>" onclick="return confirm('Bạn có chắc xóa Chi Tiết Album thứ <?php echo $row['idchitietAlbum']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php	
   } 
   ?>
</table>
<BR /><HR />

