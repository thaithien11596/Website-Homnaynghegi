<?php
	include('../config.php');
	
	$ma=$_POST['masp'];
	$size=$_POST['size'];
	$id=$_GET['id'];
	$stt=$_GET['stt'];
	if(isset($_POST['them'])){
		$sql="insert into loaisize(Masp,size) values('$ma','$size')";
		$objPdo->query($sql);
		header('location:../../index.php?quanly=quanlysize&ac=them');
	}else if(isset($_POST['sua'])){		
		$sql_sua="update loaisize set size='$size' where Masp='$id' and Thutu='$stt' ";
		$objPdo->query($sql_sua);
		header('location:../../index.php?quanly=quanlysize&ac=sua&id='.$id);
	}else{
		$size=$_GET['size'];
		$sql_xoa="delete from loaisize where Masp='$id' and size='$size'";
		$objPdo->query($sql_xoa);
		header('location:../../index.php?quanly=quanlysize&ac=them');
	}
?>