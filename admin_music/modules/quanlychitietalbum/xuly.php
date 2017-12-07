<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 
	 // nhận id từ trang lietke
	$IdchitietAlbum=$_POST['idchitietAlbum']; // lấy thông tin từ form thêm và sửa , method=post
	$LuotNgheAlbum=$_POST['LuotngheAlbum'];
	$NgayDangAlbum=$_POST['NgaydangAlbum'];
	$IdAlbum=$_POST['idAlbum'];
	$IdChitietbaihat=$_POST['idChitietbaihat'];// khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="insert into chitietalbum(idchitietAlbum,LuotngheAlbum,NgaydangAlbum,idAlbum,idChitietbaihat) values('$IdchitietAlbum','$LuotNgheAlbum','$NgayDangAlbum','$IdAlbum','$IdChitietbaihat')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietalbum&ac=them');//trở lại vị trí như đường dẫn
	}else if(isset($_POST['sua'])){
		 // nhận id từ trang lietke
	$id=$_GET['id']; // lấy thông tin từ form thêm và sửa , method=post
	$LuotNgheAlbum=$_POST['LuotngheAlbum'];
	$NgayDangAlbum=$_POST['NgaydangAlbum'];
	$IdAlbum=$_POST['idAlbum'];
	$IdChitietbaihat=$_POST['idChitietbaihat'];// khi submit nút thêm sẽ chạy code này -> 
	
		
		$sql="update chitietalbum set LuotngheAlbum='$LuotNgheAlbum',NgaydangAlbum='$NgayDangAlbum',idAlbum='$IdAlbum',idChitietbaihat='$IdChitietbaihat' where idchitietAlbum='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietalbum&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
		}
		else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from chitietalbum where idchitietAlbum='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietalbum&ac=them');//trở lại vị trí như đường dẫn
	}


	?>