<?php
	//code xử lý database ở content
	include('../config.php'); // load dữ liệu
	
	
	
	if(isset($_POST['them'])){ 
	 // nhận id từ trang lietke
	$IdThanhVien=$_POST['idThanhvien']; // lấy thông tin từ form thêm và sửa , method=post
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$HoTenThanhVien=$_POST['HotenThanhvien'];
	$GioiTinhThanhVien=$_POST['GioitinhThanhvien'];
	$SdtThanhVien=$_POST['SdtThanhvien'];
	$DiaChiThanhVien=$_POST['DiachiThanhvien'];
	$NgaySinhThanhVien=$_POST['NgaysinhThanhvien'];
	$TrangThaiHD=$_POST['TrangthaiHD'];// khi submit nút thêm sẽ chạy code này -> 
		
		
		$sql="insert into thanhvien(idThanhvien,username,password,HotenThanhvien,GioitinhThanhvien,SdtThanhvien,DiachiThanhvien,NgaysinhThanhvien,TrangthaiHD) values('$IdThanhVien','$Username','$Password','$HoTenThanhVien','$GioiTinhThanhVien','$SdtThanhVien','$DiaChiThanhVien','$NgaySinhThanhVien','$TrangThaiHD')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlythanhvien&ac=them');//trở lại vị trí như đường dẫn
	//}else if(isset($_POST['sua'])){
	// nhận id từ trang lietke
	//$id=$_GET['id']; // lấy thông tin từ form thêm và sửa , method=post
	//$Username=$_POST['username'];
	//$Password=$_POST['password'];
	//$HoTenThanhVien=$_POST['HotenThanhvien'];
	//$GioiTinhThanhVien=$_POST['GioitinhThanhvien'];
	//$SdtThanhVien=$_POST['SdtThanhvien'];
	//$DiaChiThanhVien=$_POST['DiachiThanhvien'];
	//$NgaySinhThanhVien=$_POST['NgaysinhThanhvien'];
	//$NgayDangKi=$_POST['NgayDangki'];
	//$TrangThaiHD=$_POST['trangthaihd'];// khi submit nút thêm sẽ chạy code này -> 
	
		
		//$sql="update thanhvien set username='$Username',password='$Password',HotenThanhvien='$HoTenThanhVien',GioitinhThanhvien='$GioiTinhThanhVien',SdtThanhvien='$SdtThanhVien',DiachiThanhvien='$DiaChiThanhVien',NgaysinhThanhvien='$NgaySinhThanhVien',NgayDangki='$NgayDangKi',trangthaihd='$TrangThaiHD' where idThanhvien='$id'";
		//$objPdo->query($sql);
		//header('location:../../index.php?quanly=quanlythanhvien&ac=sua&id='.$id);//trở lại vị trí như đường dẫn
		}
		else{	// khi click thẻ xóa 
		$id=$_GET['id'];// lấy thông tin từ form thêm và sửa , method=post
		$sql="delete from thanhvien where idThanhvien='$id' ";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlythanhvien&ac=them');//trở lại vị trí như đường dẫn
	}


	?>