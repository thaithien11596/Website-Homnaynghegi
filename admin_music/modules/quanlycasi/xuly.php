<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	

	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdCasi=$_POST['idCasi'];
		$HoTenCasi=$_POST['HotenCasi'];
		
		$hinhanh=$_FILES['imageCasi']['name'];
		$hinhanh_tmp=$_FILES['imageCasi']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);

		$NgaySinhCasi=$_POST['NgaysinhCasi'];
		$QueQuanCasi=$_POST['QuequanCasi'];
		$GioiTinhCasi=$_POST['GioitinhCasi'];
		$TieuSuCasi=$_POST['TieusuCasi'];
		$idQuocgia=$_POST['IdQuocgia']; 
		//echo $idCasi." ".$HoTenCasi." ".$hinhanh." ".$NgaySinhCasi." ".$QueQuanCasi." ".$GioiTinhCasi." ".$TieusuCasi." ".$idQuocgia;

		$sql="insert into casi (HotenCasi,imageCasi,NgaysinhCasi,QuequanCasi,GioitinhCasi,TieusuCasi,IdQuocgia) values('$HoTenCasi','$hinhanh','$NgaySinhCasi','$QueQuanCasi','$GioiTinhCasi','$TieuSuCasi','$idQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlycasi&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$id=$_GET['id']; 
		$HoTenCasi=$_POST['HotenCasi'];
		$hinhanh=$_FILES['imageCasi']['name'];
		$hinhanh_tmp=$_FILES['imageCasi']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);
		$NgaySinhCasi=$_POST['NgaysinhCasi'];
		$QueQuanCasi=$_POST['QuequanCasi'];
		$GioiTinhCasi=$_POST['GioitinhCasi'];
		$TieuSuCasi=$_POST['TieusuCasi'];
		$idQuocgia=$_POST['IdQuocgia']; 
		$sql="update casi set HotenCasi='$HoTenCasi',imageCasi='$hinhanh',NgaysinhCasi='$NgaySinhCasi',QuequanCasi='$QueQuanCasi',GioitinhCasi='$GioiTinhCasi',TieusuCasi='$TieuSuCasi',IdQuocgia='$idQuocgia' where idCasi='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlycasi&ac=them');//trở lại vị trí như đường dẫn
	}else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from casi where idCasi='$id' ";
		$objPdo->query($sql);

		header('location:../../index.php?quanly=quanlycasi&ac=them');//trở lại vị trí như đường dẫn
	}
?>
