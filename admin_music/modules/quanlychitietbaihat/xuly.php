<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 
	 // nhận id từ trang lietke
	
	
	$hinhanh=$_FILES['imageBaihat']['name'];
	$hinhanh_tmp=$_FILES['imageBaihat']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);

	$NgayDangBaiHat=$_POST['NgaydangBaihat'];
	$LuotNgheBaiHat=$_POST['LuotngheBaihat'];
	$LuotTaiBaiHat=$_POST['LuottaiBaihat'];
	
	$link=$_FILES['LinkBaihat']['name'];
	$link_tmp=$_FILES['LinkBaihat']['tmp_name'];
	move_uploaded_file($link_tmp,'audio/'.$link);

	$idBaihat=$_POST['IdBaihat'];
	$idCasi=$_POST['IdCasi'];
	$idTheloai=$_POST['IdTheloai'];  // khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="insert into chitietbaihat(imageBaihat,NgaydangBaihat,LuotngheBaihat,LuottaiBaihat,LinkBaihat,IdBaihat,IdCasi,IdTheloai) values('$hinhanh',CURRENT_TIMESTAMP,'$LuotNgheBaiHat','$LuotTaiBaiHat','$link','$idBaihat','$idCasi','$idTheloai')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=them');//trở lại vị trí như đường dẫn
	}else if(isset($_POST['sua'])){
	$id=$_GET['id']; // lấy thông tin từ form thêm và sửa , method=post
	

	$hinhanh=$_FILES['imageBaihat']['name'];
	$hinhanh_tmp=$_FILES['imageBaihat']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'image/trangchu/image_Baihat/'.$hinhanh);
	$NgayDangBaiHat=$_POST['NgaydangBaihat'];
	$LuotNgheBaiHat=$_POST['LuotngheBaihat'];
	$LuotTaiBaiHat=$_POST['LuottaiBaihat'];
	$LinkBaiHat=$_POST['LinkBaihat'];
	$idBaihat=$_POST['IdBaihat'];
	$idCasi=$_POST['IdCasi'];
	$idTheloai=$_POST['IdTheloai'];  // khi submit nút thêm sẽ chạy code này -> 
		$sql="update chitietbaihat set imageBaihat='$hinhanh',NgaydangBaihat='$NgayDangBaiHat',LuotngheBaihat='$LuotNgheBaiHat',LuottaiBaihat='$LuotTaiBaiHat',LinkBaihat='$LinkBaiHat',IdBaihat='$idBaihat',IdCasi='$idCasi',IdTheloai='$idTheloai' where idChitietbaihat='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=them');//trở lại vị trí như đường dẫn
	}

		else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from chitietbaihat where idChitietbaihat='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=them');//trở lại vị trí như đường dẫn
	}


	?>