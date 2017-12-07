<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	

	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdNhacsi=$_POST['idNhacsi'];
		$HoTenNhacsi=$_POST['HotenNhacsi'];
		$NgaySinhNhacsi=$_POST['NgaysinhNhacsi'];
		$QueQuanNhacsi=$_POST['QuequanNhacsi'];
		$TieuSuNhacsi=$_POST['TieusuNhacsi'];
		$IdQuocgia=$_POST['idQuocgia']; 


		$sql="insert into nhacsi (idNhacsi,HotenNhacsi,NgaysinhNhacsi,QuequanNhacsi,TieusuNhacsi,idQuocgia) values('$IdNhacsi','$HoTenNhacsi','$NgaySinhNhacsi','$QueQuanNhacsi','$TieuSuNhacsi','$IdQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$id=$_GET['id']; 
		$HoTenNhacsi=$_POST['HotenNhacsi'];
		$NgaySinhNhacsi=$_POST['NgaysinhNhacsi'];
		$QueQuanNhacsi=$_POST['QuequanNhacsi'];
		$TieuSuNhacsi=$_POST['TieusuNhacsi'];
		$IdQuocgia=$_POST['idQuocgia']; 
		$sql="update nhacsi set HotenNhacsi='$HoTenNhacsi',NgaysinhNhacsi='$NgaySinhNhacsi',QuequanNhacsi='$QueQuanNhacsi',TieusuNhacsi='$TieuSuNhacsi',idQuocgia='$IdQuocgia' where idNhacsi='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from nhacsi where idNhacsi='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=them');//trở lại vị trí như đường dẫn
	}
?>
