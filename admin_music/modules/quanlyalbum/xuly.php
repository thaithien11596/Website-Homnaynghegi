<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	 print_r($_POST); 
	$maa=$_GET['id'];
	
	// lấy thông tin từ form thêm và sửa , method=post
	$TenALBUM=$_POST['TenAlbum'];
	
	
	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdAlbum=$_POST['idAlbum']; 	
		$sql="insert into album (idAlbum,TenAlbum) values('$IdAlbum','$TenALBUM')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyalbum&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		
		$sql="update album set TenAlbum='$TenALBUM' where idAlbum='$maa'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyalbum&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}
	else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from album where idAlbum='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyalbum&ac=them');//trở lại vị trí như đường dẫn
	}
	
?>
