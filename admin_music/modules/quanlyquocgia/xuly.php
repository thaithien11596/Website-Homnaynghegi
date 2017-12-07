<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	 print_r($_POST);
	//$IdCasi=$_POST['idCasi']; 
	$maqg=$_GET['id'];//
	
	// lấy thông tin từ form thêm và sửa , method=post
	$TenQuocGia=$_POST['TenQuocgia'];
	
	
	 // lấy thông tin từ form thêm và sửa , method=post
	if(isset($_POST['them'])){ // khi submit nút thêm sẽ chạy code này -> 
		$IdQuocgia=$_POST['idQuocgia']; 	
		$sql="insert into quocgia (idQuocgia,TenQuocgia) values('$IdQuocgia','$TenQuocGia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlyquocgia&ac=them');//trở lại vị trí như đường dẫn
	}
	else if(isset($_POST['sua'])){
		
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
