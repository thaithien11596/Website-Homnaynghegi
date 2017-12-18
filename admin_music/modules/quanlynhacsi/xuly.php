<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	

	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdNhacsi=$_POST['idNhacsi'];
		$HoTenNhacsi=$_POST['HotenNhacsi'];

		$hinhanh=$_FILES['imageNhacsi']['name'];
		$hinhanh_tmp=$_FILES['imageNhacsi']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);

		$NgaySinhNhacsi=$_POST['NgaysinhNhacsi'];
		$QueQuanNhacsi=$_POST['QuequanNhacsi'];
		$TieuSuNhacsi=$_POST['TieusuNhacsi'];
		$idQuocgia=$_POST['IdQuocgia'];
  	

		$sql="insert into nhacsi (HotenNhacsi,imageNhacsi,NgaysinhNhacsi,QuequanNhacsi,TieusuNhacsi,IdQuocgia) values('$HoTenNhacsi','$hinhanh','$NgaySinhNhacsi','$QueQuanNhacsi','$TieuSuNhacsi','$idQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$id=$_GET['id']; 
		$HoTenNhacsi=$_POST['HotenNhacsi'];
		$hinhanh=$_FILES['imageNhacsi']['name'];
		$hinhanh_tmp=$_FILES['imageNhacsi']['tmp_name'];
		move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);
		$NgaySinhNhacsi=$_POST['NgaysinhNhacsi'];
		$QueQuanNhacsi=$_POST['QuequanNhacsi'];
		$TieuSuNhacsi=$_POST['TieusuNhacsi'];
		$idQuocgia=$_POST['IdQuocgia']; 
		$sql="update nhacsi set HotenNhacsi='$HoTenNhacsi',imageNhacsi='$hinhanh',NgaysinhNhacsi='$NgaySinhNhacsi',QuequanNhacsi='$QueQuanNhacsi',TieusuNhacsi='$TieuSuNhacsi',IdQuocgia='$idQuocgia' where idNhacsi='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from nhacsi where idNhacsi='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlynhacsi&ac=them');//trở lại vị trí như đường dẫn
	}
?>
