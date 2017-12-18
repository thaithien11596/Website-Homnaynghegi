<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['sua'])){ 
	 // nhận id từ trang lietke
	$id=$_GET['id']; 
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$HoTenThanhVien=$_POST['HotenThanhvien'];
	$GioiTinhThanhVien=$_POST['GioitinhThanhvien'];
	$SdtThanhVien=$_POST['SdtThanhvien'];
	$DiaChiThanhVien=$_POST['DiachiThanhvien'];
	$NgaySinhThanhVien=$_POST['NgaysinhThanhvien'];
	$TrangThaiHD=$_POST['TrangthaiHD'];
	$EmailThanhVien=$_POST['EmailThanhvien'];// khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="update  thanhvien set username='$Username',password='$Password',HotenThanhvien='$HoTenThanhVien',GioitinhThanhvien='$GioiTinhThanhVien',SdtThanhvien='$SdtThanhVien',DiachiThanhvien='$DiaChiThanhVien',NgaysinhThanhvien='$NgaySinhThanhVien',TrangthaiHD='$TrangThaiHD',EmailThanhvien='$EmailThanhVien' where idThanhvien='$id'";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlythanhvien&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
		}
		
	?>