<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu

	
	
	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdTheloai=$_POST['idTheloai'];
		$TenTheLoai=$_POST['TenTheloai']; 	
		$sql="insert into theloai (TenTheloai) values('$TenTheLoai')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlytheloai&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$matl=$_GET['id'];
		$TenTheLoai=$_POST['TenTheloai']; 
		$sql="update theloai set TenTheloai='$TenTheLoai' where idTheloai='$matl'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlytheloai&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}
	else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from theloai where idTheloai='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlytheloai&ac=them');//trở lại vị trí như đường dẫn
	}
	
?>
