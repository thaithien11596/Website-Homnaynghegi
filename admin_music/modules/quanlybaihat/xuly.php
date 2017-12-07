<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 
	 // nhận id từ trang lietke
	$IdBaihat=$_POST['idBaihat']; // lấy thông tin từ form thêm và sửa , method=post
	$TenBaiHat=$_POST['TenBaihat'];
	$LoiBaiHat=$_POST['LoiBaihat'];
	$IdNhacsi=$_POST['idNhacsi'];
	$IdQuocgia=$_POST['idQuocgia'];// khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="insert into baihat(idBaihat,TenBaihat,LoiBaihat,idNhacsi,idQuocgia) values('$IdBaihat','$TenBaiHat','$LoiBaiHat','$IdNhacsi','$IdQuocgia')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlybaihat&ac=them');//trở lại vị trí như đường dẫn
	}else if(isset($_POST['sua'])){
		 // nhận id từ trang lietke
	$id=$_GET['id']; // lấy thông tin từ form thêm và sửa , method=post
	$TenBaiHat=$_POST['TenBaihat'];
	$LoiBaiHat=$_POST['LoiBaihat'];
	$IdNhacsi=$_POST['idNhacsi'];
	$IdQuocgia=$_POST['idQuocgia'];
	
		
		$sql="update baihat set TenBaihat='$TenBaiHat',LoiBaihat='$LoiBaiHat',idNhacsi='$IdNhacsi',idQuocgia='$IdQuocgia' where idBaihat='$id'";
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