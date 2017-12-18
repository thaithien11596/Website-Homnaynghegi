<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	//print_r($_POST); 
		
	// lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
	
		$TenAlbum=$_POST['TenAlbum'];

		$hinhanh=$_FILES['imageAlbum']['name'];
		$hinhanh_tmp=$_FILES['imageAlbum']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);

		$LuotNgheAlbum=$_POST['LuotngheAlbum'];
		$NgayDangAlbum=$_POST['NgaydangAlbum'];
		$idQuocgia=$_POST['IdQuocgia'];
		$sql="insert into album(TenAlbum,imageAlbum,LuotngheAlbum,NgaydangAlbum,IdQuocgia) values ('$TenAlbum','$hinhanh','$LuotNgheAlbum',CURRENT_TIMESTAMP,'$idQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyalbum&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$id=$_GET['id']; 
		$TenAlbum=$_POST['TenAlbum'];

		$hinhanh=$_FILES['imageAlbum']['name'];
		$hinhanh_tmp=$_FILES['imageAlbum']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);

		$LuotNgheAlbum=$_POST['LuotngheAlbum'];
		$NgayDangAlbum=$_POST['NgaydangAlbum'];
		$idQuocgia=$_POST['IdQuocgia']; 
		$sql="update album set TenAlbum='$TenAlbum',imageAlbum='$hinhanh',LuotngheAlbum='$LuotNgheAlbum',NgayDangAlbum=CURRENT_TIMESTAMP,IdQuocgia='$idQuocgia' where idAlbum='$id'";
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
