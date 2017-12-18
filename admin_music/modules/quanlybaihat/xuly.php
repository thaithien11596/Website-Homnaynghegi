<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 

		$IdBaihat=$_POST['idBaihat']; // lấy thông tin từ form thêm và sửa , method=post
		$TenBaiHat=$_POST['TenBaihat'];
		$LoiBaiHat=$_POST['LoiBaihat'];
		$idNhacsi=$_POST['IdNhacsi'];
		$idQuocgia=$_POST['IdQuocgia'];// khi submit nút thêm sẽ chạy code này -> 
		
		$sql="insert into baihat(TenBaihat,LoiBaihat,IdNhacsi,IdQuocgia) values('$TenBaiHat','$LoiBaiHat','$idNhacsi','$idQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlybaihat&ac=them');//trở lại vị trí như đường dẫn
	}else if(isset($_POST['sua'])){
		 // nhận id từ trang lietke
	$id=$_GET['id']; // lấy thông tin từ form thêm và sửa , method=post
	$TenBaiHat=$_POST['TenBaihat'];
	$LoiBaiHat=$_POST['LoiBaihat'];
	$idNhacsi=$_POST['IdNhacsi'];
	$idQuocgia=$_POST['IdQuocgia'];
	
		
		$sql="update baihat set TenBaihat='$TenBaiHat',LoiBaihat='$LoiBaiHat',IdNhacsi='$idNhacsi',IdQuocgia='$idQuocgia' where idBaihat='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlybaihat&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
		}
		else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from baihat where idBaihat='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlybaihat&ac=them');//trở lại vị trí như đường dẫn
	}


	?>