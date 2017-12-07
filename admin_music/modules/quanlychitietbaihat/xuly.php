<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 
	 // nhận id từ trang lietke
	$IdChitietBaihat=$_POST['idChitietbaihat']; // lấy thông tin từ form thêm và sửa , method=post
	$h=$_POST['imageBaihat']['type'];
	$ImageBaiHat=$_FILES['imageBaihat']['name'];
	$ImageBaiHat_tmp=$_FILES['imageBaihat']['tmp_name'];
	move_uploaded_file($ImageBaiHat_tmp, 'uploads'.$ImageBaiHat);

	$NgayDangBaiHat=$_POST['NgaydangBaihat'];
	$LuotNgheBaiHat=$_POST['LuotngheBaihat'];
	$LuotTaiBaiHat=$_POST['LuottaiBaihat'];
	$LinkBaiHat=$_POST['LinkBaihat'];
	$IdBaihat=$_POST['idBaihat'];
	$IdCasi=$_POST['idCasi'];
	$IdTheloai=$_POST['idTheloai'];  // khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="insert into chitietbaihat(idBaihat,TenBaihat,LoiBathat,idNhacsi,idQuocgia) values('$IdBaihat','$TenBaiHat','$LoiBatHat','$IdNhacsi','$IdQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=them');//trở lại vị trí như đường dẫn
	}else if(isset($_POST['sua'])){
	// nhận id từ trang lietke
	$IdChitietBaihat=$_POST['idChitietbaihat']; // lấy thông tin từ form thêm và sửa , method=post
	$h=$_POST['imageBaihat']['type'];
	$ImageBaiHat=$_FILES['imageBaihat']['name'];
	$ImageBaiHat_tmp=$_FILES['imageBaihat']['tmp_name'];
	move_uploaded_file($ImageBaiHat_tmp, 'uploads'.$ImageBaiHat);
	
	$NgayDangBaiHat=$_POST['NgaydangBaihat'];
	$LuotNgheBaiHat=$_POST['LuotngheBaihat'];
	$LuotTaiBaiHat=$_POST['LuottaiBaihat'];
	$LinkBaiHat=$_POST['LinkBaihat'];
	$IdBaihat=$_POST['idBaihat'];
	$IdCasi=$_POST['idCasi'];
	$IdTheloai=$_POST['idTheloai'];  // khi submit nút thêm sẽ chạy code này -> 
	
		
		$sql="update chitietbaihat set TenBaihat='$TenBaiHat',LoiBathat='$LoiBatHat',idNhacsi='$IdNhacsi',idQuocgia='$IdQuocgia' where idBaihat='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
		}
		else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from chitietbaihat where idChitietbaihat='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlychitietbaihat&ac=them');//trở lại vị trí như đường dẫn
	}


	?>