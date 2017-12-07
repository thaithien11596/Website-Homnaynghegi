<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	

	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdCasi=$_POST['idCasi'];
		$HoTenCasi=$_POST['HotenCasi'];
		$NgaySinhCasi=$_POST['NgaysinhCasi'];
		$QueQuanCasi=$_POST['QuequanCasi'];
		$GioiTinhCasi=$_POST['GioitinhCasi'];
		$TieuSuCasi=$_POST['TieusuCasi'];
		$IdQuocgia=$_POST['idQuocgia']; 


		$sql="insert into casi (idCasi,HotenCasi,NgaysinhCasi,QuequanCasi,GioitinhCasi,TieusuCasi,idQuocgia) values('$IdCasi','$HoTenCasi','$NgaySinhCasi','$QueQuanCasi','$GioiTinhCasi','$TieuSuCasi','$IdQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlycasi&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$id=$_GET['id']; 
		$HoTenCasi=$_POST['HotenCasi'];
		$NgaySinhCasi=$_POST['NgaysinhCasi'];
		$QueQuanCasi=$_POST['QuequanCasi'];
		$GioiTinhCasi=$_POST['GioitinhCasi'];
		$TieuSuCasi=$_POST['TieusuCasi'];
		$IdQuocgia=$_POST['idQuocgia']; 
		$sql="update casi set HotenCasi='$HoTenCasi',NgaysinhCasi='$NgaySinhCasi',QuequanCasi='$QueQuanCasi',GioitinhCasi='$GioiTinhCasi',TieusuCasi='$TieuSuCasi',idQuocgia='$IdQuocgia' where idCasi='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlycasi&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from casi where idCasi='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlycasi&ac=them');//trở lại vị trí như đường dẫn
	}
?>
