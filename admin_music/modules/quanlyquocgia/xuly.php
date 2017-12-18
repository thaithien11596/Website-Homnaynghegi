<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdQuocgia=$_POST['idQuocgia'];
		$TenQuocGia=$_POST['TenQuocgia']; 	
		$sql="insert into quocgia(TenQuocgia) values ('$TenQuocGia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyquocgia&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		$maqg=$_GET['id'];
		$TenQuocGia=$_POST['TenQuocgia']; 
		$sql="update quocgia set TenQuocgia='$TenQuocGia' where idQuocgia='$maqg'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyquocgia&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
	}
	else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from quocgia where idQuocgia='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyquocgia&ac=them');//trở lại vị trí như đường dẫn
	}
	
?>
